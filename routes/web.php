<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Api\BookApiController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/create', function () {
    return view('books.create');
})->name('books.create');

Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');


Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');


Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');


Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');


