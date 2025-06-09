<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>CELEP - Belajar C++ Interaktif</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        /* Reset dasar */
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
      
        body {
          font-family: Arial, sans-serif;
          background-color: #0b0b0d;
          color: white;
          overflow-x: hidden;
        }
      
        /* Header */
        .header {
          padding: 20px 40px;
          position: absolute;
          top: 0;
          left: 0;
          z-index: 10;
        }
      
        .logo {
          width: 40px;
        }
      
        /* Hero Layout */
        .hero {
          display: flex;
          justify-content: space-between;
          align-items: center;
          min-height: 100vh;
          padding: 100px 60px 60px;
          position: relative;
        }
      
        /* Text Section */
        .text-section {
          flex: 1;
          max-width: 80%;
          margin-bottom: 130px;
        }
      
        .brand {
          font-size: 79px;
          font-weight: 1000;
          color: #ffd700;
        }
      
        .description {
          font-size: 27px;
          line-height: 1.6;
        }
      
        .cta-button {
          display: inline-block;
          background-color: #ffd700;
          color: black;
          font-weight: bold;
          padding: 15px 80px;
          border-radius: 10px;
          text-decoration: none;
          margin-top: 40px;
        }
      
        /* Image Section */
        .image-section {
          flex: 1;
          position: relative;
          display: flex;
          justify-content: center;
          align-items: center;
          margin-top: 100px;
        }
      
        .hero-image {
          width: 100%;
          border-radius: 8px;
          z-index: 1;
        }
      
        /* Siku dekoratif */
        .top-left {
            position: absolute;
            top: -10px;
            left: -10px;
            width: 80px;
            height: 80px;
            border-top: 6px solid #FFE500;
            border-left: 6px solid #FFE500;
            z-index: 1;
        }
      
        /* Yellow Box di bawah gambar */
        .yellow-box {
            position: absolute;
            bottom: -100px;
            right: -30px;
            width: 600px;
            height: 240px;
            background-color: #FFE500;
            z-index: 0;
        }
    </style>
</head>
<body>
  <header class="header">
    <img src="{{ asset('img/Celep1 1.png') }}" class="logo" alt="Logo">
  </header>

  <main class="hero">
    <section class="text-section">
      <h1 class="brand">CELEP</h1>
      <p class="description">
        Platform Interaktif Untuk Belajar Pemrograman C++ Dengan Mudah Dan Menyenangkan. <br />
        Mulai Perjalanan Codingmu Sekarang Dan Kuasai Bahasa Pemrogramman Yang Powerful Ini!
      </p>
      <a href="{{ route('welcome') }}" class="cta-button">Get’s Started</a>
    </section>

    <section class="image-section">
      <div class="top-left"></div>
      <img src="{{ asset('img/start-photoaidcom-greyscale 1.png') }}" class="hero-image" />
      <div class="yellow-box"></div>
    </section>
  </main>
</body>

</html>