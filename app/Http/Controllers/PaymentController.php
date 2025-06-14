<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans\Snap;
use Midtrans\Config;

class PaymentController extends Controller
{
    public function pay()
    {
        // User Premium
        if (!auth()->check()) {
            return redirect()->route('signin')->with('error', 'Login Dulu Bre!.');
        }
        if (auth()->user()->isPremium) {
            return redirect()->route('welcome')->with('info', 'Kamu sudah menjadi pengguna premium.');
        }
        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        if (!auth()->user()->first_name || !auth()->user()->email || !auth()->user()->mobile_phone) {
            return redirect()->route('profile')->with('error', 'Lengkapi data profil terlebih dahulu sebelum melakukan pembayaran.');
        }

        $params = [
            'transaction_details' => [
                'order_id' => uniqid(),
                'gross_amount' => 99000, // harga dalam rupiah
            ],
            'customer_details' => [
                'first_name' => auth()->user()->first_name,
                'email' => auth()->user()->email,
                'phone' => auth()->user()->mobile_phone,
            ],
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
            return view('pages.premium', compact('snapToken'));
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function verifyPayment(Request $request)
    {
        session(['payment_verified' => true]);

        return response()->json(['status' => 'ok']);
    }

    public function paymentSuccess()
    {
        if (!session('payment_verified')) {
            return redirect()->route('premium')->with('error', 'Akses tidak sah.');
        }

        $user = auth()->user();
        $user->isPremium = true;
        $user->save();

        session()->forget('payment_verified');

        return redirect()->route('profile')->with('success', 'Selamat! Kamu sekarang adalah pengguna premium.');
    }

}
