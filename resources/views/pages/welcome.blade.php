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

    /* css untuk tentang celep! */
    .tentang-celep {
      padding: 60px 20px;
      color: white;
      background-color: #3A3A3A;
    }

    .about-container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .section-title {
      text-align: center;
      font-size: 2.8rem;
      font-weight: bold;
      color: #ffeb3b;
      margin-bottom: 60px;
    }

    .content-row {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
    }

    .intro {
      flex: 2;
      min-width: 300px;
    }

    .intro p {
      font-size: 1rem;
      line-height: 1.7;
      margin: 10px 0;
      color: #ffffff;
    }

    .features {
      flex: 3;
      display: flex;
      flex-direction: row;
      gap: 20px;
      justify-content: space-between;
      flex-wrap: wrap;
      min-width: 300px;
    }

    .feature-box {
      flex: 1;
      text-align: center;
      padding: 10px;
    }

    .icon {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    .feature-title {
      color: #ffeb3b;
      font-size: 1.2rem;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .feature-box p {
      color: white;
      font-size: 0.95rem;
      line-height: 1.5;
    }

    /* footer */
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

    /* Materi */
    .materi-section {
      padding: 40px 20px;
      background-color: #0a0a0a;
      color: white;
    }

    .materi-container {
      max-width: 1000px;
      margin: 0 auto;
      padding: 0 24px;
    }

    /* .materi-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
      margin-top: 16px;
    } */

    .section-title {
      font-size: 2rem;
      font-weight: bold;
      text-align: center;
    }

    .materi-subtitle {
      text-align: center;
      margin-bottom: 40px;
      font-size: 1.1rem;
      color: #ccc;
    }

    .level {
      margin-bottom: 48px;
    }

    .level h3 {
      font-size: 1.5rem;
      margin-bottom: 16px;
      font-weight: bold;
    }

    .materi-row {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
    }

    .materi-row span {
      background-color: #1a1a1a;
      padding: 16px;
      border-radius: 12px;
      flex: 1 1 220px;
      text-align: center;
      font-weight: bold;
      box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
    }

    .materi-row span:hover {
      transform: scale(1.05);
      transition: transform 0.3s ease;
    }

    /* Warna per level */
    .level-1 .materi-row span {
      background-color: rgba(7, 129, 7, 0.8);
    }
    .level-2 .materi-row span {
      background-color: rgba(201, 185, 42, 0.8);
    }
    .level-3 .materi-row span {
      background-color: rgba(7, 98, 169, 0.8);
    }
    .level-4 .materi-row span {
      background-color: rgba(156, 39, 176, 0.8);
    }
    .level-5 .materi-row span {
      background-color: rgba(244, 67, 54, 0.8);
    }
    .level-6 .materi-row span {
      background-color: rgba(121, 85, 72, 0.8);
    }

    /* Locked state */
    .materi-row span.locked-item {
      position: relative;
      color: #bbb;
      border: 2px dashed #666;
      padding: 20px;
      font-weight: normal;
      opacity: 0.8;
    }

    .materi-row span.locked-item::before {
      content: '🔒';
      position: absolute;
      top: 8px;
      left: 8px;
      font-size: 1.2rem;
    }

    .materi-row span.locked-item a {
      display: inline-block;
      margin-top: 10px;
      color: white;
      padding: 6px 12px;
      border-radius: 6px;
      font-size: 0.85rem;
      font-weight: bold;
      text-decoration: none;
    }

    .level-2 .materi-row span.locked-item a {
      display: inline-block;
      margin-top: 10px;
      color: black;
      padding: 6px 12px;
      border-radius: 6px;
      font-size: 0.85rem;
      font-weight: bold;
      text-decoration: none;
    }

    .level-2 .materi-row span.locked-item a:hover {
      background-color: #FFEB3B;
      color: #000;
    }

    .level-3 .materi-row span.locked-item a:hover {
      background-color: #2196F3;
      color: white;
    }

    .level-4 .materi-row span.locked-item a:hover {
      background-color: #9C27B0;
      color: white;
    }

    .level-5 .materi-row span.locked-item a:hover {
      background-color: #F44336;
      color: white;
    }

    .level-6 .materi-row span.locked-item a:hover {
      background-color: #795548;
      color: white;
    }

    a.btn-access {
      display: inline-block;
      margin-top: 8px;
      padding: 8px 16px;
      border-radius: 8px;
      font-weight: bold;
      color: white;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .level-1 .btn-access {
      background-color: #4CAF50;
    }
    .level-2 .btn-access {
      background-color: #FFEB3B;
      color: black; /* teks hitam agar kontras dengan kuning */
    }
    .level-3 .btn-access {
      background-color: #2196F3;
    }
    .level-4 .btn-access {
      background-color: #9C27B0;
    }
    .level-5 .btn-access {
      background-color: #F44336;
    }
    .level-6 .btn-access {
      background-color: #795548;
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
    <div class="left">
      <h1>CELEP</h1>
      <p>Platform Interaktif Untuk Belajar Pemrograman C++ Dengan Mudah Dan Menyenangkan. Mulai Perjalanan Codingmu Sekarang Dan Kuasai Bahasa Pemrograman Yang Powerful Ini!</p>
      @guest
        <a href="{{ url('/signin') }}" class="get-started-btn">Get Started</a>
      @endguest
    </div>
    <div class="right">
      <img src="{{ asset('img/coding-illustration.png') }}" alt="Coding Illustration">
    </div>
  </div>

  <section class="tentang-celep">
    <div class="about-container">
      <h2 class="section-title">Tentang CELEP</h2>

      <div class="content-row">
        <div class="intro">
          <p>
            CELEP adalah platform pembelajaran C++ interaktif yang dirancang untuk pemula hingga tingkat menengah.
            Kami menyediakan materi yang mudah dipahami, latihan interaktif, dan compiler online untuk langsung mencoba kode.
          </p>
          <p>
            Dengan pendekatan yang menyenangkan dan fleksibel, CELEP membantu kamu menguasai bahasa pemrograman C++ secara efektif dan efisien.
          </p>
        </div>

        <div class="features">
          <div class="feature-box">
            <div class="icon">📱</div>
            <h3 class="feature-title">Fleksibel</h3>
            <p>Belajar kapan saja dan di mana saja dengan akses mudah dari semua perangkat.</p>
          </div>
          <div class="feature-box">
            <div class="icon">😊</div>
            <h3 class="feature-title">Menyenangkan</h3>
            <p>Materi interaktif dan latihan yang membuat belajar jadi seru dan tidak membosankan.</p>
          </div>
          <div class="feature-box">
            <div class="icon">💡</div>
            <h3 class="feature-title">Mudah Dipahami</h3>
            <p>Penjelasan yang jelas dan contoh praktis untuk membantu kamu cepat mengerti konsep.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="materi-section">
    <div class="materi-container">
      <h2 class="section-title">Materi Pembelajaran</h2>
      <p class="materi-subtitle">Pelajari C++ Mulai Dari Dasar Hingga Project Akhir.</p>

      <div class="materi-grid">

        <div class="level level-1">
          <h3>Level 1: Pengenalan Dasar</h3>
          <div class="materi-row">
            <span>📘 Apa Itu C++?<br><a href="{{route('materi1.1')}}" class="btn-access">Akses Materi</a></span>
            <span>Tools & Instalasi IDE<br><a href="{{route('materi1.2')}}" class="btn-access">Akses Materi</a></span>
            <span>Struktur Program C++<br><a href="{{route('materi1.3')}}" class="btn-access">Akses Materi</a></span>
            <span>Program Pertama: Kalkulator<br><a href="{{route('materi1.4')}}" class="btn-access">Akses Materi</a></span>
          </div>
        </div>

        @auth
          <div class="level level-2">
            <h3>Level 2: Dasar Pemrograman</h3>
            <div class="materi-row">
              <span>Variabel & Tipe Data<br><a href="{{route('materi2.1')}}" class="btn-access">Akses Materi</a></span>
              <span>Input & Output (Cin, Cout)<br><a href="{{route('materi2.2')}}" class="btn-access">Akses Materi</a></span>
              <span>Operator Dasar<br><a href="{{route('materi2.3')}}" class="btn-access">Akses Materi</a></span>
              <span>Struktur Kontrol: If, Else, Switch<br><a href="{{route('materi2.4')}}" class="btn-access">Akses Materi</a></span>
              <span>Perulangan: For, While, Do While<br><a href="{{route('materi2.5')}}" class="btn-access">Akses Materi</a></span>
            </div>
          </div>

          <div class="level level-3">
            <h3>Level 3: Struktur Data Dasar</h3>
            <div class="materi-row">
              <span>Array 1D dan 2D<br><a href="{{route('materi3.1')}}" class="btn-access">Akses Materi</a></span>
              <span>String dan Operasi String<br><a href="{{route('materi3.2')}}" class="btn-access">Akses Materi</a></span>
              <span>Fungsi dan Rekursi<br><a href="{{route('materi3.3')}}" class="btn-access">Akses Materi</a></span>
            </div>
          </div>

          @if(auth()->user()->isPremium)
            <div class="level level-4">
              <h3>Level 4: Konsep Lanjut</h3>
              <div class="materi-row">
                <span>Pointer Dasar<br><a href="{{route('materi4.1')}}" class="btn-access">Akses Materi</a></span>
                <span>Struct & Union<br><a href="{{route('materi4.2')}}" class="btn-access">Akses Materi</a></span>
                <span>File Handling<br><a href="{{route('materi4.3')}}" class="btn-access">Akses Materi</a></span>
                <span>Dynamic Memory (New/Delete)<br><a href="{{route('materi4.4')}}" class="btn-access">Akses Materi</a></span>
              </div>
            </div>

            <div class="level level-5">
              <h3>Level 5: Pemrograman OOP</h3>
              <div class="materi-row">
                <span>Class & Object<br><a href="{{route('materi5.1')}}" class="btn-access">Akses Materi</a></span>
                <span>Constructor & Destructor<br><a href="{{route('materi5.2')}}" class="btn-access">Akses Materi</a></span>
                <span>Inheritance<br><a href="{{route('materi5.3')}}" class="btn-access">Akses Materi</a></span>
                <span>Polymorphism & Overloading<br><a href="{{route('materi5.4')}}" class="btn-access">Akses Materi</a></span>
                <span>Encapsulation & Access Modifier<br><a href="{{route('materi5.5')}}" class="btn-access">Akses Materi</a></span>
              </div>
            </div>

            <div class="level level-6">
              <h3>Level 6: Studi Kasus & Project</h3>
              <div class="materi-row">
                <span>Mini Project 1: Sistem Kasir<br><a href="{{route('materi6.1')}}" class="btn-access">Akses Materi</a></span>
                <span>Mini Project 2: Perpustakaan Digital<br><a href="{{route('materi6.2')}}" class="btn-access">Akses Materi</a></span>
                <span>Evaluasi Akhir (Kuis & Tugas)<br><a href="{{route('materi6.3')}}" class="btn-access">Akses Materi</a></span>
                <span>Praktik Langsung (Via PaizaIO)<br><a href="{{route('materi6.4')}}" class="btn-access">Akses Materi</a></span>
              </div>
            </div>

          @else
          <div class="level level-4">
            <h3>Level 4: Konsep Lanjut 🔒</h3>
            <div class="materi-row">
              <span class="locked-item">Pointer Dasar<br><a href="/premium" class="btn-upgrade">Bayar untuk Akses</a></span>
              <span class="locked-item">Struct & Union<br><a href="/premium" class="btn-upgrade">Bayar untuk Akses</a></span>
              <span class="locked-item">File Handling<br><a href="/premium" class="btn-upgrade">Bayar untuk Akses</a></span>
              <span class="locked-item">Dynamic Memory<br><a href="/premium" class="btn-upgrade">Bayar untuk Akses</a></span>
            </div>
          </div>

          <div class="level level-5">
            <h3>Level 5: Pemrograman OOP 🔒</h3>
            <div class="materi-row">
              <span class="locked-item">Class & Object<br><a href="/premium" class="btn-upgrade">Bayar untuk Akses</a></span>
              <span class="locked-item">Constructor & Destructor<br><a href="/premium" class="btn-upgrade">Bayar untuk Akses</a></span>
              <span class="locked-item">Inheritance<br><a href="/premium" class="btn-upgrade">Bayar untuk Akses</a></span>
              <span class="locked-item">Polymorphism & Overloading<br><a href="/premium" class="btn-upgrade">Bayar untuk Akses</a></span>
              <span class="locked-item">Encapsulation & Access Modifier<br><a href="/premium" class="btn-upgrade">Bayar untuk Akses</a></span>
            </div>
          </div>

          <div class="level level-6">
            <h3>Level 6: Studi Kasus & Project 🔒</h3>
            <div class="materi-row">
              <span class="locked-item">Mini Project 1<br><a href="/premium" class="btn-upgrade">Bayar untuk Akses</a></span>
              <span class="locked-item">Mini Project 2<br><a href="/premium" class="btn-upgrade">Bayar untuk Akses</a></span>
              <span class="locked-item">Evaluasi Akhir<br><a href="/premium" class="btn-upgrade">Bayar untuk Akses</a></span>
              <span class="locked-item">Praktik Langsung<br><a href="/premium" class="btn-upgrade">Bayar untuk Akses</a></span>
            </div>
          </div>
        @endif

        @else
          <div class="level level-2">
            <h3>Level 2: Dasar Pemrograman 🔒</h3>
            <div class="materi-row">
              <span class="locked-item">Variabel & Tipe Data<br><a href="/signin" class="btn-upgrade">Login untuk Akses</a></span>
              <span class="locked-item">Input & Output<br><a href="/signin" class="btn-upgrade">Login untuk Akses</a></span>
              <span class="locked-item">Operator Dasar<br><a href="/signin" class="btn-upgrade">Login untuk Akses</a></span>
              <span class="locked-item">Struktur Kontrol : If, Else, Switch<br><a href="/signin" class="btn-upgrade">Login untuk Akses</a></span>
              <span class="locked-item">Perulangan<br><a href="/signin" class="btn-upgrade">Login untuk Akses</a></span>
            </div>
          </div>

          <div class="level level-3">
            <h3>Level 3: Struktur Data 🔒</h3>
            <div class="materi-row">
              <span class="locked-item">Array & 2D<br><a href="/signin" class="btn-upgrade">Login untuk Akses</a></span>
              <span class="locked-item">String<br><a href="/signin" class="btn-upgrade">Login untuk Akses</a></span>
              <span class="locked-item">Fungsi & Rekursi<br><a href="/signin" class="btn-upgrade">Login untuk Akses</a></span>
            </div>
          </div>

          <div class="level level-4">
            <h3>Level 4: Konsep Lanjut 🔒</h3>
            <div class="materi-row">
              <span class="locked-item">Pointer<br><a href="/signin" class="btn-upgrade">Login untuk Akses</a></span>
              <span class="locked-item">Struct & Union<br><a href="/signin" class="btn-upgrade">Login untuk Akses</a></span>
              <span class="locked-item">File Handling<br><a href="/signin" class="btn-upgrade">Login untuk Akses</a></span>
              <span class="locked-item">Dynamic Memory<br><a href="/signin" class="btn-upgrade">Login untuk Akses</a></span>
            </div>
          </div>

          <div class="level level-5">
            <h3>Level 5: OOP 🔒</h3>
            <div class="materi-row">
              <span class="locked-item">Class & Object<br><a href="/signin" class="btn-upgrade">Login untuk Akses</a></span>
              <span class="locked-item">Constructor & Destructor<br><a href="/signin" class="btn-upgrade">Login untuk Akses</a></span>
              <span class="locked-item">Inheritance<br><a href="/signin" class="btn-upgrade">Login untuk Akses</a></span>
              <span class="locked-item">Polymorphism & Overloading<br><a href="/signin" class="btn-upgrade">Login untuk Akses</a></span>
              <span class="locked-item">Encapsulation & Access Modifier<br><a href="/signin" class="btn-upgrade">Login untuk Akses</a></span>
            </div>
          </div>

          <div class="level level-6">
            <h3>Level 6: Studi Kasus 🔒</h3>
            <div class="materi-row">
              <span class="locked-item">Mini Project<br><a href="/signin" class="btn-upgrade">Login untuk Akses</a></span>
            </div>
          </div>
        @endauth

      </div>
    </div>
  </section>


  {{-- footer --}}
  <div class="footer">
    <strong>Kontak Kami</strong><br>
    Email: <a href="mailto:support@celep.com">support@celep.com</a><br>
    Telepon: +62 812-3456-7890
  </div>

</body>
<script>
    function toggleNavbar() {
      const navbar = document.getElementById('navbarMenu');
      navbar.classList.toggle('show');
    }
  </script>
</html>