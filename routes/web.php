<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage');


