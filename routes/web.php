<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'showAll'])->name('home');
Route::get('/showproducts', [ProductController::class, 'showAll']) -> name('product.index');
Route::get('/product/create', [ProductController::class, 'create']) -> name('product.create');
Route::post('/product', [ProductController::class, 'storeData']) -> name('product.store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit']) -> name('product.edit');
Route::put('/product/{product}/update', [ProductController::class, 'update']) -> name('product.update');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy']) -> name('product.destroy');