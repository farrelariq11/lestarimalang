<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/submitregister', [AuthController::class, 'submitRegister'])->name('register');
Route::post('/submitlogin', [AuthController::class, 'submitLogin'])->name('submitlogin');
Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
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
Route::get('/admin/adminuser', [AdminUserController::class, 'index'])->name('admin.adminuser');
Route::delete('/admin/adminuser/{id}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
Route::get('/report', function () {return view('report');});
Route::get('/dashboard', function () {return view('dashboard');});
Route::get('/artikel', function () {return view('artikel');});
Route::get('/admin', [AdminUserController::class, 'admin'])->name('admin');
Route::get('/register', function () {return view('auth.register');});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


