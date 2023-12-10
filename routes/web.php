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
    return view("homepage");
})->name('home');

//Product system
Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'show'])->name('product');
Route::get('/basket', [\App\Http\Controllers\ProductController::class, 'basket'])->name('basket');
Route::post('/basket/add', [\App\Http\Controllers\ProductController::class, 'basketAdd'])->name('basket.add');
Route::get('/products/{category}/{page?}', [\App\Http\Controllers\ProductController::class, 'getCategory'])->name('products');

// Admin Management
Route::get('/admin/product/creator', [\App\Http\Controllers\ProductController::class, 'editor'])->name("product-creator");
Route::post('/admin/product/create', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.create');

//Customer Dashboard
Route::get('/customer/past-orders', [\App\Http\Controllers\OrderController::class, 'getPastOrders'])->middleware('auth')->name("customer.past-orders");

//Order Management
Route::get('/order/checkout', [\App\Http\Controllers\OrderController::class, 'checkout'])->name("order.checkout");
Route::get('/order/confirm', [\App\Http\Controllers\OrderController::class, 'confirm'])->name("order.confirm");
Route::post('/order/process', [\App\Http\Controllers\OrderController::class, 'process'])->name("order.process");

Auth::routes();

//Stripe
Route::stripeWebhooks('stripe');

//Dashboard
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/dashboard/settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('dashboard.settings');
Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'adminDashboard'])->name('admin.dashboard');

//Setting API
Route::post('user/name/update', [\App\Http\Controllers\Auth\UserController::class,'nameUpdate'])->name("user.name.update");
Route::post('user/email/update', [\App\Http\Controllers\Auth\UserController::class,'emailUpdate'])->name("user.email.update");
Route::post('user/password/update', [\App\Http\Controllers\Auth\UserController::class,'passwordUpdate'])->name("user.password.update");
