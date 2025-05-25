<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang CELEP</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
  <style>
    body, html {
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
      min-height: 100%;
      background-color: rgba(34, 30, 30, 0.6);
      position: relative;
    }

    .background {
      position: fixed;
      width: 100%;
      height: 100%;
      background-image: url('{{ asset('img/Rectangle195.png') }}');
      background-size: cover;
      background-position: center;
      z-index: -2;
    }

    .overlay {
      position: fixed;
      width: 100%;
      height: 100%;
      background-color: rgba(84, 79, 79, 0.6);
      z-index: -1;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 60px 20px 120px;
      color: white;
    }

    .title {
      font-size: 3rem;
      font-weight: 900;
      color: #FFFF00;
      text-align: center;
      margin-bottom: 40px;
    }

    .content-section {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 40px;
    }

    .description {
      flex: 1;
      font-size: 1.3rem;
      line-height: 1.6;
      max-width: 500px;
    }

    .features {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 30px;
      align-items: flex-start;
    }

    .feature {
      display: flex;
      align-items: flex-start;
      gap: 15px;
    }

    .feature-icon {
      font-size: 2.5rem;
      margin-top: 5px;
    }

    .feature-text {
      max-width: 300px;
    }

    .feature-title {
      font-size: 1.3rem;
      font-weight: 700;
      color: #FFFF00;
      margin-bottom: 5px;
    }

    .feature-desc {
      font-size: 1rem;
      line-height: 1.5;
    }

    .footer {
      position: fixed;
      bottom: 70px;
      left: 0;
      width: 100%;
      text-align: center;
      color: #FFFF00;
      font-size: 1.2rem;
    }

    .footer a {
      color: #FFFF00;
      text-decoration: none;
    }

    @media (max-width: 768px) {
      .content-section {
        flex-direction: column;
        align-items: center;
      }

      .description, .features {
        max-width: 100%;
        text-align: center;
      }

      .feature {
        flex-direction: column;
        align-items: center;
      }

      .feature-text {
        text-align: center;
      }
    }
  </style>
</head>
<body>
  <div class="background"></div>
  <div class="overlay"></div>

  <div class="container">
    <div class="title">Tentang CELEP</div>

    <div class="content-section">
      <div class="description">
        CELEP adalah platform pembelajaran C++ interaktif yang dirancang untuk pemula hingga tingkat menengah. 
        Kami menyediakan materi yang mudah dipahami, latihan interaktif, dan compiler online untuk langsung mencoba kode.
        <br><br>
        Dengan pendekatan yang menyenangkan dan fleksibel, CELEP membantu kamu menguasai bahasa pemrograman C++ secara efektif dan efisien.
      </div>

      <div class="features">
        <div class="feature">
          <div class="feature-icon">📱</div>
          <div class="feature-text">
            <div class="feature-title">Fleksibel</div>
            <div class="feature-desc">
              Belajar kapan saja dan di mana saja dengan akses mudah dari semua perangkat.
            </div>
          </div>
        </div>

        <div class="feature">
          <div class="feature-icon">😊</div>
          <div class="feature-text">
            <div class="feature-title">Menyenangkan</div>
            <div class="feature-desc">
              Materi interaktif dan latihan yang membuat belajar jadi seru dan tidak membosankan.
            </div>
          </div>
        </div>

        <div class="feature">
          <div class="feature-icon">💡</div>
          <div class="feature-text">
            <div class="feature-title">Mudah Dipahami</div>
            <div class="feature-desc">
              Penjelasan yang jelas dan contoh praktis untuk membantu kamu cepat mengerti konsep.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer">
    <strong>Kontak Kami</strong><br>
    Email: <a href="mailto:support@celep.com">support@celep.com</a><br>
    Telepon: +62 812-3456-7890
  </div>
</body>
</html>
