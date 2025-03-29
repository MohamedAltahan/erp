<?php

use Illuminate\Support\Facades\Route;
use Modules\Erp\Employee\Http\Controllers\EmployeeController;

Route::prefix('v1')->group(function () {
    Route::apiResource('employee', EmployeeController::class)->names('employee');
});
