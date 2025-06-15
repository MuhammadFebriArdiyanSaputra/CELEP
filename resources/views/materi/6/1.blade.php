<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi C++ - Level 6</title>
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
            <h2>Level 6 – Contoh Project: Sistem Kasir Berbasis C++</h2>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4>
            <ul>
                <li>Memahami penggunaan struktur data dan fungsi dalam C++.</li>
                <li>Mempraktikkan file handling untuk mencetak struk ke file.</li>
                <li>Membuat menu interaktif berbasis teks (CLI).</li>
                <li>Mensimulasikan proses transaksi dalam sistem kasir sederhana.</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/MTqzK2tWVk0" title="Contoh Sistem Kasir Sederhana C++" frameborder="0" allowfullscreen></iframe>
        </div>

        <section>
            <h3>A. Deskripsi Singkat Project</h3>
            <p>Project ini merupakan simulasi sistem kasir berbasis terminal menggunakan C++. Program ini memungkinkan pengguna untuk:</p>
            <ul>
                <li>Melihat daftar produk</li>
                <li>Menambahkan produk ke keranjang</li>
                <li>Menghitung total belanja</li>
                <li>Mencetak struk ke file teks</li>
            </ul>

            <h3>B. Potongan Kode Penting</h3>
            <pre><code>
struct Produk {
    string nama;
    double harga;
};

struct ItemKeranjang {
    Produk produk;
    int jumlah;
};

// Tambahkan produk ke keranjang
void tambahKeranjang() {
    int pilihan, jumlah;
    tampilkanProduk();
    cout << "Pilih nomor produk: ";
    cin >> pilihan;
    cout << "Jumlah: ";
    cin >> jumlah;
    keranjang.push_back({daftarProduk[pilihan - 1], jumlah});
}
            </code></pre>

            <h3>C. Ide Pengembangan</h3>
            <ul>
                <li>Menambahkan fitur login kasir</li>
                <li>Membuat stok produk dinamis dari file</li>
                <li>Menambahkan diskon/pajak</li>
            </ul>

            <div class="fun-fact">
                💡 Fun Fact: Sistem kasir adalah contoh nyata dari penggunaan array/vector, struct, input/output, dan pengelolaan file yang umum dalam C++!
            </div>
        </section>

        <div class="tombol-aksi">
            <a href="{{ route('welcome') }}" class="btn-kuning">Kembali</a>
            <a href="{{ route('materi.6.latihan') }}" class="btn-kuning">Mulai Latihan</a>
        </div>
    </div>

    <!-- FOOTER -->
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