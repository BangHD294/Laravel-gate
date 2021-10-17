<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('list', compact('posts'));
    }
    public function show($id)
    {
        $post = Post::find($id);
        if (auth()->user()->can('view', $post)) {
            return view('show', compact('post'));

        }else{
            abort(403);
        }
    }
}
