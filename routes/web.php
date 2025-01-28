<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/submitregister', [AuthController::class, 'submitRegister'])->name('register');
Route::post('/submitlogin', [AuthController::class, 'submitLogin'])->name('submitlogin');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
