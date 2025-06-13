<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi C++ - Level 3</title>
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
            <h2>Level 3 – Struktur Data Dasar: Array 1D dan 2D</h2>
            <p>Materi: Menyimpan Kumpulan Data dalam C++</p>
        </header>

        <section class="box-tujuan">
            <h4>🎯 Tujuan Pembelajaran</h4>
            <ul>
                <li>Memahami konsep dasar **Array** sebagai struktur data.</li>
                <li>Mendeklarasikan, menginisialisasi, dan mengakses elemen **Array 1 Dimensi (1D)**.</li>
                <li>Melakukan operasi dasar pada Array 1D (input, output, iterasi).</li>
                <li>Mendeklarasikan, menginisialisasi, dan mengakses elemen **Array 2 Dimensi (2D)**.</li>
                <li>Menerapkan Array 2D untuk merepresentasikan data berbentuk tabel atau matriks.</li>
            </ul>
        </section>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/9DjiErqQCSA?si=3fANoaQ5Q7O8R0rA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <div class="video" style="margin-top: 20px;">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/dMdsFzDjJO8?si=eM0PfO1VXwD-t0uC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <div class="video" style="margin-top: 20px;">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/h65yAvh2YSM?si=_nl3RAwwJ_d1NIfl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <section>
            <h3>A. Pengantar Struktur Data: Array</h3>
            <p>Sejauh ini, kita telah belajar bagaimana menyimpan satu nilai dalam satu variabel. Namun, seringkali kita perlu menyimpan sekumpulan nilai yang bertipe data sama (misalnya, daftar nilai siswa, suhu harian, atau nama-nama produk). Untuk kasus seperti ini, kita menggunakan **Array**.</p>
            <p>Array adalah struktur data homogen (semua elemennya memiliki tipe data yang sama) yang menyimpan kumpulan elemen dalam lokasi memori yang berurutan. Setiap elemen dalam array dapat diakses menggunakan indeks (posisi) numerik, yang dimulai dari 0.</p>

            <h3>B. Array 1 Dimensi (1D)</h3>
            <p>Array 1D adalah daftar nilai yang berurutan. Bayangkan sebagai baris tunggal dari kotak-kotak, di mana setiap kotak dapat menyimpan satu nilai.</p>

            <h4>1. Deklarasi Array 1D</h4>
            <p>Sintaks umum untuk mendeklarasikan array 1D adalah:</p>
            <pre><code class="language-cpp">
tipe_data nama_array[ukuran];
            </code></pre>
            <p>Contoh:</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

int main() {
    int angka[5]; // Mendeklarasikan array 'angka' yang bisa menyimpan 5 integer
    string nama[3]; // Mendeklarasikan array 'nama' yang bisa menyimpan 3 string
    return 0;
}
            </code></pre>

            <h4>2. Inisialisasi Array 1D</h4>
            <p>Anda bisa menginisialisasi array saat deklarasi atau setelahnya.</p>
            <ul>
                <li><strong>Saat Deklarasi:</strong></li>
                <pre><code class="language-cpp">
int nilai[] = {80, 90, 75, 95, 88}; // Ukuran array akan otomatis ditentukan (5 elemen)
char huruf[4] = {'A', 'B', 'C', 'D'}; // Ukuran array ditentukan secara eksplisit
                </code></pre>
                <li><strong>Setelah Deklarasi (Mengakses Elemen):</strong></li>
                <p>Elemen array diakses menggunakan indeks. Ingat, indeks dimulai dari 0.</p>
                <pre><code class="language-cpp">
#include <iostream>
using namespace std;

int main() {
    int angka[3]; // Deklarasi array ukuran 3

    angka[0] = 10; // Mengisi elemen pertama (indeks 0)
    angka[1] = 20; // Mengisi elemen kedua (indeks 1)
    angka[2] = 30; // Mengisi elemen ketiga (indeks 2)

    cout << "Elemen pertama: " << angka[0] << endl; // Mengakses dan menampilkan elemen
    cout << "Elemen ketiga: " << angka[2] << endl;

    return 0;
}
                </code></pre>
            </ul>

            <h4>3. Iterasi (Looping) pada Array 1D</h4>
            <p>Perulangan (biasanya `for` loop) sangat umum digunakan untuk memproses setiap elemen dalam array.</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

int main() {
    int dataNilai[] = {70, 80, 90, 65, 78};
    int ukuranArray = sizeof(dataNilai) / sizeof(dataNilai[0]); // Cara mendapatkan ukuran array

    cout << "Nilai-nilai dalam array:" << endl;
    for (int i = 0; i < ukuranArray; i++) {
        cout << "Nilai indeks " << i << ": " << dataNilai[i] << endl;
    }

    // Mengambil input dari pengguna untuk mengisi array
    const int MAX_DATA = 4; // Menggunakan const untuk ukuran array
    string namaSiswa[MAX_DATA];
    cout << "\nMasukkan 4 nama siswa:" << endl;
    for (int i = 0; i < MAX_DATA; i++) {
        cout << "Siswa ke-" << (i + 1) << ": ";
        getline(cin >> ws, namaSiswa[i]); // Menggunakan ws untuk membersihkan buffer sebelum getline
    }

    cout << "\nDaftar siswa:" << endl;
    for (int i = 0; i < MAX_DATA; i++) {
        cout << (i + 1) << ". " << namaSiswa[i] << endl;
    }

    return 0;
}
            </code></pre>

            <div class="fun-fact">
                💡 Fun Fact: Indeks array selalu dimulai dari 0! Jadi, array dengan 5 elemen memiliki indeks 0, 1, 2, 3, dan 4. Mengakses indeks di luar jangkauan ini dapat menyebabkan *runtime error* (kesalahan saat program berjalan) atau perilaku tak terduga!
            </div>

            <h3>C. Array 2 Dimensi (2D)</h3>
            <p>Array 2D dapat dianggap sebagai "array dari array" atau tabel (baris dan kolom). Ini sangat berguna untuk merepresentasikan matriks, tabel data, atau papan permainan.</p>

            <h4>1. Deklarasi Array 2D</h4>
            <p>Sintaks umum untuk mendeklarasikan array 2D adalah:</p>
            <pre><code class="language-cpp">
tipe_data nama_array[jumlah_baris][jumlah_kolom];
            </code></pre>
            <p>Contoh:</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

int main() {
    int matriks[3][4]; // Mendeklarasikan array 2D dengan 3 baris dan 4 kolom
    return 0;
}
            </code></pre>

            <h4>2. Inisialisasi Array 2D</h4>
            <p>Anda bisa menginisialisasi array 2D saat deklarasi:</p>
            <pre><code class="language-cpp">
// Array 2D dengan 2 baris dan 3 kolom
int angkaTabel[2][3] = {
    {1, 2, 3},   // Baris 0
    {4, 5, 6}    // Baris 1
};

// Atau tanpa menentukan ukuran baris (compiler akan menghitungnya)
int angkaTabel2[][3] = {
    {10, 20, 30},
    {40, 50, 60}
};
            </code></pre>

            <h4>3. Mengakses dan Iterasi pada Array 2D</h4>
            <p>Untuk mengakses elemen pada array 2D, Anda perlu dua indeks: satu untuk baris dan satu untuk kolom. Perulangan bersarang (nested loops) sering digunakan untuk memproses array 2D.</p>
            <pre><code class="language-cpp">
#include <iostream>
using namespace std;

int main() {
    const int BARIS = 2;
    const int KOLOM = 3;

    int matriks[BARIS][KOLOM] = {
        {10, 20, 30},
        {40, 50, 60}
    };

    cout << "Isi Matriks:" << endl;
    for (int i = 0; i < BARIS; i++) { // Loop untuk baris
        for (int j = 0; j < KOLOM; j++) { // Loop untuk kolom
            cout << matriks[i][j] << " "; // Menampilkan elemen pada [baris][kolom]
        }
        cout << endl; // Pindah baris setelah selesai satu baris matriks
    }

    // Contoh: Input nilai untuk matriks 2x2
    int data[2][2];
    cout << "\nMasukkan nilai untuk matriks 2x2:" << endl;
    for (int i = 0; i < 2; i++) {
        for (int j = 0; j < 2; j++) {
            cout << "Masukkan nilai untuk [" << i << "][" << j << "]: ";
            cin >> data[i][j];
        }
    }

    cout << "\nMatriks yang Anda masukkan:" << endl;
    for (int i = 0; i < 2; i++) {
        for (int j = 0; j < 2; j++) {
            cout << data[i][j] << "\t"; // Gunakan \t untuk tab (jarak)
        }
        cout << endl;
    }

    return 0;
}
            </code></pre>
            <p>Array adalah fundamental dalam pemrograman C++ dan menjadi dasar untuk banyak struktur data yang lebih kompleks. Memahami cara kerjanya sangat penting untuk membangun program yang efisien dalam menangani kumpulan data.</p>
        </section>

        <div class="tombol-aksi">
            <a href="{{ route('welcome') }}" class="btn-kuning">Kembali</a>
            <a href="{{ route('materi.3.2') }}" class="btn-kuning">Materi Selanjutnya</a>
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