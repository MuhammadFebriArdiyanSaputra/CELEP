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
            <p>Materi: Inheritance (Pewarisan)</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4>
            <ul>
                <li>Memahami Konsep Dasar Inheritance: Mengerti apa itu pewarisan dan mengapa ia penting dalam OOP.</li>
                <li>Mengenali Hubungan Parent-Child Class: Memahami bagaimana kelas turunan (child class) mewarisi anggota dari kelas dasar (parent class).</li>
                <li>Menerapkan Syntax Inheritance: Mampu menulis kode untuk membuat kelas turunan di C++.</li>
                <li>Membedakan Access Specifier dalam Inheritance: Memahami bagaimana <code>public</code>, <code>protected</code>, dan <code>private</code> memengaruhi pewarisan anggota.</li>
                <li>Memahami Override Metode: Mengetahui bagaimana metode di kelas dasar dapat diubah perilakunya di kelas turunan.</li>
                <li>Meningkatkan Reusabilitas Kode: Menyadari bagaimana Inheritance membantu dalam penggunaan kembali kode yang efisien.</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/BMLtG2iRgdY?si=7srpeBM6Wmy8gJtw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <section>

            <h3>A. Pengertian Inheritance (Pewarisan)</h3>
            <ul>
                <p>
                Inheritance adalah salah satu pilar utama Pemrograman Berorientasi Objek (OOP) yang memungkinkan sebuah kelas baru (disebut kelas turunan/child class/derived class) untuk mewarisi atribut (data) dan perilaku (metode) dari kelas yang sudah ada (disebut kelas dasar/parent class/base class). Konsep ini merepresentasikan hubungan "adalah-sejenis" (is-a relationship), misalnya "Mobil adalah-sejenis Kendaraan".
                </p>
            </ul>
            <br>
            <h3>B. Manfaat Inheritance</h3>
            <ul>
                <li>
                    <b>Reusabilitas Kode</b>: Kode yang ditulis di kelas dasar dapat digunakan kembali oleh kelas turunan, mengurangi duplikasi kode.
                </li>
                <li>
                    <b>Ekstensibilitas</b>: Memungkinkan penambahan fitur baru atau modifikasi perilaku tanpa mengubah kode kelas dasar.
                </li>
                <li>
                    <b>Organisasi Kode</b>: Membantu mengorganisir kode secara hierarkis, merefleksikan hubungan dunia nyata.
                </li>
            </ul>
            <br>
            <h3>C. Syntax Inheritance di C++</h3>
            <p>
                Untuk mendeklarasikan sebuah kelas turunan dari kelas dasar, gunakan tanda titik dua (<code>:</code>) diikuti dengan <i>access specifier</i> pewarisan dan nama kelas dasar.
            </p>
            <div class="code-block">
                <pre><span class="keyword">class</span> <span class="type">KelasDasar</span> {
                    <span class="comment">// Anggota kelas dasar</span>
                };

                <span class="keyword">class</span> <span class="type">KelasTurunan</span> : <span class="keyword">public</span> <span class="type">KelasDasar</span> {
                    <span class="comment">// Anggota kelas turunan</span>
                };</pre>
            </div>
            <br>
            <h3>D. Access Specifier dalam Pewarisan</h3>
            <p>
                <i>Access specifier</i> (<code>public</code>, <code>protected</code>, <code>private</code>) tidak hanya mengontrol akses anggota di dalam kelas, tetapi juga memengaruhi bagaimana anggota tersebut diwarisi oleh kelas turunan.
            </p>
            <table>
                <thead>
                    <tr>
                        <th>Access Specifier Anggota di Kelas Dasar</th>
                        <th>Mode Pewarisan</th>
                        <th>Akses di Kelas Turunan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>public</code></td>
                        <td><code>public</code></td>
                        <td><code>public</code></td>
                    </tr>
                    <tr>
                        <td><code>public</code></td>
                        <td><code>protected</code></td>
                        <td><code>protected</code></td>
                    </tr>
                    <tr>
                        <td><code>public</code></td>
                        <td><code>private</code></td>
                        <td><code>private</code></td>
                    </tr>
                    <tr>
                        <td><code>protected</code></td>
                        <td><code>public</code></td>
                        <td><code>protected</code></td>
                    </tr>
                    <tr>
                        <td><code>protected</code></td>
                        <td><code>protected</code></td>
                        <td><code>protected</code></td>
                    </tr>
                    <tr>
                        <td><code>protected</code></td>
                        <td><code>private</code></td>
                        <td><code>private</code></td>
                    </tr>
                    <tr>
                        <td><code>private</code></td>
                        <td>(Tidak peduli)</td>
                        <td>Tidak dapat diakses (tetap private di kelas dasar)</td>
                    </tr>
                </tbody>
            </table>
            <p style="margin-top: 10px;">
                *Catatan: Anggota <code>private</code> dari kelas dasar tidak pernah dapat diakses langsung oleh kelas turunan. Mereka hanya dapat diakses melalui metode <code>public</code> atau <code>protected</code> dari kelas dasar.*
            </p>
            <br>
            <div class="fun-fact">
                💡 Fun Fact:
                <ul>
                    <li><b>"Is-A Relationship"</b>: Inheritance paling baik digunakan untuk menggambarkan hubungan "adalah-sejenis" (<i>is-a relationship</i>). Contoh: "Anjing <b>adalah-sejenis</b> Hewan", "Mobil <b>adalah-sejenis</b> Kendaraan". Ini membantu dalam pemodelan dunia nyata dalam kode Anda.</li>
                    <li><b>Poliomorfisme Terkait Erat</b>: Inheritance adalah fondasi bagi salah satu pilar OOP lainnya, yaitu Poliomorfisme. Tanpa inheritance, poliomorfisme dalam bentuk <i>runtime polymorphism</i> (melalui fungsi virtual) tidak mungkin terjadi.</li>
                    <li><b>Tidak Hanya untuk Fungsi</b>: Selain mewarisi metode, kelas turunan juga mewarisi atribut (data) dari kelas dasar. Jadi, objek kelas turunan akan memiliki semua atribut yang didefinisikan di kelas dasar, ditambah atributnya sendiri.</li>
                </ul>
            </div>
            <br>
            <h3>E. Contoh Implementasi Sederhana</h3>
            <div class="code-block">
                <pre>
                <span class="preprocessor">#include &lt;string&gt;</span>

                <span class="keyword">using</span> <span class="keyword">namespace</span> <span class="default">std</span>;

                <span class="comment">// Kelas Dasar (Parent Class)</span>
                <span class="keyword">class</span> <span class="type">Hewan</span> {
                <span class="keyword">public</span>:
                    <span class="type">string</span> <span class="default">nama</span>;

                    <span class="type">void</span> <span class="default">makan</span>() {
                        <span class="default">cout</span> << <span class="default">nama</span> << <span class="string">" sedang makan."</span> << <span class="default">endl</span>;
                    }
                };

                <span class="comment">// Kelas Turunan (Child Class) - mewarisi secara public</span>
                <span class="keyword">class</span> <span class="type">Anjing</span> : <span class="keyword">public</span> <span class="type">Hewan</span> {
                <span class="keyword">public</span>:
                    <span class="type">void</span> <span class="default">gonggong</span>() {
                        <span class="default">cout</span> << <span class="default">nama</span> << <span class="string">" menggonggong: Guk guk!"</span> << <span class="default">endl</span>;
                    }
                };

                <span class="type">int</span> <span class="default">main</span>() {
                    <span class="type">Anjing</span> <span class="default">doggy</span>;
                    <span class="default">doggy</span>.<span class="default">nama</span> = <span class="string">"Buddy"</span>; <span class="comment">// Mengakses anggota 'nama' dari kelas dasar Hewan</span>
                    <span class="default">doggy</span>.<span class="default">makan</span>();       <span class="comment">// Memanggil metode 'makan' dari kelas dasar Hewan</span>
                    <span class="default">doggy</span>.<span class="default">gonggong</span>();    <span class="comment">// Memanggil metode dari kelas turunan Anjing</span>

                    <span class="keyword">return</span> 0;
                }</pre>
            </div>
        </section>

        <div class="tombol-aksi">
            <a href="{{ route('materi.5.2') }}" class="btn-kuning">Materi Sebelumnya</a>
            <a href="{{ route('materi.5.4') }}" class="btn-kuning">Materi Selanjutnya</a>
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