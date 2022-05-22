<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->with(['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->day = $request->day;
        $post->time = $request->time;
        $post->score = $request->score;
        $post->body = $request->body;
        $post->save();
        return redirect()->route('posts.index');
    }
}
