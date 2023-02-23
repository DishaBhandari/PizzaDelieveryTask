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
    return view('welcome');
});

Auth::routes();

Route::post('/validation', [App\Http\Controllers\Auth\RegisterController::class, 'create']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard']);
    Route::get('/users', [App\Http\Controllers\AdminController::class, 'users']);
    Route::get('/items', [App\Http\Controllers\AdminController::class, 'items']);
    Route::get('/orders', [App\Http\Controllers\AdminController::class, 'orders']);
    Route::get('/orders/{id}/{status}/update-status', [App\Http\Controllers\AdminController::class, 'updateStatus']);


   

});
