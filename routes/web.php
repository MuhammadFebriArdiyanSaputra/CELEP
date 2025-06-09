<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\Password;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\DacsboardController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UjianAkhirController;
use App\Models\UjianAkhir;

// Auth
Route::post('/signup-submit', [AuthController::class, 'signupSubmit'])->name('signup.submit');
Route::post('/signin-submit', [AuthController::class, 'signinSubmit'])->name('signin.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Middleware
Route::middleware('guest')->group(function () {
    Route::get('/signin', [AuthController::class, 'showSignIn'])->name('signin');
    Route::get('/signup', [AuthController::class, 'showSignUp'])->name('signup');
    Route::get('/signup-success', [AuthController::class, 'signupSuccess'])->name('signup.success');
    Route::get('/forgot', [AuthController::class, 'showForgotForm'])->name('password.request');
});

// Forgor Password
Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');

Route::get('/signin', [AuthController::class, 'showSignIn'])->name('signin');
Route::get('/signup', [AuthController::class, 'showSignUp'])->name('signup');
Route::get('/forgot', [AuthController::class, 'showForgotForm'])->name('password.request');
Route::get('/signup-success', [AuthController::class, 'signupSuccess'])->name('signup.success');


Route::get('/', [LandingController::class, 'index']);
Route::redirect('/welcome', '/home');
Route::get('/home', function () {
    return view('pages.welcome');
})->name('welcome');

// User
Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/kuis', [KuisController::class, 'index']);
});

// Admin

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [DacsboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('questions', QuestionController::class);
    Route::resource('ujian', UjianAkhirController::class);
    Route::resource('users', UserController::class);
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
});
Route::get('/admin/tentang', [AdminController::class, 'tentang'])->name('admin.tentang');
