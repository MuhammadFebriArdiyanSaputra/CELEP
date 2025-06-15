<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <style>
    body {
      font-family: sans-serif;
      text-align: center;
      padding: 80px;
    }

    .title {
      font-size: 28px;
      font-weight: bold;
      color: #333;
    }

    .name {
      font-size: 36px;
      font-weight: bold;
      margin: 40px 0 20px;
      color: #000;
    }

    .content {
      font-size: 18px;
      margin-bottom: 20px;
    }

    .footer {
      margin-top: 60px;
      font-size: 16px;
    }

    .highlight {
      color: #f4c300;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="title">SERTIFIKAT PENYELESAIAN</div>

  <p class="content">Diberikan kepada:</p>

  <div class="name">{{ $user->name }}</div>

  <p class="content">
    Telah berhasil menyelesaikan ujian akhir dengan nilai <span class="highlight">{{ $nilai }}</span>
    pada tanggal <strong>{{ $tanggal }}</strong>.
  </p>

  <div class="footer">
    CELEP | C++ Learning Platform<br>
    www.celep.id
  </div>
</body>
</html>
