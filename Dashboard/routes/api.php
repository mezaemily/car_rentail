<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\CarController;
use App\Http\Controllers\Api\DriverController;
use App\Http\Controllers\Api\RentalController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\LoyaltyLevelController;

Route::apiResource('users', UserController::class);
Route::apiResource('brands', BrandController::class);
Route::apiResource('cars', CarController::class);
Route::apiResource('drivers', DriverController::class);
Route::apiResource('rentals', RentalController::class);
Route::apiResource('payments', PaymentController::class);
Route::apiResource('loyalty-levels', LoyaltyLevelController::class);