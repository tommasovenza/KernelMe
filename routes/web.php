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

// Post Controller
Route::get('/blog', [PostController::class, 'getPostsBlog'])->name('blog');
Route::get('/blog/create', [PostController::class, 'postCreate'])->name('post.create')->middleware('auth');
Route::post('/post/store', [PostController::class, 'postStore'])->name('post.store');
Route::get('/post/{post}', [PostController::class, 'postShow'])->name('post.show');

// Contact Form Controller
Route::get('/contacts', [ContactController::class, 'showContactPage'])->name('contacts');
Route::post('/contact-form', [ContactController::class, 'submitContactForm'])->name('contact-form');

// User form
Route::get('/login', [UserController::class, 'showLogin'])->name('show-login');
Route::post('/auth', [UserController::class, 'authUser'])->name('auth-user');
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

// Last Fm API
Route::get('/my-listens', [LastFmController::class, 'showLastFmView'])->name('listens'); // show view
Route::get('/last-fm/recent-tracks', [LastFmController::class, 'recentTracks']); // recent tracks
Route::get('/last-7-days', [LastFmController::class, 'last7Days']); // last 7 days
Route::get('/last-30-days', [LastFmController::class, 'last30Days']); // last 30 days
Route::get('/top-artist', [LastFmController::class, 'topArtist']); // top artist
Route::get('/top-album', [LastFmController::class, 'topAlbum']); // top album
