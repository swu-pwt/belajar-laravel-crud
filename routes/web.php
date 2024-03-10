<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('create');
// });

Route::get('/', [App\Http\Controllers\BookController::class, 'index'])->name('getListBooks');
Route::get('/create', [App\Http\Controllers\BookController::class, 'create'])->name('createBook');
Route::post('/store', [App\Http\Controllers\BookController::class, 'store'])->name('storeBook');
Route::get('/edit/{id}', [App\Http\Controllers\BookController::class, 'edit'])->name('editBook');
Route::put('/update/{id}', [App\Http\Controllers\BookController::class, 'update'])->name('updateBook');
Route::get('/delete/{id}', [App\Http\Controllers\BookController::class, 'destroy'])->name('destroyBook');


