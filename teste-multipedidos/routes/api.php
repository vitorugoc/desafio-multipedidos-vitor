<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'users'], function () {
    Route::post('/', [UserController::class, 'createUser']);
    Route::put('/{id}', [UserController::class, 'updateUser']);
    Route::delete('/{id}', [UserController::class,'deleteUser']);
});

Route::group(['prefix' => 'cars'], function () {
    Route::post('/', [CarController::class,'createCar']);
});
