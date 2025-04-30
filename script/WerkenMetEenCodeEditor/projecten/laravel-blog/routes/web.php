<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;

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

// logout
Route::post('/logout', [SessionController::class, 'destroy']);

// personally made articles page
Route::get('/myArticles', [ArticleController::class, 'myArticles'])->middleware('auth');

// create category page
Route::get('/category', [CategoryController::class, 'create'])->name('categories.create');

// create category
Route::post('/category', [CategoryController::class, 'store'])->name('categories.store');

// post a comment
// Route::get('/overview/{}', [CommentController::class, 'store'])->name('articles.article');

// put comment
// Route::put('/overview/{}', [CommentController::class, 'update'])->name('articles.article');

