<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AdminController;
use App\Http\Middleware\VerifyUser;
use Illuminate\Routing\Router;
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


Route::group([
    'middleware' => 'api',
], function ($router) {
    Route::post('/register', [AdminController::class, 'register'])->name('register');
    Route::post('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/logout', [AdminController::class, 'logout'])->middleware('auth:api')->name('logout');
    Route::post('/refresh', [AdminController::class, 'refresh'])->middleware('auth:api')->name('refresh');
    Route::post('/me', [AdminController::class, 'me'])->middleware('auth:api')->name('me');
});