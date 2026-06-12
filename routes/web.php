<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
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
Route::post('/cart/add/{product}', function (\App\Models\Product $product) {

    $cart = session()->get('cart', []);

    $cart[$product->id] = [
        'name' => $product->name,
        'price' => $product->price,
    ];

    session()->put('cart', $cart);

    return redirect('/products');
});
Route::post('/cart/remove/{id}', function ($id) {

    $cart = session()->get('cart', []);

    unset($cart[$id]);

    session()->put('cart', $cart);

    return redirect('/cart');
});