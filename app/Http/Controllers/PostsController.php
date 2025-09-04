<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 

class PostsController extends Controller
{
    public function index()
    {
        $posts = [
            ['title' => 'first post', 'body' => 'Hello'],
            ['title' => 'second post', 'body' => 'My name is'],
            ['title' => 'third post', 'body' => 'Tanaka Taro']
        ];
        return view('posts.index', compact('posts'));
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
}
