<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    // create index
    public function index()
    {
        return view('artikel', [
            'posts' => Post::latest()->paginate(6)->withQueryString()
        ]);
    }

    public function Show(Post $post)
    {
        return view('showPost', [
            "title" => "Single Post",
            "posts" => $post
        ]);
    }
}
