<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('index');
//});

//Route::get('/', ['MainController@index')->name('index');
//Route::get('/categories', 'MainController@categories')->name('categories');
//Route::get('/{category}', 'MainController@category')->name('category');
//Route::get('/{category}/{product?}', 'MainController@product')->name('product');
Route::get('/', [MainController::class, 'index'])->name("index");

Route::get('/categories', [MainController::class, 'categories'])->name("categories");
Route::get('/basket', [MainController::class, 'basket'])->name("basket");

Route::get('/{category}', [MainController::class, 'category'])->name("category");

Route::get('/{category}/{product?}', [MainController::class, 'product'])->name('product');



Route::get('/basket/place', [MainController::class, 'basketPlace']);









require __DIR__.'/auth.php';
