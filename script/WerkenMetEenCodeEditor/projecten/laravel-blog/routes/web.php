<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;

Route::get('/', function() {
    return view('home');
});

Route::get('/overview', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/create', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/overview/{article}', [ArticleController::class, 'show'])->name('articles.article');
Route::get('/overview/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/overview/{article}', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('/overview/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
Route::get('/myArticles', [ArticleController::class, 'myArticles'])->middleware('auth');
Route::get('/login', [SessionController::class, 'login']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
Route::get('/category', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/category', [CategoryController::class, 'store'])->name('categories.store');

// post a comment
Route::post('/overview/{article}', [CommentController::class, 'store'])->name('comments.store');

