<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController; 

Route::get('/', [PostsController::class, 'index']);
Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');