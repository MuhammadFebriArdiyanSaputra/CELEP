<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CELEP - Belajar C++</title>
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
      padding: 20px 40px;
      background-color: #000;
    }

    .navbar-left {
      display: flex;
      align-items: center;
    }

    .navbar-left img {
      height: 40px;
      margin-right: 10px;
    }

    .navbar-right a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
      font-weight: bold;
    }

    .signup-btn {
      background-color: #fdec00;
      color: black;
      padding: 10px 20px;
      border-radius: 6px;
      text-decoration: none;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      padding: 40px;
      gap: 20px;
    }

    .left {
      flex: 1 1 400px;
      min-width: 280px;
    }

    .left h1 {
      font-size: 48px;
      color: #fdec00;
      margin-bottom: 20px;
    }

    .left p {
      font-size: 16px;
      line-height: 1.8;
      color: #d1d1d1;
      margin-bottom: 30px;
    }

    .get-started-btn {
      background-color: #fdec00;
      color: black;
      padding: 12px 24px;
      font-size: 16px;
      font-weight: bold;
      border-radius: 6px;
      text-decoration: none;
      display: inline-block;
    }

    .right {
      flex: 1 1 400px;
      max-width: 100%;
      background-color: white;
      border-radius: 12px;
      padding: 10px;
      box-shadow: 0 0 0 5px #fdec00;
    }

    .right img {
      width: 70%;
      height: auto;
      border-radius: 10px;
      display: block;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        padding: 20px;
        text-align: center;
      }

      .navbar {
        flex-direction: column;
        gap: 10px;
      }

      .left h1 {
        font-size: 36px;
      }

      .right {
        margin-top: 20px;
      }
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      background-color: #000;
      flex-wrap: wrap;
    }

    .navbar-right {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    /* --- Dorpdown Porifle --- */
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

    /* --- Borgar Mobile --- */
    .hamburger {
      display: none;
      font-size: 26px;
      cursor: pointer;
      color: white;
    }

    /* --- Layout --- */
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

      .navbar-right.show {
        display: flex;
      }
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

    {{-- Borgar --}}
    <div class="hamburger" onclick="toggleNavbar()">☰</div>

    <div class="navbar-right" id="navbarMenu">
      @auth
        <a href="{{ route('welcome') }}">Home</a>
        <a href="#">Tentang</a>
        <a href="#">Materi</a>
        <a href="#">Kontak</a>
        <div class="dropdown">
          <button class="dropdown-toggle">👤</button>
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
    <div class="left">
      <h1>CELEP</h1>
      <p>Platform Interaktif Untuk Belajar Pemrograman C++ Dengan Mudah Dan Menyenangkan. Mulai Perjalanan Codingmu Sekarang Dan Kuasai Bahasa Pemrograman Yang Powerful Ini!</p>
      <a href="{{ url('/signin') }}" class="get-started-btn">Get Started</a>
    </div>
    <div class="right">
      <img src="{{ asset('img/coding-illustration.png') }}" alt="Coding Illustration">
    </div>
  </div>

  <script>
    function toggleNavbar() {
      var menu = document.getElementById("navbarMenu");
      menu.classList.toggle("show");
    }
  </script>

</body>
</html>
