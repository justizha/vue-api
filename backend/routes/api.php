<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'getData']);
    Route::get('/{id}', [UserController::class, 'showUser']);
    Route::post('/create', [UserController::class, 'createUser']);
    Route::delete('/delete/{id}', [UserController::class, 'deleteUser']);
    Route::put('/update/{id}', [UserController::class, 'updateUser']);
});

Route::group(['prefix' => 'product'], function() {
    Route::get('/', [ProductsController::class,'getProduct']);
    Route::post('/create', [ProductsController::class,'createProduct']);
    Route::delete('/delete/{id}', [ProductsController::class,'deleteProduct']);
});