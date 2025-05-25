<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Masuk | CELEP</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            display: flex;
            height: 100vh;
            background-color: #0b0b0d;
        }

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

        .left {
            flex: 1;
            padding: 100px 100px;
            background-color: #0b0b0d;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .left h1 {
            color: #FFD700;
            font-size: 40px;
            margin-bottom: 10px;
        }

        .left p {
            margin-bottom: 30px;
            max-width: 90%;
            font-size: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
            margin-left: 120px;
        }

        input[type="email"],
        input[type="password"] {
            text-align:center;
            width: 80%;
            margin-left: 120px;
            padding: 12px;
            border-radius: 5px;
            border: none;
        }

        .sign-in-btn {
            width: 83%;
            background-color: #FFD700;
            padding: 12px;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 15px;
            margin-left: 120px;
        }

        .form-footer {
            margin-top: 15px;
            margin-left: 670px;
        }

        .form-footer a {
            color: #FFD700;
            font-size: 14px;
            text-decoration: none;
        }

        .social-login {
            margin-top: 30px;
            margin-left: 100px;
        }
        
        .divider {
          display: flex;
          align-items: center;
          text-align: center;
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
            padding: 10px;
            margin: 10px auto;
            width: 80%;
            border-radius: 5px;
            color: black;
            text-decoration: none;
        }

        .right {
            flex: 1;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .right img {
            width: 80%;
            height: 80%;
            border-radius: 8px;
            z-index: 1;
        }
        
        .top-left {
            position: absolute;
            top: 8%;
            left: 8%;
            width: 80px;
            height: 80px;
            border-top: 14px solid #FFE500;
            border-left: 14px solid #FFE500;
            z-index: 1;
        }
        
        .bottom-right {
            position: absolute;
            bottom: 8.5%;
            right: 8.5%;
            width: 85px;
            height: 85px;
            border-bottom: 14px solid #FFE500;
            border-right: 14px solid #FFE500;
            z-index: 1;
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
                <a href="#">Forgot Password?</a>
            </div>

            <button type="submit" class="sign-in-btn">Sign in</button>
        </form>

        <div class="social-login">
            <div class="divider">
                <span>OR</span>
            </div>
            <a class="social-button" href="#"><img src="{{ asset('img/Google.png') }}"  style="width:20px; margin-right:10px;"> Sign in with Google</a>
            <a class="social-button" href="#"><img src="{{ asset('img/Facebook.png') }}"  style="width:20px; margin-right:10px;"> Sign in with Facebook</a>
        </div>

        <p style="text-align:center; margin-top: 20px; margin-left: 60px;">Don't you have an account? <a style ="color:#0099FF" href="{{ url('/signup') }}">Sign up</a></p>
    </div>

    <div class="right">
        <img src="{{ asset('img/puzzle1 .png') }}" alt="Puzzle">
        <div class="top-left"></div>
        <div class="bottom-right"></div>
    </div>
</body>
</html>
