<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticationController::class, 'index'])->name('login');
    Route::post('login_user', [AuthenticationController::class, 'login'])->name('login.user');    
    Route::get('register', [RegistrationController::class, 'index'])->name('register');
    Route::post('register_user', [RegistrationController::class, 'store'])->name('register.user');

    Route::get('forget-password', [PasswordResetController::class, 'index'])->name('forget.password');
    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.update');
});

Route::post('logout', [AuthenticationController::class, 'destroy'])->name('logout');
