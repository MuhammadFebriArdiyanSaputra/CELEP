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
            <p>Materi: Encapsulation dan Access Modifier</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4>
            <ul>
                <li>Memahami Konsep Dasar Encapsulation: Mengerti apa itu encapsulation dan mengapa ia penting dalam OOP.</li>
                <li>Mengenali Peran Access Modifier: Memahami fungsi dan perbedaan antara <code>public</code>, <code>private</code>, dan <code>protected</code>.</li>
                <li>Mengimplementasikan Encapsulation: Mampu menyembunyikan detail implementasi data dan mengeksposnya melalui metode publik (getter/setter).</li>
                <li>Menerapkan Access Modifier: Menggunakan <code>public</code>, <code>private</code>, dan <code>protected</code> dengan tepat pada anggota kelas.</li>
                <li>Meningkatkan Keamanan dan Pemeliharaan Kode: Menyadari bagaimana encapsulation membantu melindungi data dan memudahkan pemeliharaan kode.</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/R89q03lowGc?si=nkGiK72PdEETsizI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <section>

           <h3>A. Pengertian Encapsulation</h3>
            <p>
                Encapsulation (enkapsulasi) adalah salah satu pilar utama Pemrograman Berorientasi Objek (OOP) yang berarti "pembungkus". Konsep ini menggabungkan data (atribut) dan metode (fungsi) yang beroperasi pada data tersebut menjadi satu unit tunggal, yaitu sebuah kelas. Lebih dari sekadar pengelompokan, encapsulation juga melibatkan 
                <b>penyembunyian informasi (information hiding)</b>, di mana detail implementasi internal dari sebuah kelas disembunyikan dari dunia luar. Data hanya bisa diakses atau dimodifikasi melalui metode publik yang disediakan oleh kelas.
            </p>
            <br>
            <h4>Manfaat Encapsulation:</h4>
            <ul>
                <li>
                    <b>Keamanan Data (Data Hiding)</b>: Melindungi data internal objek dari akses atau modifikasi yang tidak sah dari luar kelas.
                </li>
                <li>
                    <b>Modularitas</b>: Membuat kelas menjadi unit yang mandiri, sehingga mudah dipahami, diuji, dan dikelola.
                </li>
                <li>
                    <b>Fleksibilitas dan Pemeliharaan</b>: Perubahan pada implementasi internal kelas tidak akan memengaruhi kode di luar kelas selama antarmuka publiknya tetap sama. Ini memudahkan pemeliharaan dan pengembangan di masa depan.
                </li>
            </ul>
            <br>
            <h3>B. Access Modifier (Penentu Akses)</h3>
            <p>
                Access modifier (penentu akses) adalah kata kunci di C++ yang digunakan untuk mengatur visibilitas atau aksesibilitas anggota (atribut dan metode) sebuah kelas dari luar kelas. Ada tiga jenis utama access modifier:
            </p>
            <ul>
                <li>
                    <b><code>public</code></b>:
                    <p>Anggota yang dideklarasikan sebagai <code>public</code> dapat diakses dari mana saja, baik dari dalam kelas itu sendiri maupun dari luar kelas (melalui objek kelas tersebut). Ini adalah antarmuka kelas dengan dunia luar.</p>
                </li>
                <li>
                    <b><code>private</code></b>:
                    <p>Anggota yang dideklarasikan sebagai <code>private</code> hanya dapat diakses dari dalam kelas itu sendiri. Mereka tidak dapat diakses langsung dari objek di luar kelas. Ini adalah kunci utama untuk mencapai <i>data hiding</i> dalam encapsulation.</p>
                </li>
                <li>
                    <b><code>protected</code></b>:
                    <p>Anggota yang dideklarasikan sebagai <code>protected</code> dapat diakses dari dalam kelas itu sendiri dan oleh kelas-kelas yang mewarisi (turunan) dari kelas tersebut. Mereka tidak dapat diakses langsung dari objek di luar hierarki pewarisan.</p>
                </li>
            </ul>
            <br>
            <div class="fun-fact">
                💡 Fun Fact:
                <ul>
                    <li><b>Encapsulation itu "Kotak Hitam"</b>: Bayangkan perangkat elektronik seperti TV atau *smartphone*. Kamu tahu cara menggunakannya (tombol, layar), tapi kamu tidak perlu tahu sirkuit dan kabel rumit di dalamnya. Itu adalah enkapsulasi! Data internal disembunyikan, dan kamu hanya berinteraksi melalui antarmuka yang disediakan.</li>
                    <li><b>Proteksi Data</b>: Tanpa *access modifier*, semua data akan terbuka untuk dimodifikasi secara langsung dari mana saja, yang sangat berbahaya. Encapsulation, dengan bantuan <code>private</code> dan <code>protected</code>, memastikan data kelas hanya diubah melalui metode yang terkontrol, sehingga integritas data terjaga.</li>
                    <li><b>"Getter" dan "Setter"</b>: Pola umum dalam OOP untuk mengimplementasikan encapsulation adalah dengan menggunakan metode "getter" (untuk mengambil nilai atribut) dan "setter" (untuk mengubah nilai atribut). Ini memberikan kontrol lebih, misalnya Anda bisa menambahkan validasi di dalam setter sebelum mengubah nilai.</li>
                </ul>
            </div>
            <br>
            <h3>C. Contoh Implementasi Encapsulation dan Access Modifier</h3>
            <div class="code-block">
                <pre>
                <span class="preprocessor">#include &lt;iostream&gt; </span>
                <span class="preprocessor">#include &lt;string&gt;</span>

                <span class="keyword">using</span> <span class="keyword">namespace</span> <span class="default">std</span>;

                <span class="keyword">class</span> <span class="type">AkunBank</span> {
                <span class="keyword">private</span>:
                    <span class="type">double</span> <span class="default">saldo</span>; <span class="comment">// Private: Data disembunyikan</span>
                    <span class="type">string</span> <span class="default">namaPemilik</span>;

                <span class="keyword">public</span>:
                    <span class="comment">// Constructor (public agar bisa dibuat objeknya)</span>
                    <span class="type">AkunBank</span>(<span class="type">string</span> <span class="default">nama</span>, <span class="type">double</span> <span class="default">saldoAwal</span>) {
                        <span class="default">namaPemilik</span> = <span class="default">nama</span>;
                        <span class="default">saldo</span> = <span class="default">saldoAwal</span>; <span class="comment">// Inisialisasi saldo dari constructor</span>
                    }

                    <span class="comment">// Public method (setter) untuk menyetor uang</span>
                    <span class="keyword">void</span> <span class="default">setor</span>(<span class="type">double</span> <span class="default">jumlah</span>) {
                        <span class="keyword">if</span> (<span class="default">jumlah</span> > 0) {
                            <span class="default">saldo</span> += <span class="default">jumlah</span>;
                            <span class="default">cout</span> << <span class="string">"Setor "</span> << <span class="default">jumlah</span> << <span class="string">". Saldo baru: "</span> << <span class="default">saldo</span> << <span class="default">endl</span>;
                        } <span class="keyword">else</span> {
                            <span class="default">cout</span> << <span class="string">"Jumlah setor harus positif."</span> << <span class="default">endl</span>;
                        }
                    }

                    <span class="comment">// Public method (getter) untuk melihat saldo</span>
                    <span class="type">double</span> <span class="default">getSaldo</span>() {
                        <span class="keyword">return</span> <span class="default">saldo</span>;
                    }

                    <span class="comment">// Public method (getter) untuk melihat nama pemilik</span>
                    <span class="type">string</span> <span class="default">getNamaPemilik</span>() {
                        <span class="keyword">return</span> <span class="default">namaPemilik</span>;
                    }
                };

                <span class="type">int</span> <span class="default">main</span>() {
                    <span class="type">AkunBank</span> <span class="default">myAkun</span>(<span class="string">"Andi"</span>, 1000.0);

                    <span class="default">cout</span> << <span class="string">"Nama Pemilik: "</span> << <span class="default">myAkun</span>.<span class="default">getNamaPemilik</span>() << <span class="default">endl</span>;
                    <span class="default">cout</span> << <span class="string">"Saldo Awal: "</span> << <span class="default">myAkun</span>.<span class="default">getSaldo</span>() << <span class="default">endl</span>;

                    <span class="default">myAkun</span>.<span class="default">setor</span>(500.0);
                    <span class="default">myAkun</span>.<span class="default">setor</span>(-100.0); <span class="comment">// Contoh percobaan akses tidak valid</span>

                    <span class="comment">// myAkun.saldo = 2000.0; // Ini akan error karena 'saldo' private!</span>

                    <span class="default">cout</span> << <span class="string">"Saldo Akhir: "</span> << <span class="default">myAkun</span>.<span class="default">getSaldo</span>() << <span class="default">endl</span>;

                    <span class="keyword">return</span> 0;
                }</pre>
            </div>

        </section>

        <div class="tombol-aksi">
            <a href="{{ route('materi.5.4') }}" class="btn-kuning">Materi Sebelumnya</a>
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