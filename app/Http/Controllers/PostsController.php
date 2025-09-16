<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 
use App\Models\Comment; 

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $comment = new Comment();
        $comments = $post -> comments;
        return view('posts.show', compact('post', 'comment', 'comments'));
    }
    
    public function create()
    {
        $post = new Post();
        return view('posts.create', compact('post'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'body'  => 'required',
        ]);

        Post::create($validated);

        return redirect('/');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body'  => 'required|string',
        ]);

        $post = Post::findOrFail($id);
        $post->title = $validated['title'];
        $post->body  = $validated['body'];
        $post->save();

        return redirect('/');
    }
    
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/');
    }
}
