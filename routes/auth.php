<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
 
   
 

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'Login'])->name('login.action');
// Route::get('/resetPassword', [App\Http\Controllers\Auth\ResetPasswordController::class, 'show'])->name('resetPassword');
// Route::post('/resetPassword', [App\Http\Controllers\Auth\ResetPasswordController::class ,  'resetPassowrdAction'])->name('resetPassword.action');

// Route::get('/newPassword/{token}', [App\Http\Controllers\Auth\NewPasswordController::class, 'show'])->name('newPassword');
// Route::post('/newPassword', [App\Http\Controllers\Auth\NewPasswordController::class, 'newPassowrdAction'])->name('newPassword.action');

// Route::get('/send', [App\Http\Controllers\Auth\MailController::class, 'index']);
   
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'show'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register.add');
    
});
Route::middleware('auth:admin')->group(function () {
Route::get('/logout' , [App\Http\Controllers\Auth\LoginController::class , 'logout'])->name('logout');
});
 