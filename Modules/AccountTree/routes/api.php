<?php

use Illuminate\Support\Facades\Route;
use Modules\AccountTree\Http\Controllers\AccountTreeController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('account-tree', AccountTreeController::class)->names('account-tree');
});
