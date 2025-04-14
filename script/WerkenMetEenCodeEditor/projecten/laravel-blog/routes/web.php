<?php

use Illuminate\Support\Facades\Route;

// index page
Route::get('/', function() {
    return view('home');
});

// overview page
Route::get('/overview', function() {
    return view('overview');
});

// create article page
Route::get('/create', function() {
    return view('create');
});