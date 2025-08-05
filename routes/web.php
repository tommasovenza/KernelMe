<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;

// Home Route
Route::get('/', function () {
    return view('layout.home');
})->name('home');

// Post Controller
Route::get('/blog', [PostController::class, 'getPostsBlog'])->name('blog');
Route::get('/blog/create', [PostController::class, 'postCreate'])->middleware('auth');
Route::post('/post/store', [PostController::class, 'postStore'])->name('post.store');
Route::get('/post/{post}', [PostController::class, 'postShow'])->name('post.show');

// Contact Form Controller
Route::get('/contacts', [ContactController::class, 'showContactPage'])->name('contacts');
Route::post('/contact-form', [ContactController::class, 'submitContactForm'])->name('contact-form');

// User form
Route::get('/login', [UserController::class, 'showLogin'])->name('show-login');
Route::post('/auth', [UserController::class, 'authUser'])->name('auth-user');
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');