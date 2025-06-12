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
            <p>Materi 3: Struktur Program C++</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4>
            <ul>
                <li>Menjelaskan komponen utama program C++</li>
                <li>Menulis program dengan struktur benar</li>
                <li>Memahami alur eksekusi</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/R7Ld2mfaFXU?si=RUEVjd62eJVnChQh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <section class="materi-content">
            <h2>A. Apa Itu Struktur Program C++</h2>
            <p>Struktur program C++ merujuk pada susunan atau format dasar dari kode program yang ditulis. Seperti membangun rumah, kita memerlukan kerangka dasar yang menjadi acuan utama dalam penulisan kode. Semua program C++ – dari yang paling sederhana hingga kompleks – dimulai dengan struktur yang sama.</p>

            <h2>B. Komponen Utama Struktur Program C++</h2>
            <p>Mari kita lihat contoh sederhana terlebih dahulu:</p>

            <div class="code-block">
                <div><span class="preprocessor">#include</span> <span class="string">&lt;iostream&gt;</span></div>
                <div><span class="keyword">using namespace</span> std;</div>
                <br>
                <div><span class="keyword">int</span> main() {</div>
                <div>&nbsp;&nbsp;<span class="keyword">cout</span> &lt;&lt; <span class="string">"Hello World!"</span> &lt;&lt; endl;</div>
                <div>&nbsp;&nbsp;<span class="keyword">return</span> 0;</div>
                <div>}</div>
            </div>

            <h3>Berikut penjelasan komponennya:</h3>
            <ol>
                <li>
                    <strong>Direktif Preprocessor (<code>#include</code>)</strong><br>
                    Memberitahu compiler untuk menyisipkan isi file header sebelum proses kompilasi dimulai.<br>
                    <code>iostream</code> adalah file header standar yang menyediakan fungsi input/output.
                    <div class="code-block"><span class="preprocessor">#include</span> <span class="string">&lt;iostream&gt;</span></div>
                </li>

                <li>
                    <strong>Namespace</strong><br>
                    Menghindari penulisan nama namespace secara berulang. Contoh:
                    <div class="code-block"><span class="keyword">std::cout</span> &lt;&lt; <span class="string">"Hello"</span>;</div>
                </li>

                <li>
                    <strong>Fungsi <code>main()</code></strong><br>
                    Titik masuk utama program.
                    <div class="code-block"><span class="keyword">int</span> main() {<br>&nbsp;&nbsp;// kode program<br>}</div>
                </li>

                <li>
                    <strong>Statement</strong><br>
                    Merupakan perintah dalam program. Harus diakhiri dengan titik koma.
                    <div class="code-block"><span class="keyword">cout</span> &lt;&lt; <span class="string">"Halo Dunia!"</span> &lt;&lt; <span class="keyword">endl</span>;</div>
                </li>

                <li>
                    <strong>Return Statement</strong><br>
                    Mengembalikan nilai ke sistem operasi.
                    <div class="code-block"><span class="keyword">return</span> 0;</div>
                </li>
            </ol>

            <h2>C. Alur Eksekusi Program</h2>
            <p>Setelah struktur program ditulis, program C++ akan dieksekusi melalui alur berikut:</p>
            <ol>
                <li><strong>Kompilasi dimulai dari atas</strong><br>
                    Compiler membaca dan memproses kode dari baris pertama.
                </li>
                <li><strong>Fungsi <code>main()</code> ditemukan → dijalankan</strong><br>
                    Program akan mencari fungsi utama <code>main()</code> sebagai titik masuk.
                </li>
                <li><strong>Statement di dalam <code>main()</code> dieksekusi secara berurutan</strong><br>
                    Setiap instruksi dijalankan dari atas ke bawah secara sistematis.
                </li>
                <li><strong>Setelah <code>return</code> dipanggil, program berakhir</strong><br>
                    Menandakan eksekusi selesai dan kontrol kembali ke sistem operasi.
                </li>
            </ol>

            <h2>D. Aturan Dasar Penulisan</h2>
            <p>Agar program dapat dikompilasi dan dijalankan dengan benar, perhatikan beberapa aturan dasar berikut:</p>
            <ul>
                <li>Setiap <strong>statement</strong> diakhiri dengan titik koma (<code>;</code>).</li>
                <li><strong>Kurung kurawal</strong> <code>{ }</code> digunakan untuk membungkus blok kode.</li>
                <li><strong>Komentar</strong> dapat ditambahkan sebagai catatan program:
                    <ul>
                        <li><code>// komentar satu baris</code></li>
                        <li><code>/* komentar<br>   lebih dari satu baris */</code></li>
                    </ul>
                </li>
            </ul>
        </section>

        <div class="tombol-aksi">
            <a href="{{ route('welcome') }}" class="btn-kuning">Kembali</a>
            <a href="{{ route('materi.1.4') }}" class="btn-kuning">Materi Selanjutnya</a>
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
