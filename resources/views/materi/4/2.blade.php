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
            <p>Materi: Struct & Union</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4><br>
            <ul>
                <li>Memahami Konsep Dasar struct dan union: Mengerti definisi, fungsi, serta perbedaan fundamental antara struct dan union dalam C++.</li>
                <li>Mengenali Alokasi Memori: Memahami bagaimana memori dialokasikan untuk struct (setiap anggota punya memori sendiri) dan union (semua anggota berbagi memori yang sama).</li>
                <li>Mengidentifikasi Kasus Penggunaan: Menentukan kapan menggunakan struct (saat semua data relevan bersamaan) dan kapan menggunakan union (untuk menghemat memori ketika hanya satu data yang aktif pada satu waktu).</li>
                <li>Melakukan Akses Anggota: Mengakses anggota struct dan union menggunakan operator titik (.).</li>
                <li>Mengimplementasikan dalam Kode: Mampu mendeklarasikan dan menggunakan struct serta union dalam program C++ Anda untuk mengelompokkan data secara efektif dan efisien.</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/ELCI_U4OF5w?si=51ibtJhAPIgWn7MO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/CymbNTkakQg?si=wfEC7llodnlxANEk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <section>
            <h3>A. Pengertian Struct</h3>
            <ul>
                <p>
                Mengelompokkan variabel dengan tipe berbeda di memori terpisah dan berurutan. Ukuran totalnya adalah jumlah ukuran semua anggotanya.
                </p>
            <br>
            </ul>
            <h3>B. Pengertian Union</h3>
            <ul>
                <p>
                Mengelompokkan variabel dengan tipe berbeda namun semua anggota berbagi lokasi memori yang sama. Ukurannya ditentukan oleh anggota terbesarnya. Hanya satu anggota yang bisa aktif/valid pada satu waktu.
                </p>
                <br>
            </ul>
            <h3>C. Perbedaan Utama</h3>
            <table>
                <thead>
                    <tr>
                        <th>Fitur</th>
                        <th>Struct</th>
                        <th>Union</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Alokasi Memori</td>
                        <td>
                            <p>
                                Setiap anggota memiliki memori sendiri yang unik.
                            </p>
                        </td>
                        <td>
                            <p>
                                Semua anggota berbagi lokasi memori yang sama.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>ukuran</td>
                        <td>
                            Jumlah ukuran semua anggota (+ padding).
                        </td>
                        <td>
                            Ukuran anggota terbesar.
                        </td>
                    </tr>
                    <tr>
                        <td>Penggunakan Data</td>
                        <td>
                            Semua anggota dapat diakses secara bersamaan.
                        </td>
                        <td>
                            Hanya satu anggota yang valid pada satu waktu.
                        </td>
                    </tr>
                    <tr>
                        <td>Tujuan</td>
                        <td>
                            Mengelompokkan data terkait.
                        </td>
                        <td>
                            Menghemat memori ketika hanya satu data yang aktif.
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="fun-fact">
                💡 Fun Fact: struct di C++ itu "Grup Fleksibel": Hampir sekuat class karena bisa punya metode dan inheritance, bedanya cuma default access-nya public. Sedangkan union itu "Hemat Tempat Ajaib": Anggotanya berbagi lokasi memori yang sama, artinya hanya satu data yang aktif pada satu waktu, sangat efisien untuk menghemat memori.
            </div>

            <h3>Kapan Menggunakan struct vs union?</h3>
            <ul>
                 Gunakan struct ketika Anda memiliki sekelompok data dengan tipe berbeda, dan semua data tersebut relevan serta perlu diakses secara bersamaan. Ini adalah kasus penggunaan yang jauh lebih umum dalam pemrograman.
                <br>
                 Sebaliknya, gunakan union ketika Anda perlu menyimpan data dari beberapa tipe berbeda, tetapi Anda yakin bahwa hanya satu dari tipe data tersebut yang akan aktif atau valid pada satu waktu, dan prioritas Anda adalah menghemat memori. Seringkali, union digabungkan dengan enum atau anggota lain di dalam struct untuk menandakan anggota union mana yang sedang aktif agar penggunaan datanya tidak keliru.
            </ul>
        </section>

        <div class="tombol-aksi">
            <a href="{{ route('materi.4.1') }}" class="btn-kuning">Materi Sebelumnya</a>
            <a href="{{ route('materi.4.3') }}" class="btn-kuning">Materi Selanjutnya</a>
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