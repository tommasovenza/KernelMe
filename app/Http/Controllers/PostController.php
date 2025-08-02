<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Index Post
    public function getPostsBlog() {
        // get all posts
        $posts = Post::all();
        // return view
        return view('layout.blog.index', compact('posts'));
    }

    // Post Show
    public function postShow($url) {
        // get post from url
        $post = Post::where('slug', $url)->first();
        // return show view
        return view('layout.blog.show', compact('post'));
    }
}
