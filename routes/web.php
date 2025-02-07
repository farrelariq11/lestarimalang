<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/', [AuthController::class, 'register'])->name('register');
Route::post('/submitregister', [AuthController::class, 'submitRegister'])->name('register');
Route::post('/submitlogin', [AuthController::class, 'submitLogin'])->name('submitlogin');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
Route::get('/adminuser', [AdminController::class, 'adminuser'])->name('adminuser');
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/adminartikel', [AdminController::class, 'adminartikel'])->name('adminartikel');
Route::get('/laporan', [AdminController::class, 'laporan'])->name('laporan');
Route::get('/history', [AdminController::class, 'history'])->name('history');
Route::get('/admin/adminuser', function () {return view('admin.adminuser');});
Route::get('/admin/laporan', function () {return view('admin.laporan');});
Route::get('/admin/history', function () {return view('admin.history');});
Route::get('/admin/adminartikel', function () {return view('admin.adminartikel');});
Route::get('/report', function () {return view('auth.report');});
Route::get('/artikel', function () {return view('auth.artikel');});

