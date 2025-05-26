<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar | CELEP</title>
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
            position: absolute;
            top: 0;
            left: 0;
            padding: 20px 40px;
            z-index: 10;
        }

        .logo {
            width: 40px;
        }

        .left {
            flex: 1;
            padding: 100px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .left h1 {
            font-size: 40px;
            color: #FFD700;
            margin-bottom: 10px;
        }

        .left p {
            font-size: 18px;
            margin-bottom: 40px;
        }

        .left p a {
            color: #0099FF;
            text-decoration: none;
        }

        form {
            max-width: 400px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 16px;
            margin-left: 10px;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 14px 16px;
            border-radius: 6px;
            border: none;
            background-color: #e5e7eb;
            font-size: 16px;
        }

        .sign-up-btn {
            width: 100%;
            padding: 16px;
            background-color: #FFE500;
            color: #000;
            font-weight: bold;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 30px;
        }

        .right {
            flex: 1;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 80px;
            background-color: #0b0b0d;
        }

        .image-container {
            position: relative;
            max-width: 400px;
            max-height: 500px; 
        }

        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            object-fit: contain;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            display: block;
        }


        .corner-box {
            position: absolute;
            width: 50px;
            height: 50px;
            border: 6px solid #FFE500;
            z-index: 2;
        }

        .top-left {
            top: -20px;
            left: -20px;
            border-bottom: none;
            border-right: none;
        }

        .bottom-right {
            bottom: -20px;
            right: -20px;
            border-top: none;
            border-left: none;
        }
        @media screen and (max-width: 992px) {
            body {
                flex-direction: column;
            }

            .left, .right {
                padding: 40px;
            }

            .corner-box {
                display: none;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="header">
        <img src="{{ asset('img/Celep1 1.png') }}" class="logo" alt="Logo">
    </header>

    <!-- Left Section -->
    <div class="left">
        <h1>Welcome to CELEP</h1>
        <p>Sudah punya akun? <a href="{{ route('signin') }}">Masuk</a></p>

        <form method="POST" action="{{ route('signup') }}">
            @csrf
            <div class="form-group">
                <label for="name">Username</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input id="password" type="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required>
            </div>

            <button type="submit" class="sign-up-btn">Buat Akun</button>
        </form>
    </div>

    <!-- Right Section with Image -->
    <div class="right">
        <div class="image-container">
            <img src="{{ asset('img/bird.png') }}" alt="Art">
            <div class="corner-box top-left"></div>
            <div class="corner-box bottom-right"></div>
        </div>
    </div>

</body>
</html>
