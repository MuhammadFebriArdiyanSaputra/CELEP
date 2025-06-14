<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi C++ - Level 5</title>
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
            <h2>Level 5 – Pembelajaran OOP</h2>
            <p>Materi: Kelas dan Objek</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4>
            <ul>
                <li>Memahami Konsep Dasar OOP: Mengerti mengapa Pemrograman Berorientasi Objek (OOP) penting dan bagaimana ia mengorganisir kode.</li>
                <li>Mendefinisikan Kelas: Mampu membuat struktur kelas yang merepresentasikan entitas dunia nyata, termasuk atribut (data) dan perilaku (fungsi).</li>
                <li>Membuat Objek: Mampu membuat instance (objek) dari sebuah kelas dan menggunakannya dalam program.</li>
                <li>Memahami Hubungan Kelas dan Objek: Menjelaskan perbedaan antara kelas (cetak biru) dan objek (realisasi).</li>
                <li>Mengakses Anggota Kelas: Menggunakan operator titik (.) atau operator panah (->) untuk mengakses atribut dan metode objek.</li>
                <li>Mengimplementasikan Konsep Dasar OOP: Menerapkan kelas dan objek dalam program C++ sederhana.</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/-hjM06S5g10?si=gtOMkR1AbdbIr9-d" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <section>
            <h3>A. Pengertian Pemrograman Berorientasi Objek (OOP)</h3>
            <ul>
                <p>Pemrograman Berorientasi Objek (OOP) adalah paradigma pemrograman yang mengatur desain perangkat lunak di sekitar objek dan kelas. Paradigma ini fokus pada data dan fungsi yang beroperasi pada data tersebut sebagai satu kesatuan, berbeda dengan pemrograman prosedural yang fokus pada fungsi atau logika. Tujuan utamanya adalah untuk meningkatkan fleksibilitas, modularitas, dan reusabilitas kode.</p>
                <br>
                <li>
                    Kelas adalah sebuah cetak biru (blueprint) atau template untuk membuat objek. Ia mendefinisikan struktur (data/atribut) dan perilaku (fungsi/metode) yang akan dimiliki oleh objek-objek yang dibuat darinya.
                </li>
                <li>
                    Objek adalah sebuah instance (realisasi) dari sebuah kelas. Objek adalah entitas nyata yang memiliki data (atribut) dan dapat melakukan tindakan (metode) sesuai dengan definisi kelasnya.
                </li>
            </ul>

            <div class="fun-fact">
                💡 Fun Fact: Encapsulation (Pembungkus): Konsep penting dalam OOP adalah encapsulation, di mana data (atribut) dan metode yang beroperasi pada data tersebut "dibungkus" bersama dalam satu unit (kelas).
            </div>

            <h3>B. Hubungan</h3>
            <ul>
                <li>Kelas adalah konsep abstrak yang mendefinisikan jenis objek. Sedangkan, Objek adalah implementasi konkret dari kelas.</li>
                <li>Satu kelas dapat digunakan untuk membuat banyak objek, dan setiap objek akan memiliki salinan sendiri dari atribut data kelas tersebut, tetapi berbagi metode yang sama.</li>
            </ul>
        </section>

        <div class="tombol-aksi">
            <a href="{{ route('welcome') }}" class="btn-kuning">Kembali</a>
            <a href="{{ route('materi.5.2') }}" class="btn-kuning">Materi Selanjutnya</a>
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