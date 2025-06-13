<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi C++ - Level 2</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>

    <div class="navbar">
        <div class="navbar-left">
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('img/Celep1 1.png') }}" class="logo" alt="Logo">
            </a>
        </div>

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

    <div class="container">
        <header class="judul">
            <h2>Level 2 – Variabel dan Tipe Data</h2>
            <p>Materi: Memahami Cara Menyimpan Data di C++</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4>
            <ul>
                <li>Memahami konsep dasar **variabel**.</li>
                <li>Mengenali berbagai **tipe data** fundamental dalam C++.</li>
                <li>Mendeklarasikan dan **menginisialisasi variabel** dengan benar.</li>
                <li>Memahami perbedaan antara berbagai tipe data.</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/_agqO67gOgg?si=ZaltgL9GNsyJKKDF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <section>
            <h3>A. Apa Itu Variabel?</h3>
            <p>Dalam pemrograman C++, **variabel** adalah nama yang diberikan kepada suatu lokasi penyimpanan di memori komputer yang digunakan untuk menyimpan nilai data. Bayangkan variabel sebagai sebuah "kotak" atau "wadah" di mana Anda bisa menyimpan informasi. Setiap variabel memiliki **nama** yang unik dan **tipe data** tertentu yang menentukan jenis nilai apa yang bisa disimpannya.</p>
            <p>Variabel penting karena memungkinkan program untuk menyimpan dan memanipulasi data selama eksekusi. Tanpa variabel, program tidak akan bisa "mengingat" informasi.</p>

            <h3></br>B. Aturan Penulisan Variabel</h3>
            <ul>
                <li>Nama variabel harus dimulai dengan huruf atau garis bawah (_).</li>
                <li>Nama variabel hanya boleh terdiri dari huruf, angka, dan garis bawah (_). Tidak boleh ada spasi atau karakter khusus lainnya.</li>
                <li>C++ bersifat **case-sensitive**, artinya `namaVariabel` berbeda dengan `Namavariabel`.</li>
                <li>Tidak boleh menggunakan **kata kunci (keywords)** C++ sebagai nama variabel, contoh: `int`, `if`, `for`, `while`, dll.</li>
                <li>Sebaiknya gunakan nama variabel yang deskriptif dan mudah dipahami.</li>
            </ul></br>

            <h3>C. Deklarasi dan Inisialisasi Variabel</h3>
            <p>Sebelum menggunakan variabel, Anda harus mendeklarasikannya. **Deklarasi** memberitahu compiler C++ tentang nama dan tipe data variabel. Anda juga bisa langsung memberikan nilai awal (inisialisasi) saat mendeklarasikan variabel.</p>
            <p>Berikut adalah contohnya:</p>
            <pre><code class="language-cpp">
// Deklarasi variabel tanpa inisialisasi
int umur;
using namespace std;

// Deklarasi dan inisialisasi variabel
int tahunLahir = 2000;
double tinggiBadan = 175.5;
char inisialNama = 'A';
string namaLengkap = "Budi Santoso";
bool isMahasiswa = true;
            </code></pre>

            <h3>D. Tipe Data Fundamental pada C++</h3>
            <p>Setiap variabel harus memiliki **tipe data**. Tipe data menentukan jenis nilai yang bisa disimpan oleh variabel, serta berapa banyak memori yang akan dialokasikan untuknya. Berikut adalah beberapa tipe data fundamental yang sering digunakan di C++:</p>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>Tipe Data</th>
                        <th>Ukuran (biasanya)</th>
                        <th>Deskripsi</th>
                        <th>Contoh</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>`int`</td>
                        <td>4 bytes</td>
                        <td>Bilangan bulat (integer), positif atau negatif.</td>
                        <td>`int usia = 30;`</td>
                    </tr>
                    <tr>
                        <td>`float`</td>
                        <td>4 bytes</td>
                        <td>Bilangan pecahan (floating-point) presisi tunggal.</td>
                        <td>`float suhu = 25.7f;`</td>
                    </tr>
                    <tr>
                        <td>`double`</td>
                        <td>8 bytes</td>
                        <td>Bilangan pecahan (floating-point) presisi ganda. Lebih akurat dari `float`.</td>
                        <td>`double phi = 3.14159;`</td>
                    </tr>
                    <tr>
                        <td>`char`</td>
                        <td>1 byte</td>
                        <td>Karakter tunggal (huruf, angka, simbol). Ditulis dalam tanda kutip tunggal.</td>
                        <td>`char grade = 'A';`</td>
                    </tr>
                    <tr>
                        <td>`bool`</td>
                        <td>1 byte</td>
                        <td>Nilai boolean: `true` (benar) atau `false` (salah).</td>
                        <td>`bool sudahLogin = true;`</td>
                    </tr>
                    <tr>
                        <td>`string`</td>
                        <td>Bervariasi</td>
                        <td>Urutan karakter (teks). Membutuhkan `<string>` library.</td>
                        <td>`string nama = "Alice";`</td>
                    </tr>
                </tbody>
            </table>
            <p>Perlu diingat bahwa ukuran tipe data bisa bervariasi tergantung pada arsitektur sistem dan compiler yang digunakan.</p>

            <div class="fun-fact">
                💡 Fun Fact: Tipe data `double` biasanya digunakan untuk perhitungan ilmiah yang membutuhkan presisi tinggi, sedangkan `float` cukup untuk kebanyakan kasus umum!
            </div>

            <h3>E. Contoh Penggunaan Variabel dan Tipe Data</h3>
            <p>Mari kita lihat bagaimana variabel dan tipe data bekerja dalam sebuah program C++ sederhana:</p>
            <pre><code class="language-cpp">
#include <iostream> // Untuk input/output stream
#include <string>   // Untuk menggunakan tipe data string
using namespace std;
int main() {
    // Deklarasi dan inisialisasi variabel
    int jumlahApel = 10;
    double hargaPerApel = 2500.50;
    char kategoriBuah = 'F'; // 'F' untuk Fruit
    string namaPembeli = "Rina Dewi";
    bool stokTersedia = true;

    // Menampilkan nilai variabel
    cout << "Nama Pembeli: " << namaPembeli << endl;
    cout << "Jumlah Apel: " << jumlahApel << endl;
    cout << "Harga per Apel: Rp" << hargaPerApel << endl;
    cout << "Kategori Buah: " << kategoriBuah << endl;
    cout << "Stok Tersedia: " << stokTersedia << endl; // true akan ditampilkan sebagai 1, false sebagai 0

    // Mengubah nilai variabel
    jumlahApel = 8;
    hargaPerApel = 2300.00;
    stokTersedia = false;

    cout << "\n-- Setelah Perubahan --" << endl;
    cout << "Jumlah Apel sekarang: " << jumlahApel << endl;
    cout << "Harga per Apel sekarang: Rp" << hargaPerApel << endl;
    cout << "Stok Tersedia sekarang: " << stokTersedia << endl;

    return 0; // Menandakan program berakhir dengan sukses
}
            </code></pre>
            <p>Dari contoh di atas, Anda bisa melihat bagaimana variabel dideklarasikan dengan tipe datanya, diberi nilai, dan kemudian nilainya dapat diubah selama program berjalan.</p>
        </section>

        <div class="tombol-aksi">
            <a href="{{ route('welcome') }}" class="btn-kuning">Kembali</a>
            <a href="{{ route('materi.2.2') }}" class="btn-kuning">Materi Selanjutnya</a>
        </div>
    </div>

    <footer id="kontak" class="footer">
        <strong>Kontak Kami</strong><br>
        Email: <a href="mailto:support@celep.com">support@celep.com</a><br>
        Telepon: +62 812-3456-7890
    </footer>

    <script>
        function toggleNavbar() {
            const navbar = document.getElementById("navbarMenu");
            navbar.classList.toggle("show");
        }
    </script>

</body>
</html>