<?php

use App\Http\Controllers\GroceryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/welcome', function () {
    return view('welcome');
});

// Route indexpagina van items
Route::get('/items', [ItemController::class, 'index'])->name('items.index');

// Route creatiepagina van items
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');

// Route aanmaken item
Route::post('/items', [ItemController::class, 'store'])->name('items.store');

Route::get('/items/{id}', function () {

})->name('items.show');

// Route wijzigen item
Route::get('/items/{id}/edit', [ItemController::class, 'edit'])->name('items.edit');

// Route updaten wijzigen item
Route::put('/items/{id}', [ItemController::class, 'update'])->name('items.update');

//Route voor verwijderen item
Route::delete('/items/{item}', [ItemController::class, 'destroy'])->name('items.destroy');

// Dit roept de index methode aan op grocerycontroller wanneer /groceries bezocht word
Route::get('/groceries', [GroceryController::class, 'index']);

// We voegen ook een redirect toe aan de routes die de hoofdpagina doorverwijst naar de '/items' route
Route::redirect('/', '/items');