<?php

use Illuminate\Support\Facades\Route;
use Modules\Xkk\Http\Controllers\XkkController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([], function () {
    Route::resource('xkk', XkkController::class)->names('xkk');
});
