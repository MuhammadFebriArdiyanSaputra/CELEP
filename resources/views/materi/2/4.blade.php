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
            <h2>Level 2 – Struktur Kontrol: If, Else, Switch</h2>
            <p>Materi: Membuat Keputusan dalam Program C++</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4>
            <ul>
                <li>Memahami pentingnya **struktur kontrol** dalam program.</li>
                <li>Menggunakan pernyataan `if` untuk eksekusi bersyarat.</li>
                <li>Menggunakan `if-else` untuk dua pilihan kondisi.</li>
                <li>Menerapkan `if-else if-else` untuk banyak pilihan kondisi.</li>
                <li>Menggunakan pernyataan `switch` untuk penanganan banyak kasus.</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/_lxIFFLFdBk?si=4uhH8_NkBB2-IXf0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <div class="video" style="margin-top: 20px;">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/5lO9YdC48uw?si=DC8vIQfzDX-66XnY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <section>
            <h3>A. Pengantar Struktur Kontrol</h3>
            <p>Dalam pemrograman, **struktur kontrol** adalah pernyataan yang menentukan urutan eksekusi instruksi dalam program. Tanpa struktur kontrol, program akan selalu mengeksekusi instruksi dari atas ke bawah secara berurutan. Struktur kontrol memungkinkan program untuk membuat keputusan, mengulang blok kode, atau melompati bagian tertentu, sehingga program menjadi lebih dinamis dan responsif terhadap berbagai kondisi.</p>

            <h3><br>B. Struktur Kontrol `if`</h3>
            <p>Pernyataan `if` digunakan untuk mengeksekusi blok kode hanya jika suatu kondisi tertentu bernilai `true` (benar). Jika kondisi bernilai `false` (salah), blok kode tersebut akan dilewati.</p>
            <p>Sintaks dasar:</p>
            <pre><code class="language-cpp">
if (kondisi) {
    // Kode yang akan dieksekusi jika kondisi benar
}
            </code></pre>
            <p>Contoh:</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

int main() {
    int nilai = 75;
    if (nilai >= 60) {
        cout << "Anda lulus ujian!" << endl;
    }
    cout << "Program selesai." << endl;
    return 0;
}
            </code></pre>

            <h3>C. Struktur Kontrol `if-else`</h3>
            <p>Pernyataan `if-else` menyediakan dua jalur eksekusi berdasarkan kondisi. Jika kondisi bernilai `true`, blok `if` dieksekusi; jika `false`, blok `else` yang dieksekusi.</p>
            <p>Sintaks dasar:</p>
            <pre><code class="language-cpp">
if (kondisi) {
    // Kode jika kondisi benar
} else {
    // Kode jika kondisi salah
}
            </code></pre>
            <p>Contoh:</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

int main() {
    int umur = 17;
    if (umur >= 18) {
        cout << "Anda dewasa." << endl;
    } else {
        cout << "Anda masih di bawah umur." << endl;
    }
    return 0;
}
            </code></pre>

            <h3>D. Struktur Kontrol `if-else if-else`</h3>
            <p>Digunakan ketika Anda memiliki beberapa kondisi yang harus diperiksa secara berurutan. Program akan mengeksekusi blok kode pertama yang kondisinya bernilai `true` dan kemudian keluar dari seluruh struktur `if-else if-else`.</p>
            <p>Sintaks dasar:</p>
            <pre><code class="language-cpp">
if (kondisi1) {
    // Kode jika kondisi1 benar
} else if (kondisi2) {
    // Kode jika kondisi1 salah TAPI kondisi2 benar
} else if (kondisi3) {
    // Kode jika kondisi1 dan kondisi2 salah TAPI kondisi3 benar
} else {
    // Kode jika semua kondisi di atas salah
}
            </code></pre>
            <p>Contoh:</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

int main() {
    int nilai = 85;
    if (nilai >= 90) {
        cout << "Grade: A" << endl;
    } else if (nilai >= 80) {
        cout << "Grade: B" << endl;
    } else if (nilai >= 70) {
        cout << "Grade: C" << endl;
    } else {
        cout << "Grade: D" << endl;
    }
    return 0;
}
            </code></pre>

            <div class="fun-fact">
                💡 Fun Fact: Anda dapat menumpuk (nesting) pernyataan `if-else` di dalam `if-else` lainnya untuk menangani kondisi yang lebih kompleks!
            </div>

            <h3>E. Struktur Kontrol `switch`</h3>
            <p>Pernyataan `switch` adalah alternatif untuk struktur `if-else if-else` ketika Anda membandingkan satu ekspresi (biasanya variabel integer atau karakter) dengan beberapa nilai konstan yang berbeda. Ini sering kali lebih mudah dibaca dan lebih efisien untuk banyak kasus.</p>
            <p>Sintaks dasar:</p>
            <pre><code class="language-cpp">
switch (ekspresi) {
    case nilai1:
        // Kode jika ekspresi sama dengan nilai1
        break; // Penting untuk keluar dari switch
    case nilai2:
        // Kode jika ekspresi sama dengan nilai2
        break;
    default:
        // Kode jika ekspresi tidak cocok dengan kasus mana pun
        // break; // Tidak wajib di default jika itu adalah kasus terakhir
}
            </code></pre>
            <ul>
                <li>`ekspresi`: Variabel yang nilainya akan dibandingkan.</li>
                <li>`case nilaiX`: Menentukan nilai konstan yang akan dicocokkan dengan `ekspresi`.</li>
                <li>`break;`: Sangat penting! Ini menghentikan eksekusi di dalam blok `switch` setelah kasus yang cocok ditemukan. Tanpa `break`, program akan melanjutkan ke kasus berikutnya (`fall-through`).</li>
                <li>`default:`: Opsional, akan dieksekusi jika tidak ada `case` yang cocok.</li>
            </ul>
            <p>Contoh:</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

int main() {
    char grade = 'B';

    switch (grade) {
        case 'A':
            cout << "Sangat Baik!" << endl;
            break;
        case 'B':
            cout << "Baik!" << endl;
            break;
        case 'C':
            cout << "Cukup!" << endl;
            break;
        case 'D':
            cout << "Kurang!" << endl;
            break;
        default:
            cout << "Grade tidak valid." << endl;
            break;
    }
    return 0;
}
            </code></pre>

        </section>

        <div class="tombol-aksi">
            <a href="{{ route('materi.2.3') }}" class="btn-kuning">Materi Sebelumnya</a>
            <a href="{{ route('materi.2.5') }}" class="btn-kuning">Materi Selanjutnya</a>
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