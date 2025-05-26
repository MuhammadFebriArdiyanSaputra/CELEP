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
  </style>
</head>
<body>

  <div class="navbar">
    <div class="navbar-left">
      <img src="{{ asset('img/Celep1 1.png') }}" class="logo" alt="Logo">
    </div>
    <div class="navbar-right">
      <a href="{{ route('signin') }}">Login</a>
      <a href="{{ route('signup') }}" class="signup-btn">Sign Up</a>
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

</body>
</html>
