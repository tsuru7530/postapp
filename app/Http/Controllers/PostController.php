<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['title' => 'first post', 'body' => 'Hello'],
            ['title' => 'second post', 'body' => 'My name is'],
            ['title' => 'third post', 'body' => 'Tanaka Taro']
        ];
        return view('post.index', compact('posts'));
    }
}
