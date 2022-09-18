<?php

use App\Http\Controllers\AddProductController;
use App\Http\Controllers\SingleImage;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WatchController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AddProductController::class, 'home']);

Route::get('/account', function () {
    return view('users.user');
});
Route::get('/login', function () {
    return view('users.login');
});

Route::get('/add_product', [AddProductController::class, 'addProduct']);
Route::post('add-to-cart', [AddProductController::class, 'addToCart']);
Route::get('cart', [AddProductController::class, 'viewCart']);
Route::get('/remove-item/{rowId}', [AddProductController::class, 'removeItem']);
Route::resource('/products', WatchController::class);
Route::resource('/users', UserController::class);