<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardCarController;
use App\Http\Controllers\DashboardMakeController;
use App\Http\Controllers\ReservationController;
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
// Home
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

// Login Group
Route::middleware(['guest'])->group(function(){
    // Login
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate']);
    // Register
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);
});

// Logout
Route::post('/logout', [LoginController::class, 'logout']);

//Auth Google
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/call-back', [GoogleController::class, 'handleGoogleCallback']);
// Register Login 
Route::get('/register/google', [GoogleController::class, 'index']);
Route::post('/register/google', [GoogleController::class, 'store']);

// Dashboard
Route::get('/dashboard', function() {
    return view('dashboard.index');
    })->middleware('auth');

Route::middleware(['auth'])->group(function() {
    Route::resource('/dashboard/make', DashboardMakeController::class);
    Route::resource('/dashboard/car', DashboardCarController::class);
    Route::resource('/reservation', ReservationController::class);
    Route::resource('/dashboard/reservation', ReservationController::class);
    Route::resource('/dashboard/news', DashboardNewsController::class);
});

Route::get('/dashboard/car/{id}/pdf', [DashboardCarController::class, 'generatePDF']);
Route::get('/dashboard/car', [DashboardCarController::class, 'index'])->name('cars.index');
