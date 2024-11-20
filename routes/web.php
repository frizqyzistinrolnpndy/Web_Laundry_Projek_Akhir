<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

// Rute default Laravel
Route::get('/', function () {
    return view('welcome');
});

// Rute halaman Home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rute untuk halaman Sign In
Route::get('/sign-in', [AuthController::class, 'showSignIn'])->name('sign-in');

// Rute untuk halaman Sign Up
Route::get('/sign-up', [AuthController::class, 'showSignUp'])->name('sign-up');

// Rute untuk proses pendaftaran pengguna (POST)
Route::post('/sign-up', [AuthController::class, 'register'])->name('sign-up.process');

// Rute untuk proses login
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Rute untuk proses register
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Rute untuk halaman Dashboard (akses setelah login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');


// Rute untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
