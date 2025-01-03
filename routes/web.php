<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage');
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout.index');

Route::post('/checkout', [App\Http\Controllers\CheckoutController::class, 'store'])->name('checkout.store');

Route::get('/checkout/{order}', [App\Http\Controllers\CheckoutController::class, 'show'])->name('checkout.show');

Route::get('/order-complete/{order}', App\Http\Controllers\OrderCompleteController::class)->name('orders.complete');


