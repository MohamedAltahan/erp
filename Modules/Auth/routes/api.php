<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\AuthController;

Route::controller(AuthController::class)->prefix('v1')->group(function () {
    Route::post('login', 'login')->name('login')->middleware('guest');
    Route::post('logout', 'logout')->name('logout')->middleware('auth:sanctum');
});
