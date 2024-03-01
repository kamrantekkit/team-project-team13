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
Route::controller(\App\Http\Controllers\ProductController::class)->group(function () {
    Route::get('/product/{id}', 'show')->name('product');
    Route::get('/products/{category}/{page?}', 'getCategory')->name('products');
});

//Basket System
Route::controller(\App\Http\Controllers\BasketController::class)->group(function () {
    Route::get('/basket', 'basket')->name('basket');
    Route::post('/basket/add', 'add')->name('basket.add');
    Route::post('/basket/update', 'update')->name('basket.update');
    Route::post('/basket/remove', 'remove')->name('basket.remove');
});

//Order Management
Route::controller(\App\Http\Controllers\OrderController::class)->group(function () {
    Route::get('/order/checkout', 'checkout')->name("order.checkout");
    Route::get('/order/confirm', 'confirm')->name("order.confirm");
    Route::post('/order/process', 'process')->name("order.process");
});

//Stripe
Route::stripeWebhooks('stripe');

// Customer Management
Route::controller(\App\Http\Controllers\CustomerManagementController::class)->group(function () {
    Route::get('/admin/customers-management', 'index')->name('admin.customers-management');
    Route::get('/admin/customers-management/{customerId}/orders', 'getCustomerOrders')->name('admin.customers-management.orders');

    // Search for customers
    Route::get('/admin/customers-management/search', 'search')->name('admin.customers-management.search');
    // Update customer details
    Route::post('/admin/customers-management/update', 'update')->name('admin.customers-management.update');
});


// Authed Routes
Route::middleware(['auth'])->group(function () {


    Route::controller(\App\Http\Controllers\HomeController::class)->group(function () {
        //Dashboard
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/dashboard/settings', 'settings')->name('dashboard.settings');
    });

    //Past orders
    Route::get('/customer/past-orders', [\App\Http\Controllers\OrderController::class, 'getPastOrders'])->name("customer.past-orders");


    Route::controller(\App\Http\Controllers\Auth\UserController::class)->group(function () {
        //Setting API
        Route::post('user/name/update', 'nameUpdate')->name("user.name.update");
        Route::post('user/email/update', 'emailUpdate')->name("user.email.update");
        Route::post('user/password/update', 'passwordUpdate')->name("user.password.update");
    });

    // Admin Routes
    Route::middleware(['admin'])->group(function () {

        Route::get('/admin/dashboard', [\App\Http\Controllers\HomeController::class, 'adminDashboard'])->name('admin.dashboard');


        // Admin Product Management
        Route::controller(\App\Http\Controllers\ProductController::class)->group(function () {
            Route::get('/admin/product/creator', 'editor')->name("product-creator");
            Route::post('/admin/product/create', 'store')->name('product.create');
        });

        //Stock Page
        Route::post('/stock', [StockController::class, 'update'])->name('stock.update');
        Route::get('/stock', [StockController::class, 'index'])->name('stock.index');
        Route::patch('/stock/update', [StockController::class, 'update'])->name('stock.update');
    });
});



