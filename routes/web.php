<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController; 
use App\Http\Controllers\CommentsController;

Route::get('/', [PostsController::class, 'index']);
Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [PostsController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostsController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostsController::class, 'destroy'])->name('posts.destroy');
Route::resource('posts.comments', CommentsController::class);