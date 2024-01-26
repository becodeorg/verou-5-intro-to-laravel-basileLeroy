<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index ()
    {
        $posts = Post::all();

        return view("posts.index", [
            "posts" => $posts,
        ]);
    }

    public function show ($id)
    {
        $post = Post::find($id);

        return view ("posts.show", [
            "post" => $post,
        ]);
    }
}
