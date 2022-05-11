<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class,"index"])->name('product');
Route::get('/create', [ProductController::class,"create"])->name('product.create');
Route::post('/store', [ProductController::class,"store"])->name('product.store');
Route::delete('/delete/{product}', [ProductController::class,"destroy"])->name('product.delete');