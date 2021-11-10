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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/wallet', [App\Http\Controllers\WalletController::class, 'index'])->name('wallet');
Route::get('/transaction', [App\Http\Controllers\TransactionController::class, 'index'])->name('transaction');

Route::group(['middleware' => ['auth']], function() {
	Route::resource('roles', App\Http\Controllers\RoleController::class);
	Route::resource('users', App\Http\Controllers\UserController::class);
	Route::resource('products', App\Http\Controllers\ProductController::class);
});