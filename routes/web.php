<?php

use App\Http\Controllers\DashboardMobilController;
use App\Http\Controllers\DashboardSewaController;
use App\Http\Controllers\DashboardCustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LiveSearchController;

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
//Home
Route::get('/', function () {
    return view('index');
});


// Type Car
Route::get('/type_car', function () {
    return view('type_car');
}); 

// About us
Route::get('/about_us', function () {
    return view('about_us');
}); 

// reservation
Route::get('/reservation', function () {
    return view('reservation');

});

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

// Logout
  Route::post('/logout', [LoginController::class, 'logout']);

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::resource('/dashboard/posts', DashboardMobilController::class);
Route::resource('/dashboard/sewa', DashboardSewaController::class);
Route::resource('/dashboard/customer', DashboardCustomerController::class);


//Auth Google
Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('google.login');

Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

// Live search
// Route::get('/', [LiveSearchController::class, 'index']);