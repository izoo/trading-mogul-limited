<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\OrdersController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Vehicle Routes
Route::post('vehicles',[VehicleController::class,'create']);
Route::get('vehicles',[VehicleController::class,'index']);
Route::put('vehicles/{id}',[VehicleController::class,'update']);
Route::delete('vehicles/{id}',[VehicleController::class,'delete']);

// Order Routes
Route::get('orders',[OrdersController::class,'index']);
Route::put('orders/{id}',[OrdersController::class,'update']);
