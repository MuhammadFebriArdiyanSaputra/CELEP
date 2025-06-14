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
            <p>Materi: Polymorphism dan Overloading</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4>
            <ul>
                <li>Memahami Konsep Dasar Polymorphism: Mengerti apa itu polymorphism sebagai salah satu pilar OOP.</li>
                <li>Membedakan Jenis Polymorphism: Mengenali polymorphism saat compile-time (overloading) dan runtime (overriding).</li>
                <li>Mengimplementasikan Fungsi Overloading: Mampu membuat beberapa fungsi dengan nama yang sama namun parameter yang berbeda.</li>
                <li>Mengimplementasikan Operator Overloading: Mampu mendefinisikan ulang perilaku operator untuk tipe data kelas.</li>
                <li>Memahami Fungsi Virtual dan Overriding: Mengerti bagaimana fungsi virtual digunakan untuk mencapai runtime polymorphism.</li>
                <li>Meningkatkan Fleksibilitas Kode: Menyadari bagaimana polymorphism dan overloading meningkatkan fleksibilitas dan reusabilitas kode.</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/mg-GDDIT0ys?si=9PSj5S-rKNTzY9lh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/L_4Jj2a237g?si=dsZo-Fj1Gj0lyf-T" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <section>

            <h3>A. Pengertian Polymorphism</h3>
            <p>
                Polymorphism (polimorfisme) berasal dari bahasa Yunani yang berarti "banyak bentuk". Dalam konteks OOP, polymorphism adalah kemampuan suatu objek untuk mengambil banyak bentuk atau, lebih tepatnya, kemampuan suatu objek untuk merespons panggilan fungsi dengan cara yang berbeda tergantung pada tipe data yang sebenarnya (bukan tipe data deklarasinya). Ini memungkinkan satu antarmuka (nama fungsi) untuk digunakan untuk berbagai implementasi yang berbeda.
            </p>
            <br>
            <h4>Jenis-jenis Polymorphism:</h4>
            <ul>
                <li>
                    <b>Compile-time Polymorphism (Polymorphism Kompilasi/Statis)</b>:
                    <p>Terjadi pada saat kompilasi. Ini dicapai melalui:</p>
                    <ul>
                        <li>
                            <b>Fungsi Overloading (Function Overloading)</b>: Mendefinisikan beberapa fungsi dengan nama yang sama tetapi dengan daftar parameter yang berbeda (jumlah, tipe, atau urutan parameter).
                            <div class="code-block">
                                <pre>
                                <span class="preprocessor">#include &lt;iostream&gt;</span>

                                <span class="keyword">using</span> <span class="keyword">namespace</span> <span class="default">std</span>;

                                <span class="type">int</span> <span class="default">tambah</span>(<span class="type">int</span> <span class="default">a</span>, <span class="type">int</span> <span class="default">b</span>) {
                                    <span class="keyword">return</span> <span class="default">a</span> + <span class="default">b</span>;
                                }

                                <span class="type">double</span> <span class="default">tambah</span>(<span class="type">double</span> <span class="default">a</span>, <span class="type">double</span> <span class="default">b</span>) {
                                    <span class="keyword">return</span> <span class="default">a</span> + <span class="default">b</span>;
                                }

                                <span class="type">int</span> <span class="default">main</span>() {
                                    <span class="default">cout</span> << <span class="string">"Tambah (int): "</span> << <span class="default">tambah</span>(5, 10) << <span class="default">endl</span>;
                                    <span class="default">cout</span> << <span class="string">"Tambah (double): "</span> << <span class="default">tambah</span>(5.5, 10.2) << <span class="default">endl</span>;
                                    <span class="keyword">return</span> 0;
                                }</pre>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <b>Operator Overloading (Operator Overloading)</b>: Mendefinisikan ulang perilaku operator (misal: +, -, *) agar dapat bekerja dengan tipe data kelas yang Anda buat.
                                                            <div class="code-block">
                                <pre>
                                <span class="preprocessor">#include &lt;iostream&gt;</span>

                                <span class="keyword">using</span> <span class="keyword">namespace</span> <span class="default">std</span>;

                                <span class="keyword">class</span> <span class="type">Titik</span> {
                                <span class="keyword">public</span>:
                                    <span class="type">int</span> <span class="default">x</span>, <span class="default">y</span>;
                                    <span class="type">Titik</span>(<span class="type">int</span> <span class="default">x</span> = 0, <span class="type">int</span> <span class="default">y</span> = 0) : <span class="default">x</span>(<span class="default">x</span>), <span class="default">y</span>(<span class="default">y</span>) {}

                                    <span class="comment">// Operator overloading untuk '+'</span>
                                    <span class="type">Titik</span> <span class="keyword">operator</span>+ (<span class="keyword">const</span> <span class="type">Titik</span>& <span class="default">lain</span>) {
                                        <span class="type">Titik</span> <span class="default">hasil</span>;
                                        <span class="default">hasil</span>.<span class="default">x</span> = <span class="keyword">this</span>-><span class="default">x</span> + <span class="default">lain</span>.<span class="default">x</span>;
                                        <span class="default">hasil</span>.<span class="default">y</span> = <span class="keyword">this</span>-><span class="default">y</span> + <span class="default">lain</span>.<span class="default">y</span>;
                                        <span class="keyword">return</span> <span class="default">hasil</span>;
                                    }
                                };

                                <span class="type">int</span> <span class="default">main</span>() {
                                    <span class="type">Titik</span> <span class="default">t1</span>(10, 5);
                                    <span class="type">Titik</span> <span class="default">t2</span>(3, 7);
                                    <span class="type">Titik</span> <span class="default">t3</span> = <span class="default">t1</span> + <span class="default">t2</span>; <span class="comment">// Memanggil operator+ yang kita definisikan</span>
                                    <span class="default">cout</span> << <span class="string">"t3 = ("</span> << <span class="default">t3</span>.<span class="default">x</span> << <span class="string">", "</span> << <span class="default">t3</span>.<span class="default">y</span> << <span class="string">")"</span> << <span class="default">endl</span>;
                                    <span class="keyword">return</span> 0;
                                }</pre>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <b>Runtime Polymorphism (Polymorphism Run-time/Dinamis)</b>:
                    <p>Terjadi pada saat program dieksekusi. Ini dicapai melalui:</p>
                    <ul>
                        <li>
                            <b>Fungsi Virtual (Virtual Functions)</b>: Fungsi yang dideklarasikan dengan kata kunci `virtual` di kelas dasar, dan dapat di-*override* (diubah implementasinya) di kelas turunan. Penentuan fungsi mana yang akan dipanggil dilakukan pada saat *runtime* berdasarkan tipe objek yang sebenarnya, bukan tipe pointernya.
                            <div class="code-block">
                                <pre>
                                <span class="preprocessor">#include &lt;iostream&gt;</span>

                                <span class="keyword">using</span> <span class="keyword">namespace</span> <span class="default">std</span>;

                                <span class="comment">// Kelas Dasar</span>
                                <span class="keyword">class</span> <span class="type">Bentuk</span> {
                                <span class="keyword">public</span>:
                                    <span class="keyword">virtual</span> <span class="keyword">void</span> <span class="default">gambar</span>() { <span class="comment">// Fungsi virtual</span>
                                        <span class="default">cout</span> << <span class="string">"Menggambar bentuk umum."</span> << <span class="default">endl</span>;
                                    }
                                };

                                <span class="comment">// Kelas Turunan 1</span>
                                <span class="keyword">class</span> <span class="type">Lingkaran</span> : <span class="keyword">public</span> <span class="type">Bentuk</span> {
                                <span class="keyword">public</span>:
                                    <span class="keyword">void</span> <span class="default">gambar</span>() <span class="keyword">override</span> { <span class="comment">// Override fungsi virtual</span>
                                        <span class="default">cout</span> << <span class="string">"Menggambar Lingkaran."</span> << <span class="default">endl</span>;
                                    }
                                };

                                <span class="comment">// Kelas Turunan 2</span>
                                <span class="keyword">class</span> <span class="type">Persegi</span> : <span class="keyword">public</span> <span class="type">Bentuk</span> {
                                <span class="keyword">public</span>:
                                    <span class="keyword">void</span> <span class="default">gambar</span>() <span class="keyword">override</span> { <span class="comment">// Override fungsi virtual</span>
                                        <span class="default">cout</span> << <span class="string">"Menggambar Persegi."</span> << <span class="default">endl</span>;
                                    }
                                };

                                <span class="type">int</span> <span class="default">main</span>() {
                                    <span class="type">Bentuk</span>* <span class="default">b1</span> = <span class="keyword">new</span> <span class="type">Lingkaran</span>();
                                    <span class="type">Bentuk</span>* <span class="default">b2</span> = <span class="keyword">new</span> <span class="type">Persegi</span>();
                                    <span class="type">Bentuk</span>* <span class="default">b3</span> = <span class="keyword">new</span> <span class="type">Bentuk</span>();

                                    <span class="default">b1</span>-><span class="default">gambar</span>(); <span class="comment">// Output: Menggambar Lingkaran. (Runtime binding)</span>
                                    <span class="default">b2</span>-><span class="default">gambar</span>(); <span class="comment">// Output: Menggambar Persegi. (Runtime binding)</span>
                                    <span class="default">b3</span>-><span class="default">gambar</span>(); <span class="comment">// Output: Menggambar bentuk umum.</span>

                                    <span class="keyword">delete</span> <span class="default">b1</span>;
                                    <span class="keyword">delete</span> <span class="default">b2</span>;
                                    <span class="keyword">delete</span> <span class="default">b3</span>;

                                    <span class="keyword">return</span> 0;
                                }</pre>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="fun-fact">
                💡 Fun Fact:
                <ul>
                    <b>Satu Nama, Banyak Perilaku</b>: Inti dari polymorphism adalah bagaimana satu nama fungsi (atau operator) bisa memiliki perilaku yang sangat berbeda tergantung pada konteks atau tipe objeknya. Ini seperti seorang aktor yang bisa memerankan berbagai peran.
                </ul>
            </div>

        </section>

        <div class="tombol-aksi">
            <a href="{{ route('materi.5.3') }}" class="btn-kuning">Materi Sebelumnya</a>
            <a href="{{ route('materi.5.5') }}" class="btn-kuning">Materi Selanjutnya</a>
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