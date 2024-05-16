<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/test', TestController::class);

// CRUD

// 1 controller for 1 resource
Route::get('posts', [PostController::class, 'index'])->name('posts');

Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('posts', [PostController::class, 'store'])->name('posts.store');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');

Route::delete('posts/{post}', [PostController::class, 'delete'])->name('posts.delete');

Route::put('posts/{post}/like', [PostController::class, 'like'])->name('posts.like');

// the same to
// Route::resource('posts;, PostController:class);





Route::redirect('/home', '/');
