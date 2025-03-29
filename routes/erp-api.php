<?php

use App\Support\ModuleRegistry;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

foreach (ModuleRegistry::erp() as $module) {
    $path = base_path("Modules/Erp/{$module}/routes/api.php");

    if (file_exists($path)) {
        Route::group([
            'middleware' => ['auth:sanctum'],
            'as' => Str::of($module)->snake('-')->lower()->append('.')->toString(),
        ], function () use ($path) {
            require $path;
        });
    }
}
