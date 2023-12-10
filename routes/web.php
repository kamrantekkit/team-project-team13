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
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Auth::routes();


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/dashboard/settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('dashboard.settings');
Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'adminDashboard'])->name('admin.dashboard');

Route::post('user/name/update', [\App\Http\Controllers\Auth\UserController::class,'nameUpdate'])->name("user.name.update");
Route::post('user/email/update', [\App\Http\Controllers\Auth\UserController::class,'emailUpdate'])->name("user.email.update");
Route::post('user/password/update', [\App\Http\Controllers\Auth\UserController::class,'passwordUpdate'])->name("user.password.update");
