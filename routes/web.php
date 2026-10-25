<?php

use Illuminate\Support\Facades\Route;

// ---- HOME PAGE ----
Route::get('/', function () {
    return view('home');
});

// ---- GENRES PAGE ----
Route::get('/genres', function () {
    return view('genres');
});

// ---- ABOUT PAGE ----
Route::get('/about', function () {
    return view('about');
});