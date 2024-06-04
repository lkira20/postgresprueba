<?php

use App\Http\Controllers\ProductoController;
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


//Route::resource('/', ProductoController::class);
Route::get('/', [ProductoController::class, 'index'])->name('index');
Route::get('/create', [ProductoController::class, 'create'])->name('create');
Route::post('/store', [ProductoController::class, 'store'])->name('store');
Route::get('/{id}', [ProductoController::class, 'show'])->name('show');
Route::get('/edit/{id}', [ProductoController::class, 'edit'])->name('edit');
Route::put('/{id}', [ProductoController::class, 'update'])->name('update');
Route::delete('/{id}', [ProductoController::class, 'destroy'])->name('destroy');

