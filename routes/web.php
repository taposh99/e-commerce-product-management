<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
// Resource Routes
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);