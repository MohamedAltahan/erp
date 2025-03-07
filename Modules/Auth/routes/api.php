<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\AuthController;

Route::controller(AuthController::class)->prefix('v1')->group(function () {
    Route::post('register', 'register')->name('register');
});
