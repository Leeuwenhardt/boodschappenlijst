<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SessionController;


// index page
Route::get('/', function() {
    return view('home');
});

// Overview articles
Route::get('/overview', [ArticleController::class, 'index'])->name('articles.index');

// create article page
Route::get('/create', [ArticleController::class, 'create'])->name('articles.create');

// Create article
Route::post('/create', [ArticleController::class, 'store'])->name('articles.store');

// show article
Route::get('/overview/{article}', [ArticleController::class, 'show'])->name('articles.article');

// edit article
Route::get('/overview/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');

// put update article
Route::put('/overview/{article}', [ArticleController::class, 'update'])->name('articles.update');

// delete article
Route::delete('/overview/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');

// auth login and login functionality
Route::get('/login', [SessionController::class, 'login']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

