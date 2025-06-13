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
            <h2>Level 3 – Fungsi dan Rekursif</h2>
            <p>Materi: Membangun Program Modular dan Efisien</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4>
            <ul>
                <li>Memahami konsep **fungsi** dalam C++ dan manfaatnya.</li>
                <li>Mendeklarasikan dan mendefinisikan fungsi.</li>
                <li>Memahami konsep **parameter** dan **nilai kembalian** (return value).</li>
                <li>Memahami perbedaan antara **pass by value** dan **pass by reference**.</li>
                <li>Mengenal konsep **fungsi rekursif** dan kapan menggunakannya.</li>
                <li>Mampu menulis program dengan fungsi yang terstruktur.</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/EtyLyC8PHTA?si=2-2t3U1gfdcylV2O" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <section>
            <h3>A. Pengantar Fungsi</h3>
            <p>Dalam pemrograman C++, **fungsi** adalah blok kode yang terorganisir dan dapat digunakan kembali untuk melakukan tugas tertentu. Fungsi membantu kita memecah program besar menjadi bagian-bagian yang lebih kecil dan mudah dikelola (modularitas), meningkatkan keterbacaan kode, dan mencegah pengulangan kode (`Don't Repeat Yourself - DRY` principle).</p>
            <p>Setiap program C++ setidaknya memiliki satu fungsi, yaitu `main()`, yang merupakan titik awal eksekusi program.</p>

            <h3><br>B. Deklarasi dan Definisi Fungsi</h3>
            <p>Sebuah fungsi harus dideklarasikan (memberitahu compiler tentang keberadaannya) sebelum dapat digunakan, dan kemudian didefinisikan (implementasi kode aktualnya).</p>
            <ul>
                <li><strong>Deklarasi (Function Prototype):</strong> Memberi tahu compiler tipe kembalian, nama fungsi, dan tipe parameter yang diterimanya. Biasanya diletakkan sebelum `main()`.</li>
                <pre><code class="language-cpp">
tipe_kembalian nama_fungsi(tipe_parameter1 nama_parameter1, tipe_parameter2 nama_parameter2, ...);
                </code></pre>
                <li><strong>Definisi Fungsi:</strong> Implementasi sebenarnya dari fungsi, yaitu blok kode yang akan dieksekusi. Bisa diletakkan di mana saja, tetapi umumnya setelah `main()` jika prototipe sudah ada.</li>
                <pre><code class="language-cpp">
tipe_kembalian nama_fungsi(tipe_parameter1 nama_parameter1, tipe_parameter2 nama_parameter2, ...) {
    // Blok kode fungsi
    // ...
    return nilai_kembalian; // Jika tipe_kembalian bukan void
}
                </code></pre>
            </ul>
            <p>Contoh Fungsi Sederhana:</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

// Deklarasi fungsi (Function Prototype)
void sapaPengguna(); // Fungsi tanpa parameter dan tanpa nilai kembalian

// Fungsi dengan parameter dan nilai kembalian
int tambah(int a, int b); 

int main() {
    sapaPengguna(); // Memanggil fungsi sapaPengguna

    int hasilJumlah = tambah(5, 7); // Memanggil fungsi tambah dan menyimpan hasilnya
    cout << "Hasil penjumlahan: " << hasilJumlah << endl;

    return 0;
}

// Definisi fungsi sapaPengguna
void sapaPengguna() {
    cout << "Selamat datang di program kami!" << endl;
}

// Definisi fungsi tambah
int tambah(int a, int b) {
    return a + b; // Mengembalikan hasil penjumlahan
}
            </code></pre>

            <h3>C. Parameter dan Nilai Kembalian</h3>
            <ul>
                <li>**Parameter (Argumen):** Nilai yang diteruskan ke fungsi saat fungsi dipanggil. Fungsi menggunakan parameter ini untuk melakukan tugasnya.</li>
                <li>**Nilai Kembalian (Return Value):** Nilai yang dikembalikan oleh fungsi setelah selesai dieksekusi. Tipe data nilai kembalian harus sesuai dengan `tipe_kembalian` yang dideklarasikan. Jika fungsi tidak mengembalikan nilai, gunakan `void` sebagai tipe kembalian.</li>
            </ul>

            <h3>D. Pass by Value vs. Pass by Reference</h3>
            <p>Ada dua cara utama untuk meneruskan argumen ke fungsi:</p>
            <h4>1. Pass by Value (Salin Nilai)</h4>
            <p>Ketika parameter diteruskan dengan nilai, sebuah salinan dari nilai argumen dibuat dan diteruskan ke fungsi. Perubahan yang dilakukan pada parameter di dalam fungsi **tidak akan memengaruhi** nilai asli argumen di luar fungsi.</p>
            <p>Contoh Pass by Value:</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

void ubahNilai(int angka) { // 'angka' adalah salinan dari variabel asli
    angka = 100;
    cout << "Dalam fungsi, angka = " << angka << endl;
}

int main() {
    int nilaiAsli = 50;
    cout << "Sebelum fungsi, nilaiAsli = " << nilaiAsli << endl;
    ubahNilai(nilaiAsli); // Meneruskan nilai (50)
    cout << "Setelah fungsi, nilaiAsli = " << nilaiAsli << endl; // Tetap 50
    return 0;
}
            </code></pre>

            <h4>2. Pass by Reference (Akses Langsung ke Alamat Memori)</h4>
            <p>Ketika parameter diteruskan dengan referensi (menggunakan operator `&`), bukan salinan nilai yang dibuat, melainkan referensi ke alamat memori variabel asli yang diteruskan. Ini berarti perubahan yang dilakukan pada parameter di dalam fungsi **akan memengaruhi** nilai asli argumen di luar fungsi.</p>
            <p>Contoh Pass by Reference:</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

void ubahNilaiRef(int &angka) { // '&' menandakan pass by reference
    angka = 100;
    cout << "Dalam fungsi (ref), angka = " << angka << endl;
}

int main() {
    int nilaiAsli = 50;
    cout << "Sebelum fungsi (ref), nilaiAsli = " << nilaiAsli << endl;
    ubahNilaiRef(nilaiAsli); // Meneruskan referensi ke nilaiAsli
    cout << "Setelah fungsi (ref), nilaiAsli = " << nilaiAsli << endl; // Sekarang 100
    return 0;
}
            </code></pre>

            <div class="fun-fact">
                💡 Fun Fact: Penggunaan `const` pada parameter fungsi (misalnya `void tampilkan(const string& nama)`) sangat direkomendasikan untuk pass by reference ketika fungsi tidak bermaksud mengubah nilai parameter, ini meningkatkan keamanan dan efisiensi!
            </div>

            <h3>E. Fungsi Rekursif</h3>
            <p>Fungsi rekursif adalah fungsi yang memanggil dirinya sendiri secara langsung atau tidak langsung. Rekursi digunakan untuk menyelesaikan masalah yang dapat dipecah menjadi sub-masalah yang lebih kecil dari jenis yang sama. Setiap fungsi rekursif harus memiliki:</p>
            <ul>
                <li>**Base Case (Kasus Dasar):** Kondisi di mana fungsi tidak lagi memanggil dirinya sendiri, ini menghentikan rekursi untuk menghindari *infinite loop*.</li>
                <li>**Recursive Step (Langkah Rekursif):** Bagian di mana fungsi memanggil dirinya sendiri dengan input yang lebih kecil atau lebih sederhana.</li>
            </ul>
            <p>Contoh: Menghitung Faktorial</p>
            <p>Faktorial dari sebuah bilangan $n$ (ditulis $n!$) adalah produk dari semua bilangan bulat positif kurang dari atau sama dengan $n$. Contoh: $5! = 5 \times 4 \times 3 \times 2 \times 1 = 120$.</p>
            <p>Secara rekursif, $n! = n \times (n-1)!$ dan $0! = 1$ (base case).</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

// Fungsi rekursif untuk menghitung faktorial
int hitungFaktorial(int n) {
    // Base Case
    if (n == 0 || n == 1) {
        return 1;
    } 
    // Recursive Step
    else {
        return n * hitungFaktorial(n - 1); // Fungsi memanggil dirinya sendiri
    }
}

int main() {
    int angka = 5;
    cout << "Faktorial dari " << angka << " adalah: " << hitungFaktorial(angka) << endl; // Output: 120

    angka = 0;
    cout << "Faktorial dari " << angka << " adalah: " << hitungFaktorial(angka) << endl; // Output: 1

    return 0;
}
            </code></pre>
            <p>Rekursi bisa elegan untuk beberapa masalah, tetapi juga bisa kurang efisien dan lebih sulit di-debug daripada iterasi (menggunakan loop) jika tidak diimplementasikan dengan benar. Penting untuk memastikan adanya base case yang menghentikan rekursi.</p>
        </section>

        <div class="tombol-aksi">
            <a href="{{ route('materi.3.2') }}" class="btn-kuning">Materi Sebelumnya</a>
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