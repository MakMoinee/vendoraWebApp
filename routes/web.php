<?php

use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\UserMachineController;
use App\Http\Controllers\UserReportsController;
use App\Http\Controllers\UserSavingsController;
use App\Http\Controllers\UserWithdrawals;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/', WelcomeController::class);
Route::resource('/user_home', UserHomeController::class);
Route::resource('/user_machine', UserMachineController::class);
Route::resource('/reports', UserReportsController::class);
Route::resource('/savings', UserSavingsController::class);
Route::resource('/withdraw', UserWithdrawals::class);
Route::get('/logout', [WelcomeController::class, 'logout']);
