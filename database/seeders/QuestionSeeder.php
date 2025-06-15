<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $soal = [
            [
                'soal' => 'Apa output dari kode: cout << "Hello";?',
                'level_id' => 1,
                'opsi_a' => 'Hello',
                'opsi_b' => 'hello',
                'opsi_c' => 'cout',
                'opsi_d' => 'Error',
                'jawaban_benar' => 'a',
            ],[
                'soal' => 'Simbol untuk komentar satu baris di C++ adalah?',
                'level_id' => 2,
                'opsi_a' => '#',
                'opsi_b' => '/*',
                'opsi_c' => '//',
                'opsi_d' => '<!--',
                'jawaban_benar' => 'c',
            ],
            [
                'soal' => 'Apa yang dilakukan fungsi "cin" di C++?',
                'level_id' => 3,
                'opsi_a' => 'Menampilkan output',
                'opsi_b' => 'Membaca input',
                'opsi_c' => 'Menghitung nilai',
                'opsi_d' => 'Menginisialisasi variabel',
                'jawaban_benar' => 'b',
            ],
            [
                'soal' => 'Apa itu OOP?',
                'level_id' => 4,
                'opsi_a' => 'Object Oriented Programming',
                'opsi_b' => 'Open Object Protocol',
                'opsi_c' => 'Object Oriented Process',
                'opsi_d' => 'Open Object Programming',
                'jawaban_benar' => 'a',
            ],
            [
                'soal' => 'Apa yang dimaksud dengan inheritance dalam OOP?',
                'level_id' => 5,
                'opsi_a' => 'Penggunaan kembali kode dari kelas lain',
                'opsi_b' => 'Penghapusan kelas',
                'opsi_c' => 'Pembuatan kelas baru',
                'opsi_d' => 'Penggabungan dua kelas',
                'jawaban_benar' => 'a',
            ],
            [
                'soal' => 'Apa yang dimaksud dengan polymorphism dalam OOP?',
                'level_id' => 6,
                'opsi_a' => 'Kemampuan objek untuk mengambil banyak bentuk',
                'opsi_b' => 'Penggunaan kembali kode',
                'opsi_c' => 'Penghapusan kelas',
                'opsi_d' => 'Pembuatan kelas baru',
                'jawaban_benar' => 'a',
            ],
        ];
        foreach ($soal as $item) {
           Question::create($item);
        }
    }
}
