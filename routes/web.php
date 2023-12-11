<?php

use App\Http\Controllers\DashboardMobilController;
use App\Http\Controllers\DashboardSewaController;
use App\Http\Controllers\LoginController;

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



Route::get('/', function () {
    return view('index');
});

// Login
Route::get('/login', [LoginController::class, 'index']);

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::resource('/dashboard/posts', DashboardMobilController::class);
Route::resource('/dashboard/sewa', DashboardSewaController::class);
