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

Route::get('/home', function () {
    return view('admin.app');
});

Route::get('vehicles-list',function(){
    return view('admin.vehicles.index');
});

Route::get('new-vehicle',function(){
    return view('admin.vehicles.create');
});

Route::get('orders-list',function(){
    return view('admin.orders.index');
});

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
