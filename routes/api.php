<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SupplierController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\CustomerController;

use App\Http\Controllers\OrderController;

use App\Http\Controllers\OrderItemController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::resource('supplier', SupplierController::class);

Route::resource('product', ProductController::class);

Route::resource('customer', CustomerController::class);

Route::resource('order', OrderController::class);

Route::resource('order_item', OrderItemController::class);


