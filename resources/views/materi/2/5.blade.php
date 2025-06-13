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
            <h2>Level 2 – Perulangan: For, While, Do While</h2>
            <p>Materi: Mengulang Tugas dalam Program C++</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4>
            <ul>
                <li>Memahami konsep **perulangan** dalam pemrograman.</li>
                <li>Menggunakan loop `for` untuk iterasi dengan jumlah yang diketahui.</li>
                <li>Menggunakan loop `while` untuk iterasi berdasarkan kondisi.</li>
                <li>Menerapkan loop `do-while` untuk eksekusi minimal sekali.</li>
                <li>Memahami perbedaan dan kapan menggunakan masing-masing jenis perulangan.</li>
                <li>Mengenal pernyataan `break` dan `continue` dalam perulangan.</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/WBdN3mI5MFo?si=uk0DmEgFL8S8eywr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <div class="video" style="margin-top: 20px;">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/kH8bkgogfD0?si=4LbDcn1D8haaAvm-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <section>
            <h3>A. Pengantar Perulangan (Loop)</h3>
            <p>Perulangan adalah struktur kontrol yang memungkinkan blok kode dieksekusi berulang kali selama kondisi tertentu terpenuhi. Ini sangat berguna untuk tugas-tugas yang berulang, seperti memproses daftar item, mengulang input pengguna hingga valid, atau menjalankan simulasi.</p>
            <p>C++ menyediakan tiga jenis perulangan utama: `for`, `while`, dan `do-while`.</p>

            <h3><br>B. Perulangan `for`</h3>
            <p>Perulangan `for` paling sering digunakan ketika Anda mengetahui berapa kali Anda ingin mengulang suatu blok kode. Ia memiliki sintaks yang ringkas untuk inisialisasi, kondisi, dan pembaruan counter.</p>
            <p>Sintaks dasar:</p>
            <pre><code class="language-cpp">
for (inisialisasi; kondisi; pembaruan) {
    // Kode yang akan diulang
}
            </code></pre>
            <ul>
                <li>`inisialisasi`: Dieksekusi sekali di awal perulangan. Sering digunakan untuk mendeklarasikan dan menginisialisasi variabel counter.</li>
                <li>`kondisi`: Dievaluasi sebelum setiap iterasi. Jika `true`, perulangan berlanjut; jika `false`, perulangan berhenti.</li>
                <li>`pembaruan`: Dieksekusi setelah setiap iterasi. Sering digunakan untuk menginkremen atau mendekremen variabel counter.</li>
            </ul>
            <p>Contoh:</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

int main() {
    // Menampilkan angka 1 sampai 5
    for (int i = 1; i <= 5; i++) {
        cout << "Angka: " << i << endl;
    }

    // Menampilkan angka genap dari 0 sampai 10
    cout << "\nAngka genap (0-10):" << endl;
    for (int i = 0; i <= 10; i += 2) {
        cout << i << " ";
    }
    cout << endl; // Baris baru setelah loop

    return 0;
}
            </code></pre>

            <h3>C. Perulangan `while`</h3>
            <p>Perulangan `while` digunakan ketika Anda ingin mengulang blok kode selama kondisi tertentu bernilai `true`. Jumlah iterasi tidak harus diketahui di awal; perulangan akan terus berjalan sampai kondisi menjadi `false`.</p>
            <p>Sintaks dasar:</p>
            <pre><code class="language-cpp">
while (kondisi) {
    // Kode yang akan diulang
    // Pastikan ada sesuatu di dalam loop yang mengubah kondisi
    // agar loop tidak menjadi infinite loop
}
            </code></pre>
            <p>Contoh:</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

int main() {
    int hitung = 0;
    while (hitung < 3) {
        cout << "Iterasi ke-" << (hitung + 1) << endl;
        hitung++; // Penting: mengubah kondisi agar loop berhenti
    }

    // Contoh input berulang sampai kondisi terpenuhi
    int password;
    cout << "\nMasukkan password (angka 123): ";
    cin >> password;
    while (password != 123) {
        cout << "Password salah! Coba lagi: ";
        cin >> password;
    }
    cout << "Password benar! Selamat datang." << endl;

    return 0;
}
            </code></pre>

            <h3>D. Perulangan `do-while`</h3>
            <p>Perulangan `do-while` mirip dengan `while`, tetapi perbedaannya adalah blok kode di dalam `do-while` **akan dieksekusi minimal satu kali**, bahkan jika kondisi awalnya `false`. Kondisi diperiksa di akhir setiap iterasi.</p>
            <p>Sintaks dasar:</p>
            <pre><code class="language-cpp">
do {
    // Kode yang akan diulang
    // Akan dieksekusi setidaknya sekali
} while (kondisi); // Kondisi diperiksa setelah eksekusi blok kode
            </code></pre>
            <p>Contoh:</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

int main() {
    char pilihan;
    do {
        cout << "Pilih A atau B: ";
        cin >> pilihan;
        // Mengubah pilihan ke huruf besar untuk perbandingan
        if (pilihan >= 'a' && pilihan <= 'z') {
            pilihan = pilihan - 32; // Konversi ke huruf besar
        }
        cout << "Anda memilih: " << pilihan << endl;
    } while (pilihan != 'A' && pilihan != 'B'); // Loop berlanjut sampai A atau B dipilih

    cout << "Pilihan valid!" << endl;
    return 0;
}
            </code></pre>

            <div class="fun-fact">
                💡 Fun Fact: Perulangan `for` sangat cocok untuk iterasi array atau struktur data dengan ukuran yang diketahui, sedangkan `while` dan `do-while` lebih fleksibel untuk kondisi yang dinamis!
            </div>

            <h3>E. Pernyataan `break` dan `continue`</h3>
            <p>Dua pernyataan ini digunakan untuk mengontrol alur perulangan dari dalam blok kode:</p>
            <ul>
                <li>`break;`: Menghentikan perulangan sepenuhnya dan melanjutkan eksekusi ke pernyataan setelah perulangan.</li>
                <li>`continue;`: Melompati sisa iterasi saat ini dan langsung melanjutkan ke iterasi berikutnya.</li>
            </ul>
            <p>Contoh `break`:</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

int main() {
    for (int i = 1; i <= 10; i++) {
        if (i == 6) {
            cout << "Angka 6 ditemukan, perulangan dihentikan." << endl;
            break; // Keluar dari loop for
        }
        cout << "Angka: " << i << endl;
    }
    return 0;
}
            </code></pre>

            <p>Contoh `continue`:</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

int main() {
    for (int i = 1; i <= 5; i++) {
        if (i == 3) {
            cout << "Melewatkan angka 3." << endl;
            continue; // Langsung ke iterasi berikutnya (i=4)
        }
        cout << "Memproses angka: " << i << endl;
    }
    return 0;
}
            </code></pre>
        </section>

        <div class="tombol-aksi">
            <a href="{{ route('materi.2.4') }}" class="btn-kuning">Materi Sebelumnya</a>
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