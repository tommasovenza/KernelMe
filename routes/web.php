<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LastFmController;
use App\Http\Controllers\ContactController;

// Home Route
Route::get('/', function () {
    return view('layout.home');
})->name('home');

// Music Route
Route::get('/music', function () {
    return view('layout.music');
})->name('music');

// Privacy Policy Route
Route::get('/privacy-policy', function () {
    return view('layout.privacy');
})->name('privacy');

// Post Controller Routes
Route::get('/blog', [PostController::class, 'getPostsBlog'])->name('blog');
// Admin Routes for adding Posts
Route::middleware(['auth', 'throttle:20,1'])->group(function () {
    Route::get('/blog/create', [PostController::class, 'postCreate'])->name('post.create');
    Route::post('/post/store', [PostController::class, 'postStore'])->name('post.store');
});
// Show Post
Route::get('/post/{post}', [PostController::class, 'postShow'])->name('post.show');

// Contact Form Controller
Route::get('/contacts', [ContactController::class, 'showContactPage'])->name('contacts');
Route::post('/contact-form', [ContactController::class, 'submitContactForm'])
    ->name('contact-form')
    ->middleware('throttle:10,1');

// User form
Route::get('/login', [UserController::class, 'showLogin'])->name('show-login');
Route::post('/auth', [UserController::class, 'authUser'])->name('auth-user')->middleware('throttle:10,1');
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

// Last Fm API
Route::get('/my-listens', [LastFmController::class, 'showLastFmView'])->name('listens'); // show view
Route::get('/last-fm/recent-tracks', [LastFmController::class, 'recentTracks']); // recent tracks
Route::get('/top-artist', [LastFmController::class, 'topArtist']); // top artist
Route::get('/top-album', [LastFmController::class, 'topAlbum']); // top album
