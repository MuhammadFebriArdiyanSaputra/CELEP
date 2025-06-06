<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Question;      // diasumsikan ini untuk soal latihan
use App\Models\UjianAkhir;    // untuk soal ujian akhir

class AdminDashboardController extends Controller
{
    public function index()
    {
        $jumlahPengguna = User::count();
        $jumlahLatihan = Question::count();        // GANTI: SoalLatihan -> Question
        $jumlahUjian = UjianAkhir::count();        // GANTI: SoalUjian -> UjianAkhir

        return view('admin.dashboard', compact('jumlahPengguna', 'jumlahLatihan', 'jumlahUjian'));
    }
}
