<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Models\Admin;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;



Route::get('/', function () {
    return view('auth/login');
});

// Route::get('/admin/login', function () {
//     return view('login');
// });

// User Routes 
Route::get('/index', function () {
    return view('index');
    
});
Route::get('/users/logout', [LoginController::class , 'logout'])->name('user.logout');

// Admin Routes 
Route::prefix('admin')->group(function() {
Route::get('/dashboard', [AdminController::class , 'index'])->name('admin.dashboard');
Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [AdminLoginController::class , 'login'])->name('admin.login.submit');
Route::resource('/customers', CustomerController::class);

Route::get('/logout', [AdminLoginController::class , 'logout'])->name('admin.logout');


});

