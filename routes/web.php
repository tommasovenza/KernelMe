<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', function () {
    return view('layout.home');
});

Route::get('/contacts', function () {
    return view('layout.contacts');
})->name('contacts');


// Contact Form Controller
Route::post('/contact-form', [ContactController::class, 'contactForm'])->name('contact-form');