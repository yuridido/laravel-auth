<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('guests.index', compact('posts'));
    }

    public function show($slug) {
        $post = Post::where('slug', $slug)->first();//con il first appena lo trova si ferma

        return view('guests.show', compact('post'));
    }
}
