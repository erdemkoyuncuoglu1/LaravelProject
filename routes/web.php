<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create']);

Route::post('/products', [ProductController::class, 'store']);
Route::delete('/products/{product}', [ProductController::class, 'destroy']);
Route::get('/products/{product}/edit', [ProductController::class, 'edit']);

Route::put('/products/{product}', [ProductController::class, 'update']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/admin', function () {
    $productCount = \App\Models\Product::count();
    $categoryCount = \App\Models\Category::count();

    return view('admin.dashboard', compact('productCount', 'categoryCount'));
});
Route::get('/cart', function () {
    return view('cart.index');
});