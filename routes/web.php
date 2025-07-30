<?php

use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', function () {
    return view('layout.home');
});

Route::get('/contacts', function () {
    return view('layout.contacts');
})->name('contacts');