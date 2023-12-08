<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;
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

Route::get('/', function () {
    return view('example');
})->name('example');


Route::get('/products/{page?}', [ProductController::class, 'index'])->name('products');

Route::post('/stock', [StockController::class, 'update'])->name('stock.update');

Route::get('/stock', [StockController::class, 'index'])->name('stock.index');

Route::patch('/stock/update', [StockController::class, 'update'])->name('stock.update');
