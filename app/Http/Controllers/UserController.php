<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('pages.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'first_name'   => 'nullable|string|max:255',
            'last_name'    => 'nullable|string|max:255',
            'mobile_phone' => 'nullable|string|max:20',
            'email'        => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'birth_date'   => 'nullable|date',
        ]);

        $user = Auth::user();
        $user->update($request->only('first_name', 'last_name', 'mobile_phone', 'email', 'birth_date'));

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }

}
