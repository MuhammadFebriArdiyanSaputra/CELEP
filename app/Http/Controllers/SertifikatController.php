<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SertifikatController extends Controller
{
    public function download()
    {
        $user = Auth::user();

        $nilaiTerakhir = DB::table('hasil_ujian')
            ->where('user_id', $user->id)
            ->orderByDesc('created_at')
            ->first();

        if (!$nilaiTerakhir || $nilaiTerakhir->nilai < 80) {
            return redirect()->route('profile')->with('error', 'Kamu belum memenuhi syarat untuk mendapatkan sertifikat.');
        }

        $pdf = Pdf::loadView('sertifikat.template', [
            'user' => $user,
            'nilai' => $nilaiTerakhir->nilai,
            'tanggal' => now()->translatedFormat('d F Y'),
        ]);

        return $pdf->download('Sertifikat-' . $user->name . '.pdf');
    }
}
