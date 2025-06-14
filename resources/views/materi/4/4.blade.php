<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi C++ - Level 4</title>
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
            <h2>Level 4 – Konsep Lanjut</h2>
            <p>Materi: Memori Dinamis</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4><br>
            <ul>
                <li>Memahami Konsep Memori Dinamis: Mengerti perbedaan antara alokasi memori statis dan dinamis.</li>
                <li>Menggunakan Operator new: Mampu mengalokasikan memori secara dinamis untuk variabel tunggal atau array pada saat program berjalan (runtime).</li>
                <li>Menggunakan Operator delete: Mampu membebaskan memori yang telah dialokasikan secara dinamis untuk mencegah memory leak.</li>
                <li>Mengidentifikasi Kebutuhan Memori Dinamis: Menentukan kapan perlu menggunakan alokasi memori dinamis (misalnya, ketika ukuran data tidak diketahui saat kompilasi).</li>
                <li>Menerapkan Praktik Terbaik: Memahami pentingnya pasangan new dan delete serta cara menghindari masalah memori.</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/vkfe-JyxaPo?si=KuuVHvDDEMMCuYXW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <section>
            <h3>A. Pengertian Memori Dinamis</h3>
            <ul>
                <p>
                Memori dinamis adalah memori yang dialokasikan atau dibebaskan oleh sistem operasi saat program sedang berjalan (runtime). Berbeda dengan memori statis (yang dialokasikan saat kompilasi dan ukurannya tetap), memori dinamis memungkinkan program memesan dan melepaskan memori sesuai kebutuhan selama eksekusi. Memori ini dialokasikan di area yang disebut heap.
                </p>
                <br>
            </ul>
            
            <h3>B. Operator</h3>
            <li>Fungsi: Operator new digunakan untuk mengalokasikan memori secara dinamis dari heap</li>
            <table>
                <thead>
                    <tr>
                        <th>Penggunaan</th>
                        <th>Contoh</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>variabel tunggal: tipe_data* pointer = new tipe_data;.</td>
                        <td>
                            <p>
                                int* ptrAngka = new int;
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>array dinamis: int* arrAngka = new int[10];</td>
                        <td>
                            int* arrAngka = new int[10];
                        </td>
                    </tr>
                </tbody>
            </table>
            <li>
                Tindakan 'New": Saat dijalankan, new akan mengalokasikan memori di heap, menginisialisasi objek jika perlu (memanggil konstruktor untuk objek kelas), dan mengembalikan alamat memori yang baru dialokasikan tersebut ke pointer.
            </li>
            
            <div class="fun-fact">
                💡 Fun Fact: Penyebab Memory Leak: Salah satu alasan terbesar kenapa new dan delete harus selalu berpasangan adalah untuk menghindari memory leak.
            </div>
            <h3>C. Perbandingan dengan Alokasi Memori Otomatis/Statis</h3>
            <ul>
                <li>
                Memori Otomatis (Stack): Dialokasikan secara otomatis saat variabel lokal atau global dideklarasikan dan secara otomatis dibebaskan saat variabel keluar dari lingkup (scope). Ukurannya tidak bisa diubah saat runtime.
                </li>
                <li>
                Memori Dinamis (Heap): Dialokasikan dan dibebaskan secara manual oleh programmer selama eksekusi program menggunakan new dan delete. Ini memberikan fleksibilitas karena ukuran dapat disesuaikan saat runtime.
                </li>
            </ul>

        </section>

        <div class="tombol-aksi">
            <a href="{{ route('materi.4.3') }}" class="btn-kuning">Materi Sebelumnya</a>
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