<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\productController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => '/products'], function () {
    Route::get('/', [productController::class, 'index']);
    Route::post('/', [productController::class, 'store']);
});

Route::group(['prefix' => '/images'], function () {
    Route::get('/', [ImageController::class, 'index']);
    Route::post('/', [ImageController::class, 'store']);
    Route::delete('/{id}', [ImageController::class, 'destroy']);
});
