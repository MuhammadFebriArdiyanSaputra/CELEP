<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
USE App\Models\LatihanScore;
use App\Models\User;
use App\Models\HasilUjian;

class UserController extends Controller
{
    public function data_pengguna()
    {
        // Ambil semua data pengguna dari database
        $users = User::all(); // Mengambil semua pengguna
        return view('user.data_pengguna', compact('users'));
    }

    public function profile()
    {
        $user = Auth::user();
        $riwayatSkor = LatihanScore::where('user_id', $user->id)
                    ->orderByDesc('created_at')
                    ->get();

        $riwayatUjian = HasilUjian::where('user_id', $user->id)
                        ->orderByDesc('created_at')
                        ->get();

        $attemptUjian = $riwayatUjian->count();
        $nilaiUASterakhir = $riwayatUjian->first()?->nilai;

        return view('pages.profile', compact(
            'user',
            'riwayatSkor',
            'riwayatUjian',
            'attemptUjian',
            'nilaiUASterakhir'
        ));
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
