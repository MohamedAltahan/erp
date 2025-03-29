<?php

use App\Support\ModuleRegistry;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


foreach (ModuleRegistry::admin() as $module) {

    $path = base_path("Modules/Admin/{$module}/routes/api.php");
    if (file_exists($path)) {
        Route::group([
            'prefix' => 'admin',
            'middleware' => ['auth:sanctum'],
            'as' => 'admin.' . Str::of($module)->snake('-')->lower()->append('.')->toString(),
        ], $path);
    }
}
