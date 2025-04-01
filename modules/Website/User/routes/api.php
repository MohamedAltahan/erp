<?php

use Illuminate\Support\Facades\Route;
use Modules\Website\User\Http\Controllers\UserController;

Route::prefix('v1')->middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('user', UserController::class)->names('user');
});
