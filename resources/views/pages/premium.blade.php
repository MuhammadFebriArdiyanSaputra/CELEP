<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CELEP - Platform Interaktif Belajar Pemrograman C++</title>
    {{-- Menggunakan asset untuk CSS eksternal --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" /> --}}
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <style>
      /* General Styles */
      body {
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
        background-color: #1a1a1a; /* Dark background */
        color: #f0f0f0; /* Light text color */
        line-height: 1.6;
      }

      .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
      }

      h1,
      h2,
      h3 {
        color: #ffd700; /* Gold color for headings */
      }

      a {
        color: #ffd700;
        text-decoration: none;
      }

      a:hover {
        text-decoration: underline;
      }

      /* Navbar */
      .navbar {
        background-color: #1a1a1a;
        padding: 20px 0;
        border-bottom: 1px solid #333;
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
      }

      .navbar-left {
        display: flex;
        align-items: center;
      }

      .navbar-left .logo {
        height: 30px;
        width: auto;
        border-radius: 5px;
      }

      .hamburger {
        display: none;
        font-size: 2em;
        cursor: pointer;
        color: #f0f0f0;
      }

      .navbar-right {
        display: flex;
        align-items: center;
        gap: 30px;
      }

      .navbar-right a {
        color: #f0f0f0;
        font-weight: 600;
        transition: color 0.3s ease;
      }

      .navbar-right a:hover {
        color: #ffd700;
        text-decoration: none;
      }

      .dropdown {
        position: relative;
        display: inline-block;
      }

      .dropdown-toggle {
        background: none;
        border: none;
        color: #f0f0f0;
        font-size: 1.5em;
        cursor: pointer;
        padding: 5px;
      }

      .dropdown-menu {
        display: none;
        position: absolute;
        background-color: #2a2a2a;
        min-width: 120px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        right: 0;
        border-radius: 5px;
      }

      .dropdown-menu a,
      .dropdown-menu button {
        color: #f0f0f0;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        background: none;
        border: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .dropdown-menu a:hover,
      .dropdown-menu button:hover {
        background-color: #3a3a3a;
      }

      .dropdown-toggle:focus + .dropdown-menu,
      .dropdown:hover .dropdown-menu {
        display: block;
      }

      /* Hero Section */
      .hero {
        background-color: #1a1a1a;
        padding: 80px 0;
      }

      .hero .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 40px;
      }

      .hero-content {
        flex: 1;
      }

      .hero-content h1 {
        font-size: 4em;
        margin-bottom: 20px;
        color: #f0f0f0;
      }

      .hero-content p {
        font-size: 1.2em;
        max-width: 500px;
      }

      .hero-image {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .image-box {
        border: 3px solid #ffd700;
        padding: 10px;
        background-color: #333;
      }

      .image-box img {
        max-width: 100%;
        height: auto;
        display: block;
      }

      /* Premium Features Section */
      .premium-wrapper {
        background-color: #1a1a1a;
        padding: 80px 0;
        text-align: center;
        margin-top: 40px;
      }

      .premium-wrapper h2 {
        font-size: 2.5em;
        margin-bottom: 60px;
        color: #ffd700;
      }

      .premium-content-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-bottom: 40px; /* Tambah margin bawah untuk tombol */
      }

      .premium-card {
        background-color: #2a2a2a;
        padding: 30px;
        border-radius: 8px;
        text-align: left;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }

      .premium-card h3 {
        margin-top: 0;
        color: #f0f0f0;
        display: flex; /* Menggunakan flexbox untuk ikon dan teks */
        align-items: center; /* Pusatkan ikon dan teks secara vertikal */
        gap: 10px; /* Jarak antara ikon dan teks */
      }

      .premium-card h3 .icon {
          font-size: 1.5em; /* Ukuran ikon */
          color: #ffd700; /* Warna ikon */
          line-height: 1; /* Pastikan tinggi baris ikon sesuai */
      }


      .premium-card p {
        margin-bottom: 20px;
        color: #cccccc;
      }

      .button, .payment-button {
        display: inline-block;
        background-color: #ffd700;
        color: #1a1a1a;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: 600;
        transition: background-color 0.3s ease;
        border: none;
        cursor: pointer;
      }

      .button:hover, .payment-button:hover {
        background-color: #e6c200;
        text-decoration: none;
      }

      /* Styling for the new pay button container */
      .pay-button-container {
        text-align: center;
        padding-top: 20px; /* Memberikan jarak dari grid di atasnya */
      }


      /* Footer */
      .footer {
        background-color: #1a1a1a;
        color: #cccccc;
        text-align: center;
        padding: 40px 0;
        border-top: 1px solid #333;
      }

      .footer h3 {
          color: #f0f0f0;
          margin-bottom: 15px;
      }

      .footer strong {
        color: #f0f0f0;
        display: block;
        margin-top: 20px;
      }

      .footer p, .footer a {
        margin: 5px 0;
        color: #cccccc;
      }

      .footer a {
        color: #ffd700;
      }


      /* Responsive Design */
      @media (max-width: 1024px) {
        .hero .container {
          flex-direction: column;
          text-align: center;
        }

        .hero-content,
        .hero-image {
          flex: none;
          width: 100%;
        }

        .hero-content h1 {
          font-size: 3em;
        }
      }

      @media (max-width: 768px) {
        .navbar-right {
            display: none;
            flex-direction: column;
            width: 100%;
            position: absolute;
            top: 70px;
            left: 0;
            background-color: #1a1a1a;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px 0;
            z-index: 100;
        }

        .navbar-right.show {
            display: flex;
        }

        .navbar-right a,
        .navbar-right .dropdown {
            width: 100%;
            text-align: center;
            margin: 10px 0;
        }

        .hamburger {
            display: block;
        }

        .dropdown-menu {
            position: static;
            text-align: center;
            width: 100%;
        }

        .hero-content h1 {
          font-size: 2.5em;
        }

        .premium-wrapper h2 {
          font-size: 2em;
        }

        .premium-content-grid {
          grid-template-columns: 1fr;
        }
      }
    </style>
    {{-- Include Midtrans Snap JS --}}
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
</head>
<body>

    {{-- Navbar --}}
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
                <a href="#" id="openTentang">Tentang</a>
                <a href="#materi-section">Materi</a>
                <a href="#kontak-footer">Kontak</a>
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

    {{-- Hero Section --}}
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>CELEP</h1>
                <p>
                    Platform Interaktif Untuk Belajar Pemrograman C++ Dengan Mudah Dan
                    Menyenangkan. Mulai Perjalanan Codingmu Sekarang Dan Kuasai Bahasa
                    Pemrograman Yang Powerful Ini!
                </p>
            </div>
            <div class="hero-image">
                <div class="image-box">
                    <img
                        src="{{ asset('img/coding-illustration.png') }}"
                        alt="Programmer working on laptop"
                    />
                </div>
            </div>
        </div>
    </section>

    {{-- Premium Features Section --}}
    <section class="premium-wrapper" id="materi-section">
        <div class="container">
            <h2>FITUR PREMIUM</h2>
            <div class="premium-content-grid">
                <div class="premium-card">
                    <h3><span class="icon">📚</span> Materi Lengkap C++</h3>
                    <p>
                        Mendapatkan hak akses untuk membaca materi lanjutan level 4 - 6
                    </p>
                </div>
                <div class="premium-card">
                    <h3><span class="icon">🎬</span> Video Pembelajaran Tambahan</h3>
                    <p>
                        Mendapatkan hak akses untuk menonton video pembelajaran dari
                        materi level 4 - 6
                    </p>
                </div>
                <div class="premium-card">
                    <h3><span class="icon">💡</span> Kuis Interaktif</h3>
                    <p>
                        Mendapatkan keuntungan untuk menyelesaikan kuis-kuis yang
                        interaktif
                    </p>
                </div>
                <div class="premium-card">
                    <h3><span class="icon">💻</span> Akses Compiler Online</h3>
                    <p>
                        Mendapatkan hak akses untuk ngoding secara langsung melalui
                        compiler terintegrasi
                    </p>
                </div>
                <div class="premium-card">
                    <h3><span class="icon">📜</span> Mendapatkan Sertifikat</h3>
                    <p>Mendapatkan Sertifikat Berstandar Nasional</p>
                </div>
                <div class="premium-card">
                    <h3><span class="icon">💰</span> Tidak Ada Biaya Bulanan</h3>
                    <p>Cukup sekali bayar, dapat menikmati semua fitur</p>
                </div>
            </div>

            {{-- Tombol "Bayar Sekarang" di bawah premium-content-grid --}}
            @auth
            <div class="pay-button-container">
                <button id="pay-button" class="payment-button">Bayar Sekarang</button>
            </div>
            @endauth

        </div>
    </section>

    {{-- Footer --}}
    <div class="footer" id="kontak-footer">
        <p>&copy; 2025 CELEP. All rights reserved.</p>
        <strong>Kontak Kami</strong><br>
        Email: <a href="mailto:support@celep.com">support@celep.com</a><br>
        Telepon: +62 812-3456-7890
    </div>

    {{-- JavaScript --}}
    <script>
        function toggleNavbar() {
            const navbar = document.getElementById('navbarMenu');
            navbar.classList.toggle('show');
        }

        document.addEventListener('DOMContentLoaded', function () {
            const openBtn = document.getElementById('openTentang');
            const modal = document.getElementById('tentangModal'); // Pastikan ini ada
            const closeBtn = document.getElementById('closeModal'); // Pastikan ini ada

            if (openBtn && modal && closeBtn) {
                openBtn.addEventListener('click', function (e) {
                    e.preventDefault();
                    modal.style.display = 'flex';
                });

                closeBtn.addEventListener('click', function () {
                    modal.style.display = 'none';
                });

                window.addEventListener('click', function (event) {
                    if (event.target === modal) {
                        modal.style.display = 'none';
                    }
                });
            }

            // Dropdown Profile
            const dropdownToggle = document.querySelector('.dropdown-toggle');
            const dropdownMenu = document.querySelector('.dropdown-menu');

            if (dropdownToggle && dropdownMenu) {
                dropdownToggle.addEventListener('click', function() {
                    dropdownMenu.classList.toggle('show-dropdown');
                });

                window.addEventListener('click', function(event) {
                    if (!event.target.matches('.dropdown-toggle') && !event.target.closest('.dropdown')) {
                        if (dropdownMenu.classList.contains('show-dropdown')) {
                            dropdownMenu.classList.remove('show-dropdown');
                        }
                    }
                });
            }
        });

        // Script Midtrans
        var payButton = document.getElementById('pay-button');
        if (payButton) { // Pastikan tombol ada sebelum menambahkan event listener
            payButton.addEventListener('click', function () {
                window.snap.pay('{{ $snapToken ?? '' }}', {
                    onSuccess: function(result) {
                        fetch("/payment/verify", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": "{{ csrf_token() }}"
                            },
                            body: JSON.stringify({ order_id: result.order_id })
                        }).then(response => {
                            if (response.ok) {
                                window.location.href = "/payment/success";
                            } else {
                                // Handle server error during verification
                                alert("Verifikasi pembayaran gagal di server. Silakan hubungi dukungan.");
                                console.error("Verification failed:", response.status, response.statusText);
                            }
                        }).catch(error => {
                            // Handle network or other fetch errors
                            alert("Terjadi kesalahan jaringan saat verifikasi pembayaran. Silakan coba lagi.");
                            console.error("Fetch error during verification:", error);
                        });
                    },
                    onPending: function(result) {
                        alert("Menunggu pembayaran Anda diselesaikan...");
                        console.log(result);
                    },
                    onError: function(result) {
                        alert("Pembayaran gagal! Silakan coba lagi atau pilih metode lain.");
                        console.log(result);
                    },
                    onClose: function() {
                        alert('Anda menutup popup pembayaran!');
                    }
                });
            });
        }
    </script>

</body>
</html>