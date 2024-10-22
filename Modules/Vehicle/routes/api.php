<?php

use Illuminate\Support\Facades\Route;
use Modules\Vehicle\Http\Controllers\Admin\VehicleTypeController;
use Modules\Vehicle\Http\Controllers\Admin\VehicleBrandController;
use Modules\Vehicle\Http\Controllers\Admin\VehicleModelController;
use Modules\Vehicle\Http\Controllers\Admin\VehicleSeriesController;

/*
 *--------------------------------------------------------------------------
 * API Routes
 *--------------------------------------------------------------------------
 *
 * Here is where you can register API routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * is assigned the "api" middleware group. Enjoy building your API!
 *
*/

Route::middleware(['auth:api'])->group(function () {
    Route::apiResource('vehicle_type', VehicleTypeController::class)->names('vehicle.type');
    Route::apiResource('Vehicle_brand', VehicleBrandController::class)->names('Vehicle.brand');
    Route::apiResource('vehicle_model', VehicleModelController::class)->names('Vehicle.model');
    Route::apiResource('vehicle_series', VehicleSeriesController::class)->names('vehicle.series');
});
