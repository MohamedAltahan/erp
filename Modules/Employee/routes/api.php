<?php

use Illuminate\Support\Facades\Route;
use Modules\Employee\Http\Controllers\EmployeeController;
use Modules\Employee\Models\Employee;

Route::middleware('auth:sanctum')->prefix('v1')->group(function () {
    Route::apiResource('employee', EmployeeController::class);
});
