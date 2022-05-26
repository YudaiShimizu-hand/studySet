<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();//ログインuserのidを取得
        $posts = Post::with('user')->where('user_id', '=', $user_id)
                                   ->latest('created_at')->paginate(10);
        // $posts = Post::orderBy('created_at', 'desc')->get();
        // $posts->user_id == Auth::user()->id;
        return view('posts.index')->with(['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'day' => 'required',
            'time' => 'required|digits_between:0,24',
            'score' => 'required|digits_between:0,5',
            'body' => 'required',
            ]);


        $post = new Post();
        $post->title = $request->title;
        $post->day = $request->day;
        $post->time = $request->time;
        $post->score = $request->score;
        $post->body = $request->body;
        $post->save();
        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show', $post)->with(['post' => $post]);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with(['post' => $post]);
    }
}
