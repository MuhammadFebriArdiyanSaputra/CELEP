<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi C++ - Level 2</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>

    <div class="navbar">
        <div class="navbar-left">
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('img/Celep1 1.png') }}" class="logo" alt="Logo">
            </a>
        </div>

        <div class="hamburger" onclick="toggleNavbar()">☰</div>

        <div class="navbar-right" id="navbarMenu">
            @auth
                <a href="{{ route('welcome') }}">Home</a>
                <a href="#kontak">Kontak</a>
                <div class="dropdown">
                    <button class="dropdown-toggle" aria-label="Profile Pengguna">👤</button>
                    <div class="dropdown-menu">
                        <a href="{{ route('profile') }}">Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </div>
                </div>
            @endauth

            @guest
                <a href="{{ route('signin') }}">Login</a>
                <a href="{{ route('signup') }}" class="signup-btn">Sign Up</a>
            @endguest
        </div>
    </div>

    <div class="container">
        <header class="judul">
            <h2>Level 2 – Input dan Output (I/O)</h2>
            <p>Materi: Berinteraksi dengan Pengguna di C++</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4>
            <ul>
                <li>Memahami konsep dasar **Input (masukan)** dan **Output (keluaran)** dalam C++.</li>
                <li>Menggunakan `cout` untuk menampilkan informasi ke layar.</li>
                <li>Menggunakan `cin` untuk menerima masukan dari pengguna.</li>
                <li>Memahami penggunaan `endl` dan `\n` untuk baris baru.</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/0sFh-rALd2Q?si=tQj2hlm9jYV4bJni" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p style="text-align: center; margin-top: 10px;">
                Jika video tidak muncul, silakan buka di <a href="https://www.youtube.com/watch?v=0sFh-rALd2Q" target="_blank" rel="noopener noreferrer">YouTube langsung</a>.
            </p>
        </div>

        <section>
            <h3>A. Pengantar Input dan Output</h3>
            <p>Dalam setiap program komputer, kemampuan untuk berinteraksi dengan dunia luar adalah hal yang fundamental. Dalam C++, interaksi ini terutama dilakukan melalui **Input (masukan)** dan **Output (keluaran)**. Ini adalah cara program menerima data dari pengguna atau file, dan cara program menampilkan hasil atau informasi kepada pengguna.</p>
            <ul>
                <li>**Output (Keluaran):** Proses menampilkan data dari program ke layar konsol, file, atau perangkat lainnya. Di C++, kita umumnya menggunakan `cout`.</li>
                <li>**Input (Masukan):** Proses membaca data dari pengguna (melalui keyboard), file, atau perangkat lainnya ke dalam program. Di C++, kita umumnya menggunakan `cin`.</li>
            </ul>
            <p>Untuk menggunakan `cout` dan `cin`, Anda perlu menyertakan library `<iostream>` di awal program Anda. Untuk mempermudah penulisan tanpa perlu mengetik `std::` berulang kali, kita bisa menggunakan pernyataan `using namespace std;`.</p>

            <h3><br>B. Output Menggunakan `cout`</h3>
            <p>`cout` (Character Output) adalah objek standar di C++ yang digunakan untuk mengirim data (teks, angka, nilai variabel, dll.) ke layar konsol. Operator `<<` (disebut operator penyisipan atau *insertion operator*) digunakan untuk "menyisipkan" data ke `cout`.</p>
            <p>Contoh penggunaan `cout`:</p>
            <pre><code class="language-cpp">
#include <iostream> // Diperlukan untuk cout, endl

// Menggunakan namespace std agar tidak perlu menulis std::
using namespace std; 

int main() {
    cout << "Halo, Dunia!" << endl; // Menampilkan teks "Halo, Dunia!" diikuti baris baru

    int angka = 10;
    double phi = 3.14;
    cout << "Nilai angka: " << angka << endl; // Menampilkan teks dan nilai variabel
    cout << "Nilai phi: " << phi << endl;

    // Menggabungkan beberapa output dalam satu baris
    cout << "Ini adalah " << "contoh " << "output " << "yang digabung." << endl;

    return 0;
}
            </code></pre>
            <p><strong>Catatan tentang `endl` dan `\n`:</strong></p>
            <ul>
                <li>`endl`: Menampilkan karakter baris baru dan kemudian "membersihkan" (flush) buffer output. Ini memastikan semua yang telah dikirim ke `cout` segera ditampilkan di layar.</li>
                <li>`\n`: Hanya menampilkan karakter baris baru. Ini lebih efisien jika Anda tidak perlu membersihkan buffer segera. Dalam banyak kasus, keduanya memberikan hasil visual yang sama di konsol.</li>
            </ul>
            <p>Contoh menggunakan `\n`:</p>
            <pre><code class="language-cpp">
#include <iostream>

using namespace std; // Menggunakan namespace std

int main() {
    cout << "Baris pertama.\n";
    cout << "Baris kedua." << endl;
    return 0;
}
            </code></pre>

            <h3>C. Input Menggunakan `cin`</h3>
            <p>`cin` (Character Input) adalah objek standar di C++ yang digunakan untuk membaca data yang dimasukkan oleh pengguna melalui keyboard. Operator `>>` (disebut operator ekstraksi atau *extraction operator*) digunakan untuk "mengambil" data dari `cin` dan menyimpannya ke dalam variabel.</p>
            <p>Contoh penggunaan `cin`:</p>
            <pre><code class="language-cpp">
#include <iostream> // Diperlukan untuk cin dan cout
#include <string>   // Diperlukan jika Anda ingin membaca string

using namespace std; // Menggunakan namespace std

int main() {
    string nama;
    int usia;
    double tinggi;

    // Meminta input nama
    cout << "Masukkan nama Anda: ";
    cin >> nama; // Membaca satu kata (tanpa spasi)

    // Meminta input usia
    cout << "Masukkan usia Anda: ";
    cin >> usia;

    // Meminta input tinggi
    cout << "Masukkan tinggi badan Anda (cm): ";
    cin >> tinggi;

    // Menampilkan kembali data yang dimasukkan
    cout << "\n--- Data yang Anda masukkan ---" << endl;
    cout << "Nama: " << nama << endl;
    cout << "Usia: " << usia << " tahun" << endl;
    cout << "Tinggi: " << tinggi << " cm" << endl;

    return 0;
}
            </code></pre>

            <h3>D. Membaca String dengan Spasi (`getline`)</h3>
            <p>Jika Anda ingin membaca string yang mengandung spasi (misalnya, nama lengkap), `cin >>` saja tidak cukup karena ia akan berhenti membaca ketika menemukan spasi. Untuk itu, Anda bisa menggunakan fungsi `getline()`.</p>
            <p><strong>Penting:</strong> Setelah menggunakan `cin >>` untuk membaca tipe data selain string, akan ada karakter newline (`\n`) yang tersisa di buffer input. Jika Anda langsung memanggil `getline` setelah itu, `getline` akan membaca newline tersebut dan menganggapnya sebagai input kosong. Untuk mengatasi ini, Anda perlu "membersihkan" buffer dengan `cin.ignore()`.</p>
            <p>Contoh menggunakan `getline()`:</p>
            <pre><code class="language-cpp">
#include <iostream>
#include <string>
#include <limits> // Diperlukan untuk numeric_limits

using namespace std; // Menggunakan namespace std

int main() {
    string namaLengkap;
    int tahunLahir;

    cout << "Masukkan tahun lahir Anda: ";
    cin >> tahunLahir;

    // Membersihkan buffer input setelah cin >>
    cin.ignore(numeric_limits<streamsize>::max(), '\n');

    cout << "Masukkan nama lengkap Anda: ";
    getline(cin, namaLengkap); // Membaca seluruh baris, termasuk spasi

    cout << "\nHalo, " << namaLengkap << "!" << endl;
    cout << "Anda lahir pada tahun " << tahunLahir << "." << endl;

    return 0;
}
            </code></pre>

            <div class="fun-fact">
                💡 Fun Fact: Objek `cin` dan `cout` adalah bagian dari pustaka `iostream` yang merupakan singkatan dari "Input/Output Stream". Konsep "stream" di sini berarti aliran data yang mengalir dari atau ke program.
            </div>
        </section>

        <div class="tombol-aksi">
            <a href="{{ route('materi.2.1') }}" class="btn-kuning">Materi Sebelumnya</a>
            <a href="{{ route('materi.2.3') }}" class="btn-kuning">Materi Selanjutnya</a>
        </div>
    </div>

    <footer id="kontak" class="footer">
        <strong>Kontak Kami</strong><br>
        Email: <a href="mailto:support@celep.com">support@celep.com</a><br>
        Telepon: +62 812-3456-7890
    </footer>

    <script>
        function toggleNavbar() {
            const navbar = document.getElementById("navbarMenu");
            navbar.classList.toggle("show");
        }
    </script>

</body>
</html>