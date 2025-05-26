<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showSignIn()
    {
        return view('signin');
    }

    public function showSignUp()
    {
        return view('signup');
    }

    public function signupSuccess()
    {
        return view('success_create_akun');
    }

    public function signupSubmit(Request $request)
    {
        return redirect()->route('signup.success');
    }

    public function showForgotForm()
    {
        return view('forgot');
    }
}
