<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;




Route::get('/', [MainController::class, 'index'])->name("index");

Route::get('/categories', [MainController::class, 'categories'])->name("categories");

Route::get('/basket', [MainController::class, 'basket'])->name("basket");

Route::get('/{category}', [MainController::class, 'category'])->name("category");

Route::get('/{category}/{product?}', [MainController::class, 'product'])->name('product');

Route::get('/basket', [BasketController::class, 'basket'])->name('basket');

Route::get('/basket/place', [BasketController::class, 'basketPlace'])->name('basket-place');

Route::get('/basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basket-add');









require __DIR__.'/auth.php';
