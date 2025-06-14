<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CELEP - Belajar C++</title>
  <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet"/>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background-color: #0e0e0e;
      color: white;
      overflow-x: hidden;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      padding: 20px 40px;
      background-color: #000;
    }

    .navbar-left img {
      height: 40px;
    }

    .navbar-right {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .navbar-right a {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    .signup-btn {
      background-color: #fdec00;
      color: black;
      padding: 10px 20px;
      border-radius: 6px;
      text-decoration: none;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-toggle {
      background-color: #fdec00;
      color: black;
      padding: 8px;
      font-size: 18px;
      border-radius: 50%;
      border: none;
      cursor: pointer;
    }

    .dropdown-menu {
      display: none;
      position: absolute;
      right: 0;
      background-color: #1a1a1a;
      color: white;
      min-width: 140px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      z-index: 1;
      border-radius: 6px;
    }

    .dropdown-menu a,
    .dropdown-menu form button {
      color: white;
      padding: 10px 15px;
      text-decoration: none;
      display: block;
      background: none;
      border: none;
      text-align: left;
      width: 100%;
    }

    .dropdown-menu a:hover,
    .dropdown-menu form button:hover {
      background-color: #333;
    }

    .dropdown:hover .dropdown-menu {
      display: block;
    }

    .hamburger {
      display: none;
      font-size: 26px;
      cursor: pointer;
      color: white;
    }

    @media (max-width: 768px) {
      .hamburger {
        display: block;
      }

      .navbar-right {
        display: none;
        flex-direction: column;
        width: 100%;
        margin-top: 10px;
      }

      .navbar-right.show {
        display: flex;
      }

      .navbar-right a,
      .dropdown {
        width: 100%;
        text-align: center;
        padding: 10px 0;
      }

      .dropdown-menu {
        position: static;
        box-shadow: none;
      }
    }

    .wrapper {
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 40px;
      gap: 40px;
      box-sizing: border-box;
    }

    .left {
      flex: 1;
      max-width: 500px;
      background-color: #1a1a1a;
      padding: 32px;
      border-radius: 16px;
      box-shadow: 0 0 12px rgba(0,0,0,0.5);
    }

    .left h1 {
      color: #fdec00;
      font-size: 32px;
      margin-bottom: 16px;
    }

    .left p {
      font-size: 16px;
      margin-bottom: 16px;
      line-height: 1.5;
    }

    .price {
      font-weight: 600;
      margin-top: 16px;
      margin-bottom: 12px;
    }

    ul.features {
      list-style: none;
      padding: 0;
      margin: 0 0 24px 0;
    }

    ul.features li {
      background-color: #2a2a2a;
      margin-bottom: 12px;
      padding: 12px 16px;
      border-radius: 8px;
      font-size: 16px;
    }

    .payment-button {
      background-color: #fdec00;
      color: #000;
      padding: 14px 28px;
      border-radius: 8px;
      font-weight: 600;
      font-size: 16px;
      text-decoration: none;
      transition: background-color 0.3s ease;
      display: inline-block;
    }

    .payment-button:hover {
      background-color: #e0d000;
    }

    .right {
      flex: 1;
      text-align: center;
    }

    .right img {
      max-width: 100%;
      height: auto;
      border-radius: 12px;
    }

    @media (max-width: 768px) {
      .wrapper {
        flex-direction: column;
        padding: 24px;
      }

      .right {
        margin-top: 32px;
      }
    }

    .footer {
      background-color: #464646;
      padding: 30px 20px;
      text-align: center;
      color: #fdec00;
      font-size: 1rem;
      margin-top: 60px;
    }

    .footer a {
      color: #fdec00;
      text-decoration: none;
    }

    .footer a:hover {
      text-decoration: underline;
    }
  </style>
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
        <a href="#" id="openTentang">Tentang</a>
        <a href="#materi-section">Materi</a>
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

  @auth
  <div class="wrapper">
    <div class="left">
      <h1>Premium</h1>
      <p>Bayar satu kali untuk membuka semua materi pembelajaran C++ di CELEP.</p>
      <p class="price">Dapatkan semua fitur berikut:</p>
      <ul class="features">
        <li>📘 Materi lengkap C++</li>
        <li>🧠 Kuis interaktif</li>
        <li>🎥 Video pembelajaran</li>
        <li>💻 Akses Compiler Online</li>
        <li>✅ Tidak ada biaya bulanan</li>
      </ul>
      <button id="pay-button" class="payment-button">Bayar Sekarang</button>
    </div>

    <div class="right">
      <img src="{{ asset('img/rgby.png') }}" alt="PAY!" />
    </div>
  </div>
  @endauth

  <div class="footer" id="kontak">
    <p>&copy; 2025 CELEP. All rights reserved.</p>
    <strong>Kontak Kami</strong><br>
    Email: <a href="mailto:support@celep.com">support@celep.com</a><br>
    Telepon: +62 812-3456-7890
  </div>

  <script>
    function toggleNavbar() {
      const navbar = document.getElementById('navbarMenu');
      navbar.classList.toggle('show');
    }

    document.addEventListener('DOMContentLoaded', function () {
      const openBtn = document.getElementById('openTentang');
      const modal = document.getElementById('tentangModal');
      const closeBtn = document.getElementById('closeModal');

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
    });
  </script>

  <script type="text/javascript">
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        window.snap.pay('{{ $snapToken }}', {
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
                }
            });
          },
          onPending: function(result) {
            alert("Menunggu pembayaran...");
            console.log(result);
          },
          onError: function(result) {
            alert("Pembayaran gagal!");
            console.log(result);
          },
          onClose: function() {
            alert('Kamu menutup popup pembayaran!');
          }
        });
      });
    </script>

</body>
</html>
