<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi C++ - Level 1</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        pre {
            background-color: #0f172a;
            color: #f1f5f9;
            padding: 16px;
            border-radius: 8px;
            overflow-x: auto;
        }
        ul {
            line-height: 1.8;
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
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

    <!-- KONTEN UTAMA -->
    <div class="container">
        <header class="judul">
            <h2>Level 1 – Pengenalan Dasar</h2>
            <p>Menulis dan Menjalankan Program Pertama</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4>
            <ul>
                <li>Menulis program C++ sederhana dari awal</li>
                <li>Memahami urutan penulisan dan eksekusi kode</li>
                <li>Menjalankan program C++ menggunakan IDE dan compiler</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/v9X2Y_w3S5g?si=3KDXRplmbm3rBY5n" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <!-- MATERI -->
        <section class="materi-content">
            <h3 style="color: #FFD700;">Program Pertama: "Kalkulator Penjumlahan Dua Bilangan!"</h3>
            <p>Program ini akan:</p>
            <ul>
                <li>Meminta pengguna memasukkan dua angka</li>
                <li>Menjumlahkan angka tersebut</li>
                <li>Menampilkan hasilnya</li>
            </ul>

            <pre>
#include &lt;iostream&gt;
using namespace std;

int main()
{
    int angka1, angka2, hasil;

    //Input dari pengguna
    cout &lt;&lt; "Masukkan angka pertama: ";
    cin &gt;&gt; angka1;

    cout &lt;&lt; "Masukkan angka kedua: ";
    cin &gt;&gt; angka2;

    //Proses penjumlahan
    hasil = angka1 + angka2;

    //Output hasil
    cout &lt;&lt; "Hasil penjumlahan: " &lt;&lt; hasil &lt;&lt; endl;

    return 0;
}
            </pre>

            <h4 style="color: #22c55e;">Penjelasan Singkat</h4>
            <ul>
                <li><strong>int angka1, angka2, hasil;</strong> → Mendeklarasikan tiga variabel bertipe integer</li>
                <li><strong>cin &gt;&gt; angka1;</strong> → Mengambil input dari pengguna</li>
                <li><strong>hasil = angka1 + angka2;</strong> → Menghitung total</li>
                <li><strong>cout &lt;&lt; ...</strong> → Mencetak hasil ke layar</li>
            </ul>
        </section>

        <div class="tombol-aksi">
            <a href="{{ route('welcome') }}" class="btn-kuning">Kembali</a>
            <a href="{{ route('materi.1.latihan') }}" class="btn-kuning">Materi Selanjutnya</a>
        </div>
    </div>

    <!-- FOOTER -->
    <footer id="kontak" class="footer">
        <strong>Kontak Kami</strong><br>
        Email: <a href="mailto:support@celep.com">support@celep.com</a><br>
        Telepon: +62 812-3456-7890
    </footer>

    <!-- Script for toggling navbar on mobile -->
    <script>
        function toggleNavbar() {
            const navbar = document.getElementById("navbarMenu");
            navbar.classList.toggle("show");
        }
    </script>

</body>
</html>
