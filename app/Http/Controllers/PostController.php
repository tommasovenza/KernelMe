<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PostController extends Controller
{
    // Index Post
    public function getPostsBlog(): View
    {
        // get all posts
        $posts = Post::all()->sortByDesc('updated_at');
        // return view
        return view('layout.blog.index', compact('posts'));
    }

    // Show Create Form View
    public function postCreate(): View
    {
        return view('layout.blog.create');
    }

    // Store Blog Post Data
    public function postStore(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required',
            'excerpt' => 'required',
            'tags' => 'required',
            'read_time' => 'required',
            'featured_image' => 'nullable|file|max:10240|mimetypes:image/jpeg,image/png,image/webp,image/avif',
        ]);

        if ($validated) {
            // adding fields
            $validated['slug'] = Str::slug($validated['title']);
            $validated['date'] = Carbon::now();
            // check if image has been uploaded
            if ($request->file('featured_image')) {
                // store file and getting its path
                $path = $request->file('featured_image')->store('posts', 'public');
                // saving path
                $validated['featured_image'] = $path;
            }
            // add post
            Post::create($validated);
            // redirect
            return redirect('blog')
                ->with('message', 'Post created Successfully!');
        } else {
            // exit
            return redirect()
                ->back()
                ->with('message', 'Something goes wrong!');
        }
    }

    // Delete Post
    public function postDestroy($id): RedirectResponse
    {
        // get post
        $post = Post::find($id);
        // delete featured image from storage
        Storage::disk('public')->delete($post->featured_image);
        // delete Post
        $post->delete();
        // redirect
        return redirect('blog')->with('message', 'Post Deleted Successfully');
    }

    // Show Post View
    public function postShow($url): View
    {
        // get post from url
        $post = Post::where('slug', $url)->first();
        // error handling
        if (is_null($post)) {
            abort(404);
        }
        // get all other posts
        $all_other_posts = Post::where('id', '!=', $post->id)
            ->get();

        $length = $all_other_posts->count();
        // count length post
        if ($length > 2) {
            $all_other_posts = $all_other_posts->random(3);
        }

        // return show view
        return view('layout.blog.show', compact('post', 'all_other_posts'));
    }
}
