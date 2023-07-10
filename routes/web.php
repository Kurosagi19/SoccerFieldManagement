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


Route::prefix('/customer')->group(function(){
    Route::get('/', [\App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');
});

Route::prefix('/admin')->group(function(){
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    Route::get('/field', [\App\Http\Controllers\FieldController::class, 'index'])->name('admin.field.index');
    Route::get('/customer', [\App\Http\Controllers\CustomerController::class, 'index'])->name('admin.customer.index');
});
