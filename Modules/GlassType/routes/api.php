<?php

use Illuminate\Support\Facades\Route;
use Modules\GlassType\Http\Controllers\Admin\GlassTypeController;

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
    Route::apiResource('glasstype', GlassTypeController::class)->names('glasstype');
});
