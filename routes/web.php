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
use App\Http\Controllers\SocialLoginController;

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

Route::get('/materi/2/1', function () {
    return view('materi.2.1');
})->name('materi.2.1');
Route::get('/materi/2/2', function () {
    return view('materi.2.2');
})->name('materi.2.2');
Route::get('/materi/2/3', function () {
    return view('materi.2.3');
})->name('materi.2.3');
Route::get('/materi/2/4', function () {
    return view('materi.2.4');
})->name('materi.2.4');
Route::get('/materi/2/5', function () {
    return view('materi.2.5');
})->name('materi.2.5');
Route::get('/materi/2/latihan', function () {
    return view('materi.2.latihan');
})->name('materi.2.latihan');

Route::get('/materi/3/1', function () {
    return view('materi.3.1');
})->name('materi.3.1');
Route::get('/materi/3/2', function () {
    return view('materi.3.2');
})->name('materi.3.2');
Route::get('/materi/3/3', function () {
    return view('materi.3.3');
})->name('materi.3.3');
Route::get('/materi/3/latihan', function () {
    return view('materi.3.latihan');
})->name('materi.3.latihan');

Route::get('/materi/4/1', function () {
    return view('materi.4.1');
})->name('materi.4.1');
Route::get('/materi/4/2', function () {
    return view('materi.4.2');
})->name('materi.4.2');
Route::get('/materi/4/3', function () {
    return view('materi.4.3');
})->name('materi.4.3');
Route::get('/materi/4/4', function () {
    return view('materi.4.4');
})->name('materi.4.4');
Route::get('/materi/4/latihan', function () {
    return view('materi.4.latihan');
})->name('materi.4.latihan');

Route::get('/materi/5/1', function () {
    return view('materi.5.1');
})->name('materi.5.1');
Route::get('/materi/5/2', function () {
    return view('materi.5.2');
})->name('materi.5.2');
Route::get('/materi/5/3', function () {
    return view('materi.5.3');
})->name('materi.5.3');
Route::get('/materi/5/4', function () {
    return view('materi.5.4');
})->name('materi.5.4');
Route::get('/materi/5/5', function () {
    return view('materi.5.5');
})->name('materi.5.5');
Route::get('/materi/5/latihan', function () {
    return view('materi.5.latihan');
})->name('materi.5.latihan');

Route::get('/materi/6/1', function () {
    return view('materi.6.1');
})->name('materi.6.1');
Route::get('/materi/6/2', function () {
    return view('materi.6.2');
})->name('materi.6.2');
Route::get('/materi/6/3', function () {
    return view('materi.6.3');
})->name('materi.6.3');
Route::get('/materi/6/4', function () {
    return view('materi.6.4');
})->name('materi.6.4');
Route::get('/materi/6/latihan', function () {
    return view('materi.6.latihan');
})->name('materi.6.latihan');

// Admin

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [DacsboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('questions', QuestionController::class);
    Route::resource('ujian', UjianAkhirController::class);
    Route::resource('users', UserController::class);
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
});
Route::get('/admin/tentang', [AdminController::class, 'tentang'])->name('admin.tentang');

// Google Routes
Route::get('/auth/google', [SocialLoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/auth/google/callback', [SocialLoginController::class, 'handleGoogleCallback']);

// Facebook Routes
Route::get('/auth/facebook', [SocialLoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/auth/facebook/callback', [SocialLoginController::class, 'handleFacebookCallback']);