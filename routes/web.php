<?php

use App\Http\Controllers\ShoppingCartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockUnitsController;

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

Route::get('/', [StockUnitsController::class, 'getUnits'])->name('shop.index');

Route::get('/add-to-cart/{id}', [StockUnitsController::class, 'addToCart'])->name('shop.addToCart');

Route::get('/cart', [ShoppingCartController::class, 'index'])->name('cart.index');


