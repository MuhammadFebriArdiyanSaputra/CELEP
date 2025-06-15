<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\MateriRead;
use App\Models\LatihanScore;
use App\Models\Level;
use App\Models\Question;
use App\Models\UjianAkhir;

class MateriController extends Controller
{
    private function isLevelCompleted($userId, $level)
    {
        $totalPerLevel = [
            1 => 4,
            2 => 5,
            3 => 3,
            4 => 4,
            5 => 5,
            6 => 1,
        ];

        $readCount = DB::table('materi_read')
            ->where('user_id', $userId)
            ->where('level', $level)
            ->count();

        return $readCount >= ($totalPerLevel[$level] ?? 0);
    }

    public function show($level, $index)
    {
        $viewName = "materi.$level.$index";

        if (!View::exists($viewName)) {
            abort(404, "Materi $level.$index tidak ditemukan.");
        }

        $userId = auth()->id();

        DB::table('materi_read')->updateOrInsert(
            ['user_id' => $userId, 'level' => $level, 'sub_level' => $index],
            ['updated_at' => now(), 'created_at' => now()]
        );

        $lastIndex = match ((int)$level) {
            1 => 4,
            2 => 5,
            3 => 3,
            4 => 4,
            5 => 5,
            6 => 1,
            default => 0,
        };

        $showLatihan = false;
        if ((int)$index === $lastIndex && $this->isLevelCompleted($userId, $level)) {
            $showLatihan = true;
        }

        return view($viewName, compact('showLatihan', 'level'));
    }

    public function latihan($level)
    {
        $userId = auth()->id();

        $levelModel = Level::find($level);

        if (!$levelModel) {
            abort(404, "Level $level tidak ditemukan.");
        }

        $namaLevel = $levelModel->nama_level;

        if (!$this->isLevelCompleted($userId, $level)) {
            abort(403, "Kamu belum menyelesaikan semua materi di level $level.");
        }

        $soal = Question::where('level_id', $level)->inRandomOrder()->get();

        $viewName = "materi.$level.latihan";
        if (!View::exists($viewName)) {
            abort(404, "Halaman latihan untuk level $level tidak ditemukan.");
        }

        return view($viewName, compact('soal', 'level', 'namaLevel'));
    }

    public function index()
    {
        $userId = auth()->id();

        $readData = DB::table('materi_read')
            ->where('user_id', $userId)
            ->select('level', DB::raw('count(*) as read_count'))
            ->groupBy('level')
            ->pluck('read_count', 'level');

        $totalPerLevel = [
            1 => 4,
            2 => 5,
            3 => 3,
            4 => 4,
            5 => 5,
            6 => 1,
        ];

        $progress = [];
        foreach ($totalPerLevel as $level => $total) {
            $progress[$level] = [
                'read' => $readData[$level] ?? 0,
                'total' => $total,
            ];
        }

        return view('pages.welcome', compact('progress'));
    }

    public function storeQuizResult(Request $request, $level)
    {
        $userId = auth()->id();
        $jawabanUser = $request->input('jawaban', []);
        $jumlahBenar = 0;
        $jumlahSoal = count($jawabanUser);

        foreach ($jawabanUser as $questionId => $jawaban) {
            $soal = Question::find($questionId);
            if ($soal && strtolower($soal->jawaban_benar) === strtolower($jawaban)) {
                $jumlahBenar++;
            }
        }

        $skor = $jumlahSoal > 0 ? round(($jumlahBenar / $jumlahSoal) * 100) : 0;

        LatihanScore::create([
            'user_id' => $userId,
            'level' => $level,
            'jumlah_benar' => $jumlahBenar,
            'jumlah_soal' => $jumlahSoal,
            'skor' => $skor,
        ]);

        return redirect()->back()->with('result', "Kamu menjawab benar {$jumlahBenar} dari {$jumlahSoal} soal. Skor akhir: {$skor}%");
    }

    
    private function hasPassedAllLatihan($userId): bool
    {
        $requiredLevels = [1, 2, 3, 4, 5, 6];

        $passedLevels = \App\Models\LatihanScore::where('user_id', $userId)
            ->whereIn('level', $requiredLevels)
            ->where('skor', '>=', 80)
            ->pluck('level')
            ->unique()
            ->toArray();

        return count(array_intersect($requiredLevels, $passedLevels)) === count($requiredLevels);
    }

    public function showUjianAkhir()
    {
        $user = auth()->user();

        $progress = DB::table('latihan_scores')
            ->where('user_id', auth()->id())
            ->whereIn('level', [1, 2, 3, 4, 5])
            ->pluck('skor', 'level');

        if (count($progress) < 5 || $progress->min() < 80) {
            return redirect()->route('welcome')->with('error', 'Anda harus menyelesaikan semua latihan level 1-5 dengan nilai minimal 80!');
        }

        $soal = UjianAkhir::inRandomOrder()->take(40)->get();

        return view('materi.6.ujian_akhir', compact('soal'));
    }

    public function storeUjianAkhir(Request $request)
    {
        $jawabanUser = $request->input('jawaban', []);
        $jumlahBenar = 0;

        foreach ($jawabanUser as $soalId => $jawaban) {
            $soal = UjianAkhir::find($soalId);
            if ($soal && strtolower($soal->jawaban_benar) == strtolower($jawaban)) {
                $jumlahBenar++;
            }
        }

        $totalSoal = count($jawabanUser);
        $nilai = $totalSoal > 0 ? round(($jumlahBenar / $totalSoal) * 100) : 0;

        DB::table('hasil_ujian')->updateOrInsert(
            ['user_id' => auth()->id()],
            ['nilai' => $nilai, 'created_at' => now(), 'updated_at' => now()]
        );

        return redirect()->route('materi.ujianAkhir')->with('result', "Nilai Ujian Akhir Anda: $nilai");
    }
}
