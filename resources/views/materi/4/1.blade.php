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
            <p>Materi: Pointer dasar</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4>
            <ul>
                <li>Memahami konsep dasar pointer dalam pemrograman C++.</li>
                <li>Mengenal dua operator utama yang terkait dengan pointer: operator reference dan dereference.</li>
                <li>Mengimplementasikan pointer untuk mengetahui alamat memori sebuah variabel.</li>
                <li>Mengimplementasikan pointer untuk mengakses nilai dari sebuah variabel melalui alamat memorinya.</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/BU6BR1pqBIE?si=5jpyK_Mc1KNl4j1p" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <section>
            <h3>A. Pengertian Pointer</h3>
            <ul>
                <p>Pointer adalah penunjuk yang berfungsi untuk menunjukkan alamat sebuah variabel di memori. Ini berarti, jika Anda memiliki sebuah variabel (misalnya, variabel a yang menyimpan nilai tertentu), pointer dapat digunakan untuk mengetahui lokasi persis di mana variabel a tersebut disimpan dalam memori komputer. Dengan begitu, pointer memungkinkan kita untuk berinteraksi langsung dengan lokasi memori suatu data.</p>
                <br>
            </ul>
            <h3>B. Operator Yang Ada</h3>
            <table>
                <thead>
                    <tr>
                        <th>Operator</th>
                        <th>Penjelasan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dereference (*)</td>
                        <td>
                            <li>Digunakan untuk menyimpan alamat dari variabel di memori.  </li>
                            <li>Variabel yang dideklarasikan dengan * tidak bisa diisi dengan nilai biasa, melainkan alamat memori.</li>
                            <li>Contoh: int *b = &a; berarti pointer b menyimpan alamat dari a.</li>
                        </td>
                    </tr>
                    <tr>
                        <td>Address-of (&)/td>
                        <td>
                            <li>Digunakan untuk mengetahui alamat dari sebuah variabel.</li>
                            <li>Contoh: cout << &a; akan menampilkan alamat memori dari a.</li>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h3>C. Alamat Memori Variabel</h3>
            <ul>
                <li>Setiap variabel memiliki alamat unik di memori, meskipun belum memiliki nilai.</li>
                <li>Satu alamat memori tidak bisa diisi oleh dua variabel yang berbeda.</li>
                <li>Alamat memori ditampilkan dalam format heksadesimal (contoh: 0x28FF8C).</li>
            </ul>

            <div class="fun-fact">
                💡 Fun Fact: Pointer Penting di Game & OS karena digunakan secara ekstensif di game engine dan sistem operasi untuk performa dan manajemen sumber daya!
            </div>

            <h3>D. Implementasi Pointer</h3>
            <ul>
                <li>Variabel pointer (*) digunakan untuk menyimpan alamat variabel lain (contoh: int *c = &a;).</li>
                <li>Untuk mengakses nilai yang tersimpan di alamat yang ditunjuk oleh pointer, gunakan kembali operator dereference (*).</li>
                <li>Contoh: int d = *c; berarti d akan berisi nilai yang ada di alamat yang disimpan oleh pointer c (yaitu nilai dari variabel a).</li>
            </ul>
        </section>

        <div class="tombol-aksi">
            <a href="{{ route('welcome') }}" class="btn-kuning">Kembali</a>
            <a href="{{ route('materi.4.2') }}" class="btn-kuning">Materi Selanjutnya</a>
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