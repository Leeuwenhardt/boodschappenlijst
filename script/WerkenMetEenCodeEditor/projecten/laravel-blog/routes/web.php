<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;


// index page
Route::get('/', function() {
    return view('home');
});

// overview page
Route::get('/overview', function(){
    return view('overview', [
        'articles' => Article::all()
    ]);
});

// Enter made articles
Route::get('/overview/{id}', function($id) {
    $article = Article::find($id);
    return view('article', ['article' => $article]);
});


// create article page
Route::get('/create', function() {
    return view('create');
});

