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

Route::get('/', [MainController::class, 'index']);

Route::get('/{category}', [MainController::class, 'category']);

Route::get('/mobiles/{product?}', [MainController::class, 'product']);





require __DIR__.'/auth.php';