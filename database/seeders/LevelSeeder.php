<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $levels = [
            'Pengenalan Dasar',
            'Dasar Pemrograman',
            'Struktur Data Dasar',
            'Konsep Lanjut',
            'Pemrograman OOP',
            'Contoh Project dan Ujian Akhir',
            'Ujian Akhir',
        ];

        foreach ($levels as $levelName) {
            Level::create([
                'nama_level' => $levelName,
            ]);
        }
    }
}
