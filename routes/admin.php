<?php

use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can control all aspectes as an admin
|
|
|
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('dashboard', AdminController::class)->only('index');
});
