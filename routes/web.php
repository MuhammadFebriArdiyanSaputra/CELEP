<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\Password;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TentangController;


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
Route::post('/forgot-password', function (\Illuminate\Http\Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => bcrypt($password)
            ])->save();
        }
    );

    return $status == Password::PASSWORD_RESET
                ? redirect()->route('signin')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
});


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
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
});
Route::get('/admin/tentang', [AdminController::class, 'tentang'])->name('admin.tentang');