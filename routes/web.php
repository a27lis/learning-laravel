<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/test', TestController::class);

// user
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::get('blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');

// CRUD
Route::prefix('user')->group(function () {

    // 1 controller for 1 resource
    Route::get('posts', [PostController::class, 'index'])->name('user.posts');
    
    Route::get('posts/create', [PostController::class, 'create'])->name('user.posts.create');
    
    Route::post('posts', [PostController::class, 'store'])->name('user.posts.store');
    
    Route::get('posts/{post}', [PostController::class, 'show'])->name('user.posts.show');
    
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('user.posts.edit');
    
    Route::put('posts/{post}', [PostController::class, 'update'])->name('user.posts.update');
    
    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('user.posts.delete');
    
    Route::put('posts/{post}/like', [PostController::class, 'like'])->name('user.posts.like');
});

// the same to
// Route::resource('posts;, PostController:class);

Route::resource('posts/{post}/comments', CommentController::class);





Route::redirect('/home', '/');
