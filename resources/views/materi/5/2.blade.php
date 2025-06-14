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
            <p>Materi: Constructor dan Destructor</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4>
            <ul>
                <li>Memahami Konsep Constructor dan Destructor: Mengerti apa itu constructor dan destructor, serta peran pentingnya dalam inisialisasi dan pembersihan objek.</li>
                <li>Membedakan Jenis-jenis Constructor: Mengenal berbagai jenis constructor (default, parameterized, copy) dan kapan menggunakannya.</li>
                <li>Mengimplementasikan Constructor dan Destructor: Mampu menulis kode constructor dan destructor untuk kelas Anda sendiri.</li>
                <li>Memahami Siklus Hidup Objek: Mengerti kapan constructor dan destructor dipanggil dalam siklus hidup sebuah objek.</li>
                <li>Mencegah Memory Leak: Memahami pentingnya destructor dalam membebaskan memori yang dialokasikan oleh objek, terutama memori dinamis.</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/dgfu46477TA?si=4E4W2VDRBz64ci5g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <section>

            <h3>A. Pengertian Constructor</h3>
            <p>
                Constructor adalah metode khusus dalam sebuah kelas yang dipanggil secara otomatis saat sebuah objek dari kelas tersebut dibuat (diinstansiasi). Fungsi utamanya adalah untuk menginisialisasi objek, yaitu memberikan nilai awal kepada atribut-atribut objek dan melakukan persiapan lain yang diperlukan sebelum objek digunakan. Constructor memiliki nama yang sama persis dengan nama kelasnya dan tidak mengembalikan nilai apapun (bahkan <code>void</code>).
            </p>
            <br>
            <h3>B. Jenis-jenis Constructor:</h3>
            <ul>
                <li>
                    <b>Constructor Default</b>: Constructor yang tidak memiliki parameter. Jika Anda tidak mendefinisikan constructor apapun dalam kelas, C++ akan menyediakan constructor default implisit.
                    <div class="code-block">
                <pre><span class="keyword">class</span> <span class="type">Mobil</span> {
                <span class="keyword">public</span>:
                    <span class="comment">// Constructor default (implisit atau eksplisit)</span>
                    <span class="type">Mobil</span>() {
                        <span class="default">warna</span> = <span class="string">"Merah"</span>;
                        <span class="default">kecepatan</span> = 0;
                    }
                <span class="keyword">private</span>:
                    <span class="type">string</span> <span class="default">warna</span>;
                    <span class="type">int</span> <span class="default">kecepatan</span>;
                };</pre>
                                    </div>
                                </li>
                                <li>
                                    <b>Constructor dengan Parameter</b>: Constructor yang menerima satu atau lebih parameter untuk menginisialisasi objek dengan nilai yang berbeda.
                                    <div class="code-block">
                <pre><span class="keyword">class</span> <span class="type">Mahasiswa</span> {
                <span class="keyword">public</span>:
                    <span class="comment">// Constructor dengan parameter</span>
                    <span class="type">Mahasiswa</span>(<span class="type">string</span> <span class="default">nama</span>, <span class="type">int</span> <span class="default">umur</span>) {
                        <span class="keyword">this</span>-><span class="default">nama</span> = <span class="default">nama</span>;
                        <span class="keyword">this</span>-><span class="default">umur</span> = <span class="default">umur</span>;
                    }
                <span class="keyword">private</span>:
                    <span class="type">string</span> <span class="default">nama</span>;
                    <span class="type">int</span> <span class="default">umur</span>;
                };

                <span class="type">Mahasiswa</span> <span class="default">mhs1</span>(<span class="string">"Budi"</span>, 20); <span class="comment">// Membuat objek mhs1 dengan nama "Budi" dan umur 20</span></pre>
                                    </div>
                                </li>
                                <li>
                                    <b>Constructor Salinan (Copy Constructor)</b>: Constructor yang membuat objek baru sebagai salinan dari objek lain yang bertipe sama.
                                    <div class="code-block">
                <pre><span class="keyword">class</span> <span class="type">Titik</span> {
                <span class="keyword">public</span>:
                    <span class="comment">// Constructor salinan</span>
                    <span class="type">Titik</span>(<span class="keyword">const</span> <span class="type">Titik</span>&amp; <span class="default">titikLain</span>) {
                        <span class="default">x</span> = <span class="default">titikLain</span>.<span class="default">x</span>;
                        <span class="default">y</span> = <span class="default">titikLain</span>.<span class="default">y</span>;
                    }
                <span class="keyword">private</span>:
                    <span class="type">int</span> <span class="default">x</span>;
                    <span class="type">int</span> <span class="default">y</span>;
                };

                <span class="type">Titik</span> <span class="default">titik1</span>(10, 20);
                <span class="type">Titik</span> <span class="default">titik2</span> = <span class="default">titik1</span>; <span class="comment">// Membuat titik2 sebagai salinan dari titik1</span></pre>
                                    </div>
                </li>
            </ul>
            <br>

            <h3>C. Pengertian Destructor</h3>
            <p>
                Destructor adalah metode khusus dalam sebuah kelas yang dipanggil secara otomatis saat sebuah objek dari kelas tersebut dihancurkan (dihapus dari memori). Fungsi utamanya adalah untuk membersihkan <i>resource</i> yang dialokasikan oleh objek selama masa hidupnya, terutama memori yang dialokasikan secara dinamis dengan <code>new</code>. Ini sangat penting untuk mencegah <i>memory leak</i>. Destructor memiliki nama yang sama dengan nama kelasnya, tetapi diawali dengan karakter tilde (<code>~</code>), dan tidak memiliki parameter atau <i>return value</i>.
            </p>
            <br>
            <div class="fun-fact">
                💡 Fun Fact:
                <ul>
                    <li><b>Constructor dan Destructor dalam Pewarisan (Inheritance)</b>: Dalam pewarisan, constructor kelas dasar (induk) dipanggil <b>sebelum</b> constructor kelas turunan, dan destructor kelas turunan dipanggil <b>sebelum</b> destructor kelas dasar. Ini memastikan inisialisasi dan pembersihan dilakukan dengan urutan yang benar.</li>
                </ul>
            </div>
            <br>
            <h3>Contoh Kode Constructor dan Destructor</h3>
            <div class="code-block">
                <pre>
                <span class="preprocessor">#include &lt;iostream&gt;</span>
                <span class="preprocessor">#include &lt;string&gt;</span>

                <span class="keyword">using</span> <span class="keyword">namespace</span> <span class="default">std</span>;

                <span class="keyword">class</span> <span class="type">Buku</span> {
                <span class="keyword">public</span>:
                    <span class="comment">// Constructor</span>
                    <span class="type">Buku</span>(<span class="type">string</span> <span class="default">judul</span>, <span class="type">string</span> <span class="default">penulis</span>) {
                        <span class="keyword">this</span>-><span class="default">judul</span> = <span class="default">judul</span>;
                        <span class="keyword">this</span>-><span class="default">penulis</span> = <span class="default">penulis</span>;
                        <span class="default">cout</span> &lt;&lt; <span class="string">"Constructor dipanggil untuk buku: "</span> &lt;&lt; <span class="keyword">this</span>-><span class="default">judul</span> &lt;&lt; <span class="default">endl</span>;
                    }

                    <span class="comment">// Destructor</span>
                    ~<span class="type">Buku</span>() {
                        <span class="default">cout</span> &lt;&lt; <span class="string">"Destructor dipanggil untuk buku: "</span> &lt;&lt; <span class="keyword">this</span>-><span class="default">judul</span> &lt;&lt; <span class="default">endl</span>;
                    }

                    <span class="keyword">void</span> <span class="default">tampilkanInfo</span>() {
                        <span class="default">cout</span> &lt;&lt; <span class="string">"Judul: "</span> &lt;&lt; <span class="default">judul</span> &lt;&lt; <span class="default">endl</span>;
                        <span class="default">cout</span> &lt;&lt; <span class="string">"Penulis: "</span> &lt;&lt; <span class="default">penulis</span> &lt;&lt; <span class="default">endl</span>;
                    }

                <span class="keyword">private</span>:
                    <span class="type">string</span> <span class="default">judul</span>;
                    <span class="type">string</span> <span class="default">penulis</span>;
                };

                <span class="type">int</span> <span class="default">main</span>() {
                    <span class="type">Buku</span> <span class="default">buku1</span>(<span class="string">"Harry Potter"</span>, <span class="string">"J.K. Rowling"</span>);
                    <span class="default">buku1</span>.<span class="default">tampilkanInfo</span>();

                    <span class="comment">// Destructor akan dipanggil otomatis saat buku1 keluar dari scope (akhir fungsi main)</span>
                    <span class="keyword">return</span> 0;
                }</pre>
            </div>
        </section>

        <div class="tombol-aksi">
            <a href="{{ route('materi.5.1') }}" class="btn-kuning">Materi Sebelumnya</a>
            <a href="{{ route('materi.5.3') }}" class="btn-kuning">Materi Selanjutnya</a>
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