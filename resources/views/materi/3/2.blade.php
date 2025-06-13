<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi C++ - Level 3</title>
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
            <h2>Level 3 – String dan Operasi String</h2>
            <p>Materi: Bekerja dengan Teks dalam C++</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4>
            <ul>
                <li>Memahami konsep **String** di C++.</li>
                <li>Mendeklarasikan dan menginisialisasi objek `string`.</li>
                <li>Melakukan operasi dasar seperti **concatenation** (penggabungan) string.</li>
                <li>Mengakses karakter individual dalam string.</li>
                <li>Mengenal fungsi-fungsi penting untuk manipulasi string (panjang, substring, pencarian, dll.).</li>
                <li>Memahami perbedaan antara `std::string` dan C-style string (`char[]`).</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/KJo5ojreADk?si=4C7EtKZYchyfeK6n" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <section>
            <h3>A. Pengantar String di C++</h3>
            <p>Di C++, string adalah urutan karakter. Kita telah melihat `char` untuk karakter tunggal. Untuk menyimpan urutan karakter yang lebih panjang (teks), C++ menyediakan dua cara utama:</p>
            <ol>
                <li>**C-style strings (array of char):** Ini adalah warisan dari bahasa C, berupa array dari karakter yang diakhiri dengan karakter null (`\0`).</li>
                <li>**`std::string`:** Ini adalah kelas string yang lebih modern dan lebih mudah digunakan dari pustaka standar C++. Disarankan untuk sebagian besar penggunaan string karena lebih aman dan fleksibel. Untuk menggunakan `std::string`, Anda perlu menyertakan header `<string>`.</li>
            </ol>
            <p>Materi ini akan fokus pada penggunaan `std::string` karena lebih umum dan direkomendasikan.</p>

            <h3>B. Deklarasi dan Inisialisasi `std::string`</h3>
            <p>Mendeklarasikan dan menginisialisasi `std::string` mirip dengan variabel biasa:</p>
            <pre><code class="language-cpp">
#include <iostream>
#include <string> // Penting: untuk menggunakan std::string
using namespace std;

int main() {
    string salam = "Halo, Dunia!"; // Inisialisasi langsung
    string nama;                  // Deklarasi tanpa inisialisasi

    nama = "Budi Santoso";        // Penugasan nilai setelah deklarasi

    string kalimat = salam + " Nama saya " + nama + "."; // Penggabungan string saat inisialisasi

    cout << "Salam: " << salam << endl;
    cout << "Nama: " << nama << endl;
    cout << "Kalimat: " << kalimat << endl;

    // String kosong
    string pesanKosong; 
    cout << "Pesan kosong: " << pesanKosong << endl;

    return 0;
}
            </code></pre>

            <h3>C. Input/Output String</h3>
            <p>Untuk mengambil input string dari pengguna, Anda bisa menggunakan `cin` (untuk satu kata) atau `getline()` (untuk string dengan spasi).</p>
            <pre><code class="language-cpp">
#include <iostream>
#include <string>
#include <limits> // Untuk cin.ignore
using namespace std;

int main() {
    string kata;
    cout << "Masukkan satu kata: ";
    cin >> kata; // Hanya membaca sampai spasi pertama
    cout << "Kata yang dimasukkan: " << kata << endl;

    // Membersihkan buffer setelah cin >> jika ada input lain sebelumnya
    cin.ignore(numeric_limits<streamsize>::max(), '\n'); 

    string kalimatLengkap;
    cout << "Masukkan kalimat lengkap: ";
    getline(cin, kalimatLengkap); // Membaca seluruh baris, termasuk spasi
    cout << "Kalimat yang dimasukkan: " << kalimatLengkap << endl;

    return 0;
}
            </code></pre>

            <h3>D. Operasi Dasar String</h3>

            <h4>1. Panjang String (`.length()` atau `.size()`)</h4>
            <p>Fungsi `length()` atau `size()` mengembalikan jumlah karakter dalam string.</p>
            <pre><code class="language-cpp">
#include <iostream>
#include <string>
using namespace std;

int main() {
    string teks = "Pemrograman C++";
    cout << "Panjang teks: " << teks.length() << " karakter." << endl;
    // atau
    cout << "Ukuran teks: " << teks.size() << " karakter." << endl; 
    return 0;
}
            </code></pre>

            <h4>2. Penggabungan String (Concatenation)</h4>
            <p>Anda bisa menggabungkan string menggunakan operator `+` atau fungsi `append()`.</p>
            <pre><code class="language-cpp">
#include <iostream>
#include <string>
using namespace std;

int main() {
    string s1 = "Halo";
    string s2 = "Dunia";
    string s3 = s1 + " " + s2; // Menggunakan operator +
    cout << "Gabungan (+): " << s3 << endl;

    string s4 = "Selamat";
    s4.append(" Siang!"); // Menggunakan append()
    cout << "Gabungan (append): " << s4 << endl;
    return 0;
}
            </code></pre>

            <h4>3. Mengakses Karakter</h4>
            <p>Karakter individual dalam string dapat diakses seperti elemen array, menggunakan indeks (dimulai dari 0).</p>
            <pre><code class="language-cpp">
#include <iostream>
#include <string>
using namespace std;

int main() {
    string kata = "BELAJAR";
    cout << "Karakter pertama: " << kata[0] << endl;   // Output: B
    cout << "Karakter ketiga: " << kata[2] << endl;    // Output: L

    // Mengubah karakter
    kata[0] = 'P';
    cout << "Setelah diubah: " << kata << endl; // Output: PELAJAR
    return 0;
}
            </code></pre>

            <h4>4. Substring (`.substr()`)</h4>
            <p>Fungsi `substr()` digunakan untuk mengekstrak bagian dari string.</p>
            <pre><code class="language-cpp">
#include <iostream>
#include <string>
using namespace std;

int main() {
    string kalimat = "Ini adalah contoh kalimat.";
    // substr(posisi_awal, panjang)
    string sub = kalimat.substr(8, 6); // Mulai dari indeks 8 (huruf 'c'), panjang 6 karakter
    cout << "Substring: " << sub << endl; // Output: contoh

    string sisa = kalimat.substr(8); // Mulai dari indeks 8 sampai akhir
    cout << "Sisa kalimat: " << sisa << endl; // Output: contoh kalimat.
    return 0;
}
            </code></pre>

            <h4>5. Pencarian String (`.find()`)</h4>
            <p>Fungsi `find()` mencari kemunculan pertama dari substring dalam string. Jika ditemukan, ia mengembalikan indeks posisi awal; jika tidak, ia mengembalikan `string::npos`.</p>
            <pre><code class="language-cpp">
#include <iostream>
#include <string>
using namespace std;

int main() {
    string teks = "C++ adalah bahasa yang kuat.";
    string cari1 = "bahasa";
    string cari2 = "python";

    size_t posisi1 = teks.find(cari1); // size_t adalah tipe data untuk ukuran/indeks

    if (posisi1 != string::npos) { // string::npos adalah konstanta khusus yang berarti "tidak ditemukan"
        cout << "'" << cari1 << "' ditemukan di indeks: " << posisi1 << endl;
    } else {
        cout << "'" << cari1 << "' tidak ditemukan." << endl;
    }

    size_t posisi2 = teks.find(cari2);
    if (posisi2 != string::npos) {
        cout << "'" << cari2 << "' ditemukan di indeks: " << posisi2 << endl;
    } else {
        cout << "'" << cari2 << "' tidak ditemukan." << endl;
    }
    return 0;
}
            </code></pre>

            <h4>6. Membandingkan String (`==`, `!=`, `.compare()`)</h4>
            <p>Anda bisa membandingkan string menggunakan operator perbandingan atau fungsi `.compare()`.</p>
            <pre><code class="language-cpp">
#include <iostream>
#include <string>
using namespace std;

int main() {
    string s1 = "apel";
    string s2 = "Apel";
    string s3 = "apel";

    if (s1 == s3) {
        cout << "s1 dan s3 sama." << endl;
    } else {
        cout << "s1 dan s3 berbeda." << endl;
    }

    if (s1 != s2) {
        cout << "s1 dan s2 berbeda (case-sensitive)." << endl;
    }

    // compare() mengembalikan 0 jika sama, nilai < 0 jika string pertama lebih kecil, > 0 jika lebih besar
    if (s1.compare(s3) == 0) {
        cout << "s1 dan s3 sama (via compare)." << endl;
    }
    return 0;
}
            </code></pre>

            <div class="fun-fact">
                💡 Fun Fact: Objek `std::string` secara otomatis mengelola memorinya sendiri, jadi Anda tidak perlu khawatir tentang alokasi atau dealokasi memori seperti pada C-style strings!
            </div>
        </section>

        <div class="tombol-aksi">
            <a href="{{ route('materi.3.1') }}" class="btn-kuning">Materi Sebelumnya</a>
            <a href="{{ route('materi.3.3') }}" class="btn-kuning">Materi Selanjutnya</a>
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