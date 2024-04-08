<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/showproducts', [ProductController::class, 'showAll']) -> name('product.index');
Route::get('/product/create', [ProductController::class, 'create']) -> name('product.create');
Route::post('/product', [ProductController::class, 'storeData']) -> name('product.store');