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
            <p>Materi 2: Tools & Instalasi IDE untuk C++</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4>
            <ul>
                <li>Menjelaskan Sejarah dan Perkembangan C++</li>
                <li>Menyebutkan Karakteristik Utama</li>
                <li>Menyebutkan Posisi C++ dalam Dunia Pemrograman Modern</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/pB6CwgDTK1w?si=AWR22xskYyLnj0_0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <section class="materi-content">
            <h3>A. Tools Yang Dibutuhkan</h3>
            <div class="tools-wrapper">
                <div class="tools-section">
                    <strong>IDE / Text Editor</strong>
                    <ul>
                        <li>Code::Blocks</li>
                        <li>Dev C++</li>
                        <li>VS Code</li>
                    </ul>
                </div>
                <div class="tools-section">
                    <strong>Compiler</strong>
                    <ul>
                        <li>GCC (G++)</li>
                        <li>MinGW</li>
                        <li>TDM-GCC</li>
                    </ul>
                </div>
            </div>

            <h3>B. Rekomendasi IDE Untuk Pemula</h3>
            <div class="ide-box-wrapper">
                <div class="ide-box hijau">
                    <strong>Code::Blocks ✅</strong><br>
                    IDE Yang Mudah Digunakan Dan<br>Sudah Banyak Dipakai Untuk Belajar C++.
                </div>
                <div class="ide-box kuning">
                    <strong>Dev C++</strong><br>
                    Cukup Ringan, Tapi Sudah Deprecated Dan Tidak Lagi Dikembangkan.
                </div>
                <div class="ide-box emas">
                    <strong>VS Code</strong><br>
                    Fleksibel Dan Powerful, Tapi Perlu Setup Manual Untuk C++.
                </div>
            </div>

            <h3>C. Cara Instalasi</h3>
            <div class="install-guide">
                <strong>Code::Blocks (Windows)</strong> &nbsp; <strong>VS Code + MinGW</strong><br>
                <ul>
                    <li>Kunjungi Situs Resmi Code::Blocks Di <a href="http://www.codeblocks.org/downloads" target="_blank">www.codeblocks.org/downloads</a></li>
                    <li>Pilih Installer Yang Sesuai Dengan Windows (Biasanya Yang Include MinGW)</li>
                    <li>Download Dan Jalankan Installer</li>
                    <li>Ikuti Instruksi Instalasi Hingga Selesai</li>
                    <li>Buka Code::Blocks Dan Pastikan Compiler Sudah Terdeteksi</li>
                    <li>Mulai Buat Project C++ Baru Dan Coba Compile Program</li>
                </ul>
            </div>
        </section>


        <div class="tombol-aksi">
            <a href="{{ route('welcome') }}" class="btn-kuning">Kembali</a>
            <a href="{{ route('materi.1.3') }}" class="btn-kuning">Materi Selanjutnya</a>
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
