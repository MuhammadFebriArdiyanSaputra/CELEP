
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CELEP - Belajar C++ Interaktif</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Inter', sans-serif;
      background-color: #0b0b0d;
      color: white;
      overflow-x: hidden;
    }
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: #0b0b0d;
      z-index: 10;
    }
    .logo {
      width: 40px;
    }
    nav a {
      color: white;
      text-decoration: none;
      margin-left: 30px;
      font-weight: bold;
    }
    .hero {
      display: flex;
      justify-content: space-between;
      align-items: center;
      min-height: 100vh;
      padding: 120px 60px 60px;
      position: relative;
    }
    .text-section {
      flex: 1;
      max-width: 50%;
    }
    .brand {
      font-size: 72px;
      font-weight: 900;
      color: #FFD700;
      margin-bottom: 30px;
    }
    .description {
      font-size: 24px;
      line-height: 1.6;
    }
    .cta-button {
      display: inline-block;
      background-color: #FFD700;
      color: black;
      font-weight: bold;
      padding: 15px 60px;
      border-radius: 10px;
      text-decoration: none;
      margin-top: 40px;
    }
    .image-section {
      flex: 1;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .hero-image {
      width: 100%;
      max-width: 400px;
      z-index: 2;
    }
    .top-left {
      position: absolute;
      top: -20px;
      left: -20px;
      width: 80px;
      height: 80px;
      border-top: 6px solid #FFD700;
      border-left: 6px solid #FFD700;
      z-index: 1;
    }
    .yellow-box {
      position: absolute;
      bottom: -60px;
      right: -30px;
      width: 400px;
      height: 200px;
      background-color: #FFD700;
      z-index: 0;
    }
    .section {
      padding: 80px 60px;
      text-align: center;
    }
    .section h2 {
      font-size: 36px;
      margin-bottom: 30px;
      color: #FFD700;
    }
    .section.gray {
      background-color: #1a1a1a;
    }
    .features {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
      margin-top: 30px;
    }
    .feature {
      max-width: 300px;
      text-align: center;
    }
    .feature-icon {
      font-size: 40px;
      color: #FFD700;
      margin-bottom: 15px;
    }
    .cards {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      margin-top: 30px;
    }
    .card {
      background-color: #003300;
      padding: 20px;
      border-radius: 10px;
      width: 260px;
      color: white;
      text-align: left;
      box-shadow: 0 0 10px #000;
    }
    .card ul { margin-top: 10px; }
    .card ul li { margin-bottom: 5px; }
    .card.yellow { background-color: #666600; }
    .card.blue { background-color: #000066; }
    .card.purple { background-color: #330033; }
    .card.red { background-color: #660000; }
    .card.brown { background-color: #4B2E05; }
    @media (max-width: 768px) {
      .hero {
        flex-direction: column;
        padding: 100px 30px 30px;
        text-align: center;
      }
      .text-section, .image-section {
        max-width: 100%;
      }
      .cards {
        flex-direction: column;
        align-items: center;
      }
      .features {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>
  <header>
    <img src="img/Celep1 1.png" class="logo" alt="Logo CELEP">
    <nav style="display: flex; align-items: center; gap: 30px;">
        <a href="#">Home</a>
        <a href="#tentang">Tentang</a>
        <a href="#materi">Materi</a>
        <a href="#kontak">Kontak</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="margin: 0; padding: 0;">
            @csrf
            <button type="submit" style="background: none; border: none; color: var(--text-yellow); font-weight: bold; cursor: pointer;">
            <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </nav>

  </header>

  <main class="hero">
    <section class="text-section">
      <h1 class="brand">CELEP</h1>
      <p class="description">
        Platform Interaktif Untuk Belajar Pemrograman C++ Dengan Mudah Dan Menyenangkan. <br />
        Mulai Perjalanan Codingmu Sekarang Dan Kuasai Bahasa Pemrogramman Yang Powerful Ini!
      </p>
      <a href="#" class="cta-button">Get’s Started</a>
    </section>

    <section class="image-section">
      <div class="top-left"></div>
      <img src="{{ asset('img/start-photoaidcom-greyscale 1.png') }}" class="hero-image" />
      <div class="yellow-box"></div>
    </section>
  </main>
  </main>

  <section class="section gray" id="tentang">
    <h2>Tentang CELEP</h2>
    <p style="max-width: 800px; margin: auto;">
      CELEP Adalah Platform Pembelajaran C++ Interaktif Yang Dirancang Untuk Pemula Hingga Tingkat Menengah, Kami Menyediakan Materi Yang Mudah Dipahami, Latihan Interaktif, Dan Compiler Online Untuk Langsung Mencoba Kode.
    </p>
    <div class="features">
      <div class="feature">
        <div class="feature-icon">📱</div>
        <h3>Fleksibel</h3>
        <p>Belajar Kapan Saja Dan Di Mana Saja Dengan Akses Mudah Di Semua Perangkat.</p>
      </div>
      <div class="feature">
        <div class="feature-icon">😊</div>
        <h3>Menyenangkan</h3>
        <p>Materi Interaktif Dan Latihan Yang Seru Dan Tidak Membosankan.</p>
      </div>
      <div class="feature">
        <div class="feature-icon">📖</div>
        <h3>Mudah Dipahami</h3>
        <p>Penjelasan Yang Jelas Dan Contoh Praktik Membantu Kamu Cepat Mengerti Konsep.</p>
      </div>
    </div>
  </section>
  </main>
  <section class="section materi" id="materi">
    <h2>Materi Pembelajaran</h2>
    <div class="cards">
      <div class="card">
        <h3>Level 1: Pengenalan Dasar</h3>
        <ul>
          <li>Apa Itu C++?</li>
          <li>Tools & Instalasi IDE</li>
          <li>Struktur Program C++</li>
          <li>Program Pertama: Kalkulator</li>
        </ul>
        <button class="cta-button">Akses Materi</button>
      </div>
      <div class="card yellow">
        <h3>Level 2: Dasar Pemrograman</h3>
        <ul>
          <li>Variabel & Tipe Data</li>
          <li>Input & Output (cin, cout)</li>
          <li>Operator Dasar</li>
          <li>Struktur Kontrol: If, Else, Switch</li>
          <li>Perulangan: For, While, Do While</li>
        </ul>
        <button class="cta-button">Akses Materi</button>
      </div>
      <div class="card blue">
        <h3>Level 3: Struktur Data Dasar</h3>
        <ul>
          <li>Array 1D dan 2D</li>
          <li>String dan Operasi String</li>
          <li>Fungsi dan Rekursi</li>
        </ul>
        <button class="cta-button">Akses Materi</button>
      </div>
      <div class="card purple">
        <h3>Level 4: Konsep Lanjut</h3>
        <ul>
          <li>Pointer Dasar</li>
          <li>Struct & Union</li>
          <li>File Handling</li>
          <li>Dynamic Memory (new/delete)</li>
        </ul>
        <button class="cta-button">Akses Materi</button>
      </div>
      <div class="card red">
        <h3>Level 5: Pemrograman OOP</h3>
        <ul>
          <li>Class & Object</li>
          <li>Constructor & Destructor</li>
          <li>Inheritance</li>
          <li>Polymorphism & Overloading</li>
          <li>Encapsulation & Access Modifier</li>
        </ul>
        <button class="cta-button">Akses Materi</button>
      </div>
      <div class="card brown">
        <h3>Level 6: Studi Kasus & Project</h3>
        <ul>
          <li>Mini Project 1: Sistem Kasir</li>
          <li>Mini Project 2: Perpustakaan Digital</li>
          <li>Evaluasi Akhir (Kuis & Tugas)</li>
          <li>Praktik Langsung (via Paiza.IO)</li>
        </ul>
        <button class="cta-button" style="background-color: #FFB100; color: black;">Bayar untuk Akses</button>
      </div>
    </div>
  </section>
</body>
</html>