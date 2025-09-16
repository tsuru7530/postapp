<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 
use App\Models\Comment; 

class CommentsController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $validated = $request->validate([
            'body'  => 'required',
        ]);

        $post -> comments() -> create([
          'body' => $validated['body']
        ]);

        return redirect('/');
    }
}
