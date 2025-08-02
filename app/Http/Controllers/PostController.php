<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function getPostsBlog() {
        // get all posts
        $posts = Post::all();
        // return view
        return view('layout.blog', compact('posts'));
    }
}
