<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User; // Assuming your User model is in App\Models
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SocialLoginController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/signin')->withErrors(['social_login' => 'Could not authenticate with Google. Please try again.']);
        }

        // Check if user already exists
        $existingUser = User::where('google_id', $user->id)->first();

        if ($existingUser) {
            Auth::login($existingUser);
        } else {
            // Create a new user if they don't exist
            $newUser = User::where('email', $user->email)->first(); // Check if email already exists
            if ($newUser) {
                // If email exists but no Google ID, link Google ID
                $newUser->google_id = $user->id;
                $newUser->save();
            } else {
                // Create completely new user
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => Hash::make(Str::random(16)), // Generate a random password for social users
                ]);
            }
            Auth::login($newUser);
        }

        return redirect()->intended('/welcome'); // Redirect to your welcome or dashboard page
    }

    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
        } catch (\Exception $e) {
            return redirect('/signin')->withErrors(['social_login' => 'Could not authenticate with Facebook. Please try again.']);
        }

        $existingUser = User::where('facebook_id', $user->id)->first();

        if ($existingUser) {
            Auth::login($existingUser);
        } else {
            $newUser = User::where('email', $user->email)->first();
            if ($newUser) {
                $newUser->facebook_id = $user->id;
                $newUser->save();
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id' => $user->id,
                    'password' => Hash::make(Str::random(16)),
                ]);
            }
            Auth::login($newUser);
        }

        return redirect()->intended('/welcome'); // Redirect to your welcome or dashboard page
    }
}