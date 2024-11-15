<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/addcart', [\App\Http\Controllers\AddcartController::class, 'index'])->name('addcart');

Route::post('/cart/add', [\App\Http\Controllers\CartController::class, 'add'])->name('add');
Route::get('/cart/checkout', [\App\Http\Controllers\CartController::class, 'checkout'])->name('checkout');
Route::get('/cart/clear', [\App\Http\Controllers\CartController::class, 'clear'])->name('clear');
Route::post('/cart/remove', [\App\Http\Controllers\CartController::class, 'removeitem'])->name('removeitem');
Route::get('/cart/store', [\App\Http\Controllers\CartController::class, 'cartstore'])->name('cartstore');
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/products', App\Http\Controllers\ProductController::class);
Route::resource('/categoris', App\Http\Controllers\CategoriController::class);
Route::resource('/pedidos', App\Http\Controllers\PedidoController::class);
Route::resource('/pedidetalles', App\Http\Controllers\PedidetalleController::class);
Route::resource('/clients', App\Http\Controllers\ClientController::class);
