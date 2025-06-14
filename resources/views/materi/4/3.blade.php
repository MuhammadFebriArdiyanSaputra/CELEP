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
            <p>Materi: file Handling (ofstream)</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4><br>
            <ul>
                <li>Mengenal fstream: Memahami peran library fstream dalam pemrosesan file di C++ untuk input dan output data.</li>
                <li>Mengenali Alokasi Memori: Memahami bagaimana memori dialokasikan untuk struct (setiap anggota punya memori sendiri) dan union (semua anggota berbagi memori yang sama).</li>
                <li>Menggunakan ofstream: Menguasai penggunaan ofstream untuk menulis (menyimpan) data ke dalam file teks.</li>
                <li>Melakukan Operasi Dasar File: Mampu mendeklarasikan objek ofstream, membuka file, dan menuliskan data ke dalamnya dari program C++.</li>
                <li>Memproses Input Pengguna: Mengambil input berupa kalimat dari pengguna dan menyimpannya ke dalam file.</li>
                <li>Membuka/Mencetak File Otomatis: Mempraktikkan cara membuka atau bahkan mencetak file teks yang telah dibuat langsung dari program C++.</li>
                <li>Memahami Penimpaan File: Mengetahui bahwa menulis ke file dengan nama yang sama akan menimpa (mengganti) isi lama dengan yang baru.</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/UaYy5PRVE5g?si=KjBYdrvHC5ABr6yO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/UaYy5PRVE5g?si=KjBYdrvHC5ABr6yO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>


        <section>
            <h3>Apa itu ofstream?</h3>
            <ul>
                <p>
                ofstream adalah singkatan dari Output File Stream (aliran file keluaran).
                Dalam C++, ofstream adalah sebuah kelas yang merupakan bagian dari *library* `<fstream>`. Fungsinya adalah untuk menulis data dari program C++ ke dalam sebuah file (misalnya, file teks) yang ada di penyimpanan komputer.
                Singkatnya, ofstream adalah alat yang kita gunakan di C++ untuk menyimpan informasi ke dalam file, mirip dengan bagaimana kita menggunakan `cout` untuk menampilkan informasi ke layar konsol.
                </p>
            </ul>
            <br>
            <h3>Proses Penulisan Data ke File</h3>
            <ul>
                <li>Deklarasi Objek ofstream: <br>Anda perlu membuat objek dari kelas ofstream, contohnya: ofstream namaObjekFile;.</li>
                <li>Membuka File: <br>Gunakan fungsi open() untuk membuka file. Sintaksnya: namaObjekFile.open("nama_file_yang_dituju.txt");. Jika file dengan nama tersebut belum ada, C++ akan otomatis membuatnya.</li>
                <li>Menulis Data: <br>Setelah file berhasil dibuka, Anda dapat menulis data ke dalamnya menggunakan operator <<, sama seperti saat menggunakan cout. Contoh: namaObjekFile << "Ini adalah teks yang akan ditulis ke file.";.</li>
            </ul>

            <div class="fun-fact">
                💡 Fun Fact: cout adalah objek dari kelas ostream yang secara default sudah terhubung untuk menampilkan output ke konsol atau layar monitor.
            </div>

            <h3>Perilaku Penimpaan (Overwrite) File</h3>
            <ul>
                Penting untuk diingat bahwa jika program dijalankan kembali dan menulis ke file dengan nama yang sama, konten lama dalam file tersebut akan ditimpa (di-overwrite) dengan konten yang baru.
            </ul>
        </section>

        <div class="tombol-aksi">
            <a href="{{ route('materi.4.2') }}" class="btn-kuning">Materi Sebelumnya</a>
            <a href="{{ route('materi.4.4') }}" class="btn-kuning">Materi Selanjutnya</a>
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