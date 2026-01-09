<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Index Post
    public function getPostsBlog()
    {
        // get all posts
        $posts = Post::all()->sortByDesc('updated_at');
        // return view
        return view('layout.blog.index', compact('posts'));
    }
    // Show Create Form View
    public function postCreate()
    {
        return view('layout.blog.create');
    }
    // Store Blog Post Data
    public function postStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required',
            'excerpt' => 'required',
            'tags' => 'required',
            'read_time' => 'required',
        ]);

        if ($validated) {
            // adding fields
            $validated['slug'] = Str::slug($validated['title']);
            $validated['date'] = Carbon::now();
            // add post
            Post::create($validated);

            return redirect('blog')->with('message', 'Post created Successfully!');
        } else {
            return redirect()->back()->with('message', 'Something goes wrong!');
        }
    }

    // Show Post View
    public function postShow($url)
    {
        // get post from url
        $post = Post::where('slug', $url)->first();
        // error handling
        if (is_null($post)) {
            abort(404);
        }
        // get all other posts
        $all_other_posts = Post::where('id', '!=', $post->id)
            ->get()
            ->random(3);

        // return show view
        return view('layout.blog.show', compact('post', 'all_other_posts'));
    }
}
