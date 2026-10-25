<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/genres', function () {
    return view('genres');
});
// ---- ABOUT PAGE ----
// (about route dito)