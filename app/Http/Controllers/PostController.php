<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $lastName = 'Tanaka';
        $firstName = 'Taro';
        return view('post.index', compact('lastName','firstName'));
    }
}
