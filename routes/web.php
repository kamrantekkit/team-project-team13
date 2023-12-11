<?php

use Illuminate\Support\Facades\Route;
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

if (env('APP_ENV') === 'production') {
    URL::forceScheme('https');
}

Auth::routes();

Route::get('/', function () {
    return view("homepage");
})->name('home');

Route::get('/about-us', function () {
    return view("AboutUs");
})->name('about-us');

Route::get('/login', function () {
    return view("Login");
})->name('login');

Route::get('/register', function () {
    return view("signup");
})->name('register');

//Product system
Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'show'])->name('product');
Route::get('/products/{category}/{page?}', [\App\Http\Controllers\ProductController::class, 'getCategory'])->name('products');

//Basket System
Route::get('/basket', [\App\Http\Controllers\BasketController::class, 'basket'])->name('basket');
Route::post('/basket/add', [\App\Http\Controllers\BasketController::class, 'add'])->name('basket.add');
Route::post('/basket/update', [\App\Http\Controllers\BasketController::class, 'update'])->name('basket.update');
Route::post('/basket/remove', [\App\Http\Controllers\BasketController::class, 'remove'])->name('basket.remove');

// Admin Management
Route::get('/admin/product/creator', [\App\Http\Controllers\ProductController::class, 'editor'])->middleware(['auth','admin'])->name("product-creator");
Route::post('/admin/product/create', [\App\Http\Controllers\ProductController::class, 'store'])->middleware(['auth','admin'])->name('product.create');

//Customer Dashboard
Route::get('/customer/past-orders', [\App\Http\Controllers\OrderController::class, 'getPastOrders'])->middleware('auth')->name("customer.past-orders");

//Order Management
Route::get('/order/checkout', [\App\Http\Controllers\OrderController::class, 'checkout'])->name("order.checkout");
Route::get('/order/confirm', [\App\Http\Controllers\OrderController::class, 'confirm'])->name("order.confirm");
Route::post('/order/process', [\App\Http\Controllers\OrderController::class, 'process'])->name("order.process");

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


//Stock Page
Route::post('/stock', [StockController::class, 'update'])->middleware(['auth','admin'])->name('stock.update');
Route::get('/stock', [StockController::class, 'index'])->middleware(['auth','admin'])->name('stock.index');
Route::get('/stock/test/email', [StockController::class, 'testEmail'])->middleware(['auth','admin'])->name('stock.test.email');
Route::patch('/stock/update', [StockController::class, 'update'])->middleware(['auth','admin'])->name('stock.update');
