<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardMakeController;
use App\Http\Controllers\DashboardSewaController;
use App\Http\Controllers\DashboardMobilController;
use App\Http\Controllers\DashboardCustomerController;
// use App\Http\Controllers\LiveSearchController;
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
    Route::resource('/dashboard/make', DashboardMakeController::class)->middleware('auth');
    Route::resource('/dashboard/posts', DashboardMobilController::class)->middleware('auth');
    Route::resource('/dashboard/sewa', DashboardSewaController::class)->middleware('auth');
    Route::resource('/dashboard/customer', DashboardCustomerController::class)->middleware('auth');
});

// Dashboard Post
Route::get('/dashboard/posts', [DashboardMobilController::class, 'index'])->name('posts.index');
Route::get('/dashboard/posts/create', [DashboardMobilController::class, 'create'])->name('posts.create');
Route::post('/dashboard/posts', [DashboardMobilController::class, 'store'])->name('posts.store');
Route::get('/dashboard/posts/{id}', [DashboardMobilController::class, 'show'])->name('posts.show');
Route::get('/dashboard/posts/{id}/edit', [DashboardMobilController::class, 'edit'])->name('posts.edit');
Route::put('/dashboard/posts/{id}', [DashboardMobilController::class, 'update'])->name('posts.update');
Route::delete('/dashboard/posts/{id}', [DashboardMobilController::class, 'destroy'])->name('posts.destroy');

// Live search
// Route::get('/', [LiveSearchController::class, 'index']);