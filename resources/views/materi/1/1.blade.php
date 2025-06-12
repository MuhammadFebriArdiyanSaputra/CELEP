<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi C++ - Level 1</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>

    <!-- NAVBAR -->
    <div class="navbar">
        <div class="navbar-left">
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('img/Celep1 1.png') }}" class="logo" alt="Logo">
            </a>
        </div>

        <!-- Hamburger -->
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
            <p>Materi: Apa itu C++?</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4>
            <ul>
                <li>Menyebutkan tools utama C++</li>
                <li>Menginstal dan mengatur IDE & compiler</li>
                <li>Menjalankan program C++ pertama</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/WtBF_-pLrjE?si=pCByvT09TQNoSK05" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <section>
            <h3>A. Pengantar C++</h3>
            <p>C++ adalah bahasa pemrograman multi-paradigma yang dikembangkan oleh Bjarne Stroustrup pada awal 1980-an. Bahasa ini merupakan pengembangan dari bahasa C dengan penambahan fitur-fitur pemrograman berorientasi objek dan kemampuan tingkat rendah yang kuat. C++ banyak digunakan untuk pengembangan perangkat lunak sistem, aplikasi desktop, game, dan embedded systems.</p>

            <h3>B. Sejarah Singkat</h3>
            <table>
                <thead>
                    <tr>
                        <th>Tahun</th>
                        <th>Peristiwa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1979</td>
                        <td>Bjarne Stroustrup memulai pengembangan “C with Classes”.</td>
                    </tr>
                    <tr>
                        <td>1983</td>
                        <td>Bahasa tersebut dinamai ulang menjadi C++.</td>
                    </tr>
                    <tr>
                        <td>1990</td>
                        <td>Standar pertama C++ mulai dikembangkan.</td>
                    </tr>
                    <tr>
                        <td>1998</td>
                        <td>ISO C++ Standard pertama mulai diterbitkan.</td>
                    </tr>
                    <tr>
                        <td>2020</td>
                        <td>Standar C++20 dengan banyak fitur baru dirilis.</td>
                    </tr>
                </tbody>
            </table>

            <h3>Karakteristik Utama</h3>
            <ul>
                <li>MMulti-paradigma: Mendukung pemrograman prosedural, berorientasi objek, dan generik.</li>
                <li>Performa tinggi: Mendekati bahasa mesin, cocok untuk aplikasi yang membutuhkan kecepatan.</li>
                <li>Kontrol memori: Pengelolaan memori manual dengan pointer dan dynamic allocation.</li>
                <li>Portabilitas: Dapat dijalankan di berbagai platform dan sistem operasi.</li>
            </ul>

            <div class="fun-fact">
                💡 Fun Fact: C++ sering digunakan dalam pengembangan game, simulasi, dan sistem embedded!
            </div>

            <h3>D. C++ Digunakan Di Mana?</h3>
            <ul>
                <li>Pengembangan sistem operasi dan driver perangkat keras.</li>
                <li>Game development dan engine game populer.</li>
                <li>Aplikasi desktop dan perangkat lunak produktivitas.</li>
                <li>Embedded systems dan perangkat IoT.</li>
                <li>Perangkat lunak keuangan dan simulasi ilmiah.</li>
            </ul>

            <h3>E. Kenapa Belajar C++?</h3>
            <ul>
                <li>Meningkatkan pemahaman tentang konsep dasar pemrograman dan komputer.</li>
                <li>Membuka peluang kerja di bidang pengembangan perangkat lunak dan sistem.</li>
                <li>Memudahkan belajar bahasa pemrograman lain yang berorientasi objek.</li>
                <li>Mengasah kemampuan problem solving dan logika.</li>
            </ul>
        </section>

        <div class="tombol-aksi">
            <a href="{{ route('welcome') }}" class="btn-kuning">Kembali</a>
            <a href="{{ route('materi.1.2') }}" class="btn-kuning">Materi Selanjutnya</a>
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
