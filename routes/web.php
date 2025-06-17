<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Product Routes
Route::resource('products', ProductController::class);

// Category Routes
Route::resource('categories', CategoryController::class);