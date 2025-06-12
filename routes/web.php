<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\Password;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\DacsboardController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UjianAkhirController;
use App\Http\Controllers\MateriController;
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

Route::get('/', [LandingController::class, 'index']);
Route::redirect('/welcome', '/home');
Route::get('/home', function () {
    return view('pages.welcome');
})->name('welcome');

// User
Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::put('/profile', [UserController::class, 'update'])->name('profile.update');

    Route::get('/kuis', [KuisController::class, 'index']);
});

// Materi
foreach (range(1, 6) as $level) {
    $max = match ($level) {
        1 => 4,
        2 => 5,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 4,
    };

    for ($i = 1; $i <= $max; $i++) {
        Route::get("/materi/{$level}.{$i}", function () use ($level, $i) {
            return app(MateriController::class)->show($level, $i);
        })->name("materi{$level}.{$i}");
    }
}

Route::get('/materi/1/1', function () {
    return view('materi.1.1');
})->name('materi.1.1');
Route::get('/materi/1/2', function () {
    return view('materi.1.2');
})->name('materi.1.2');
Route::get('/materi/1/3', function () {
    return view('materi.1.3');
})->name('materi.1.3');
Route::get('/materi/1/4', function () {
    return view('materi.1.4');
})->name('materi.1.4');
Route::get('/materi/1/latihan', function () {
    return view('materi.1.latihan');
})->name('materi.1.latihan');


// Admin

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [DacsboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('questions', QuestionController::class);
    Route::resource('ujian', UjianAkhirController::class);
    Route::resource('users', UserController::class);
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
});
Route::get('/admin/tentang', [AdminController::class, 'tentang'])->name('admin.tentang');
