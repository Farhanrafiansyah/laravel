<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

Route::get('/', [ProductController::class, 'index'])->name('products.index');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout');

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/products', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{id}/edit', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])->name('products.update');
});


require __DIR__.'/auth.php'; // ini dari Breeze
