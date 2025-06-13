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
            <h2>Level 2 – Operator Dasar C++</h2>
            <p>Materi: Memanipulasi Data dengan Operator</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4>
            <ul>
                <li>Memahami berbagai jenis **operator** dasar dalam C++.</li>
                <li>Menggunakan operator **aritmatika** untuk melakukan perhitungan.</li>
                <li>Memahami dan menggunakan operator **penugasan**.</li>
                <li>Menggunakan operator **perbandingan** untuk membuat keputusan.</li>
                <li>Mengenal operator **logika** untuk menggabungkan kondisi.</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/NAFebwdmMes?si=zkzKvyC4_PlDjxxY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <section>
            <h3>A. Apa Itu Operator?</h3>
            <p>Dalam C++, **operator** adalah simbol khusus yang memberitahu *compiler* untuk melakukan operasi matematika atau logika tertentu pada satu atau lebih *operand* (nilai atau variabel). Operator memungkinkan kita untuk memanipulasi data, melakukan perhitungan, membuat perbandingan, dan mengontrol alur program.</p>

            <h3><br>B. Jenis-Jenis Operator Dasar</h3>
            <p>C++ menyediakan berbagai jenis operator, yang dapat dikelompokkan sebagai berikut:</p>

            <h4>1. Operator Aritmatika</h4>
            <p>Digunakan untuk melakukan operasi matematika dasar.</p>
            <table>
                <thead>
                    <tr>
                        <th>Operator</th>
                        <th>Deskripsi</th>
                        <th>Contoh</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>`+`</td>
                        <td>Penjumlahan</td>
                        <td>`int hasil = 5 + 3;`</td>
                    </tr>
                    <tr>
                        <td>`-`</td>
                        <td>Pengurangan</td>
                        <td>`int selisih = 10 - 4;`</td>
                    </tr>
                    <tr>
                        <td>`*`</td>
                        <td>Perkalian</td>
                        <td>`int produk = 6 * 7;`</td>
                    </tr>
                    <tr>
                        <td>`/`</td>
                        <td>Pembagian</td>
                        <td>`double bagi = 20.0 / 5.0;`</td>
                    </tr>
                    <tr>
                        <td>`%`</td>
                        <td>Modulo (sisa pembagian)</td>
                        <td>`int sisa = 17 % 5;`</td>
                    </tr>
                    <tr>
                        <td>`++`</td>
                        <td>Increment (menambah 1)</td>
                        <td>`int x = 5; x++;`</td>
                    </tr>
                     <tr>
                        <td>`--`</td>
                        <td>Decrement (mengurangi 1)</td>
                        <td>`int y = 10; y--;`</td>
                    </tr>
                </tbody>
            </table>
            <p>Contoh:</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

int main() {
    int a = 10, b = 3;
    cout << "a + b = " << (a + b) << endl;
    cout << "a - b = " << (a - b) << endl;
    cout << "a * b = " << (a * b) << endl;
    cout << "a / b = " << (a / b) << endl;
    cout << "a % b = " << (a % b) << endl;
    return 0;
}
            </code></pre>

            <h4>2. Operator Penugasan</h4>
            <p>Digunakan untuk memberikan nilai ke variabel.</p>
             <table>
                <thead>
                    <tr>
                        <th>Operator</th>
                        <th>Deskripsi</th>
                        <th>Contoh</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>`=`</td>
                        <td>Penugasan sederhana</td>
                        <td>`int x = 10;`</td>
                    </tr>
                    <tr>
                        <td>`+=`</td>
                        <td>Penambahan dan penugasan</td>
                        <td>`x += 5; // x = x + 5`</td>
                    </tr>
                    <tr>
                        <td>`-=`</td>
                         <td>Pengurangan dan penugasan</td>
                        <td>`x -= 3; // x = x - 3`</td>
                    </tr>
                    <tr>
                        <td>`*=`</td>
                        <td>Perkalian dan penugasan</td>
                        <td>`x *= 2; // x = x * 2`</td>
                    </tr>
                    <tr>
                        <td>`/=`</td>
                        <td>Pembagian dan penugasan</td>
                        <td>`x /= 4; // x = x / 4`</td>
                    </tr>
                    <tr>
                        <td>`%=`</td>
                        <td>Modulo dan penugasan</td>
                        <td>`x %= 3; // x = x % 3`</td>
                    </tr>
                </tbody>
            </table>
            <p>Contoh:</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

int main() {
    int x = 5;
    x += 3; // x sekarang 8
    cout << "x = " << x << endl;
    return 0;
}
            </code></pre>

            <h4>3. Operator Perbandingan</h4>
            <p>Digunakan untuk membandingkan dua nilai.</p>
            <table>
                <thead>
                    <tr>
                        <th>Operator</th>
                        <th>Deskripsi</th>
                        <th>Contoh</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>`==`</td>
                        <td>Sama dengan</td>
                        <td>`bool sama = (5 == 5);`</td>
                    </tr>
                    <tr>
                        <td>`!=`</td>
                        <td>Tidak sama dengan</td>
                        <td>`bool beda = (10 != 5);`</td>
                    </tr>
                    <tr>
                        <td>`>`</td>
                        <td>Lebih besar dari</td>
                        <td>`bool besar = (8 > 3);`</td>
                    </tr>
                    <tr>
                        <td>`<`</td>
                        <td>Kurang dari</td>
                        <td>`bool kecil = (2 < 7);`</td>
                    </tr>
                    <tr>
                        <td>`>=`</td>
                        <td>Lebih besar atau sama dengan</td>
                        <td>`bool besarSama = (5 >= 5);`</td>
                    </tr>
                    <tr>
                         <td>`<=`</td>
                        <td>Kurang dari atau sama dengan</td>
                        <td>`bool kecilSama = (4 <= 6);`</td>
                    </tr>
                </tbody>
            </table>
            <p>Contoh:</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

int main() {
    int a = 5, b = 10;
    cout << "(a == b) adalah " << (a == b) << endl;
    cout << "(a != b) adalah " << (a != b) << endl;
    cout << "(a < b) adalah " << (a < b) << endl;
    return 0;
}
            </code></pre>

            <h4>4. Operator Logika</h4>
            <p>Digunakan untuk menggabungkan atau membalikkan ekspresi logika.</p>
             <table>
                <thead>
                    <tr>
                        <th>Operator</th>
                        <th>Deskripsi</th>
                        <th>Contoh</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>`&&`</td>
                        <td>AND (dan)</td>
                        <td>`bool dan = (true && false);`</td>
                    </tr>
                    <tr>
                        <td>`||`</td>
                        <td>OR (atau)</td>
                        <td>`bool atau = (true || false);`</td>
                    </tr>
                    <tr>
                        <td>`!`</td>
                        <td>NOT (tidak)</td>
                        <td>`bool tidak = (!true);`</td>
                    </tr>
                </tbody>
            </table>
            <p>Contoh:</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

int main() {
    bool p = true, q = false;
    cout << "(p && q) adalah " << (p && q) << endl;
    cout << "(p || q) adalah " << (p || q) << endl;
    cout << "(!p) adalah " << (!p) << endl;
    return 0;
}
            </code></pre>

            <div class="fun-fact">
                💡 Fun Fact: Operator modulo (`%`) sangat berguna untuk menentukan apakah suatu angka genap atau ganjil!
            </div>
        </section>

        <div class="tombol-aksi">
            <a href="{{ route('materi.2.2') }}" class="btn-kuning">Materi Sebelumnya</a>
            <a href="{{ route('materi.2.4') }}" class="btn-kuning">Materi Selanjutnya</a>
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