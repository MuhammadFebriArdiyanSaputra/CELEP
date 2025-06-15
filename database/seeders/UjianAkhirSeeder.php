<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UjianAkhir;

class UjianAkhirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'soal' => 'Apa output dari kode berikut: int a = 5; cout << a++;',
                'opsi_a' => '5',
                'opsi_b' => '6',
                'opsi_c' => 'Error',
                'opsi_d' => 'Undefined',
                'jawaban_benar' => 'a',
            ],
            [
                'soal' => 'Manakah pernyataan yang benar tentang array di C++?',
                'opsi_a' => 'Ukuran array bisa berubah saat runtime',
                'opsi_b' => 'Array harus bertipe string',
                'opsi_c' => 'Array menyimpan data secara berurutan',
                'opsi_d' => 'Array tidak bisa diakses dengan indeks',
                'jawaban_benar' => 'c',
            ],
            [
                'soal' => 'Fungsi dari perintah `return 0;` dalam `int main()` adalah?',
                'opsi_a' => 'Menjalankan program',
                'opsi_b' => 'Menutup program secara paksa',
                'opsi_c' => 'Menunjukkan bahwa program berhasil dijalankan',
                'opsi_d' => 'Mengulang program',
                'jawaban_benar' => 'c',
            ],
            [
                'soal' => 'Tipe data manakah yang paling sesuai untuk menyimpan bilangan desimal?',
                'opsi_a' => 'int',
                'opsi_b' => 'char',
                'opsi_c' => 'float',
                'opsi_d' => 'bool',
                'jawaban_benar' => 'c',
            ],
            [
                'soal' => 'Apa fungsi dari perintah `cin` dalam C++?',
                'opsi_a' => 'Menampilkan data',
                'opsi_b' => 'Menghitung angka',
                'opsi_c' => 'Menginput data dari user',
                'opsi_d' => 'Menjalankan perulangan',
                'jawaban_benar' => 'c',
            ],
        ];
        foreach ($data as $item) {
            UjianAkhir::create($item);
        }
    }
}
