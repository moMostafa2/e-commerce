<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\UserController;

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


Route::name('user.')->prefix('user/')->group(function() {
    Route::get('login', [UserController::class , 'login'])->name('login');
    Route::get('register', [UserController::class , 'register'])->name('register');

});
