<?php

use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', function () {
    return view('layout.app');
});