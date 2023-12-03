<?php

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

Route::get('/', function () {
    return view('example');
})->name('example');


Route::get('/products/{category?}/{page?}', [\App\Http\Controllers\ProductController::class, 'getCategory'])->name('products');



Route::get('/admin/product/creator', function () {
    return view("products-editor-test");
})->name("product-creator");

Route::post('/admin/product/create', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.create');
