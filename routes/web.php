<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;

// Home Route
Route::get('/', function () {
    return view('layout.home');
})->name('home');

// Post Controller
Route::get('/blog', [PostController::class, 'getPostsBlog'])->name('blog');
Route::get('/posts/{post}', [PostController::class, 'postShow'])->name('posts.show');


// Contact Form Controller
Route::get('/contacts', [ContactController::class, 'showContactPage'])->name('contacts');
Route::post('/contact-form', [ContactController::class, 'submitContactForm'])->name('contact-form');