<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk | CELEP</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background-color: #0b0b0d;
      color: white;
      display: flex;
      min-height: 100vh;
      flex-direction: row;
      overflow-x: hidden;
    }

    .header {
      position: absolute;
      top: 20px;
      left: 40px;
      z-index: 10;
    }

    .logo {
      width: 40px;
    }

    .left {
      flex: 1;
      padding: 100px 60px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .left h1 {
      color: #FFD700;
      font-size: 36px;
      margin-bottom: 10px;
    }

    .left p {
      margin-bottom: 30px;
      max-width: 90%;
      font-size: 16px;
      line-height: 1.6;
    }

    form {
      width: 100%;
      max-width: 400px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      font-size: 14px;
      display: block;
      margin-bottom: 6px;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      border-radius: 5px;
      border: none;
      font-size: 14px;
    }

    .sign-in-btn {
      width: 100%;
      background-color: #FFD700;
      padding: 12px;
      font-weight: bold;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
    }

    .form-footer {
      margin: 10px 0 20px;
      text-align: right;
    }

    .form-footer a {
      color: #FFD700;
      font-size: 14px;
      text-decoration: none;
    }

    .social-login {
      max-width: 400px;
      margin-top: 30px;
      text-align: center;
    }

    .divider {
      display: flex;
      align-items: center;
      text-align: center;
      color: #fff;
      margin: 20px 0;
    }

    .divider::before,
    .divider::after {
      content: '';
      flex: 1;
      border-bottom: 1px solid #fff;
    }

    .divider::before {
      margin-right: 10px;
    }

    .divider::after {
      margin-left: 10px;
    }

    .social-button {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: white;
      color: black;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 10px;
      text-decoration: none;
      font-weight: 500;
    }

    .social-button img {
      width: 20px;
      margin-right: 10px;
    }

    .signup-text {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
    }

    .signup-text a {
      color: #0099FF;
      text-decoration: none;
    }

    .right {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }

    .image-container {
      position: relative;
      width: 80%;
    }

    .image-container img {
      width: 100%;
      border-radius: 8px;
      display: block;
    }

    .top-left,
    .bottom-right {
      position: absolute;
      width: 60px;
      height: 60px;
      z-index: 5;
    }

    .top-left {
      top: -8px;
      left: -8px;
      border-top: 8px solid #FFE500;
      border-left: 8px solid #FFE500;
    }

    .bottom-right {
      bottom: -8px;
      right: -8px;
      border-bottom: 8px solid #FFE500;
      border-right: 8px solid #FFE500;
    }

    @media (max-width: 768px) {
      body {
        flex-direction: column;
        align-items: center;
        padding: 20px;
      }

      .right {
        display: none;
      }

      .left {
        padding: 60px 20px;
        text-align: center;
      }

      .form-footer {
        text-align: center;
      }
    }
  </style>
</head>
<body>
  <header class="header">
    <img src="{{ asset('img/Celep1 1.png') }}" class="logo" alt="Logo">
  </header>

  <div class="left">
    <h1>Welcome Back</h1>
    <p>Hari ini adalah hari yang baru. Ini adalah harimu. Anda yang membentuknya. Masuk untuk mulai mengelola proyek Anda.</p>

    <form>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="example@email.com">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="at least 8 characters">
      </div>
      <div class="form-footer">
        <a href="{{ route('password.request') }}">Forgot Password?</a>
      </div>
      <button type="submit" class="sign-in-btn">Sign in</button>
    </form>

    <div class="social-login">
      <div class="divider"><span>OR</span></div>
      <a class="social-button" href="#">
        <img src="{{ asset('img/Google.png') }}"> Sign in with Google
      </a>
      <a class="social-button" href="#">
        <img src="{{ asset('img/Facebook.png') }}"> Sign in with Facebook
      </a>
    </div>

    <p class="signup-text">Don't you have an account? <a href="{{ url('/signup') }}">Sign up</a></p>
  </div>

  <div class="right">
    <div class="image-container">
      <img src="{{ asset('img/puzzle1 .png') }}" alt="Puzzle">
      <div class="top-left"></div>
      <div class="bottom-right"></div>
    </div>
  </div>
</body>
</html>
