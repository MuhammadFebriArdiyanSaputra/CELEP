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
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SertifikatController;
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
Route::get('/home', [MateriController::class, 'index'])->name('welcome');
// User
Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::put('/profile', [UserController::class, 'update'])->name('profile.update');
    Route::get('/profile/edit', [UserController::class, 'edit'])->name('profile.edit');
    Route::get('/premium', [PaymentController::class, 'pay'])->name('premium');
    Route::post('/payment/verify', [PaymentController::class, 'verifyPayment']);
    Route::get('/payment/success', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
    Route::get('/kuis', [KuisController::class, 'index']);
    Route::get('/ujian-akhir', [MateriController::class, 'showUjianAkhir'])->name('materi.ujianAkhir');
    Route::post('/ujian-akhir/store', [MateriController::class, 'storeUjianAkhir'])->name('materi.storeUjianAkhir');
    Route::get('/sertifikat/download', [SertifikatController::class, 'download'])->name('sertifikat.download');
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

    // Tentukan middleware berdasarkan level
    $middleware = $level <= 3 ? ['auth'] : ['auth', 'isPremium'];

    // Route materi per sub-bab
    for ($i = 1; $i <= $max; $i++) {
        Route::get("/materi/{$level}.{$i}", function () use ($level, $i) {
            return app(MateriController::class)->show($level, $i);
        })->middleware($middleware)
          ->name("materi.{$level}.{$i}");
    }

    // Route latihan setelah semua sub-bab di level itu
    Route::get("/materi/{$level}.latihan", function () use ($level) {
        return app(MateriController::class)->latihan($level);
    })->middleware($middleware)
      ->name("materi.{$level}.latihan");
}

Route::post('/materi/{level}/latihan', [MateriController::class, 'storeQuizResult'])
    ->middleware($middleware)
    ->name('materi.storeQuizResult');

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