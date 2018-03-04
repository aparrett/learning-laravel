<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required|max:15',
            'body' => 'required'
        ]);

        $post = new Post;
        $post->title = request('title');
        $post->body = request('body');
        $post->save();
        
        session()->flash(
            'message', 'Your post has been created'
        );
        // Other way of saving post.
        // Post::create(request(['title', 'body']));

        return redirect('/');
    }
}
