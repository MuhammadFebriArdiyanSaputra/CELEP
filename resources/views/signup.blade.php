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
            margin-left: 100px;
        }

        .left h1 {
            color: #FFD700;
            font-size: 40px;
            margin-bottom: 5px;
        }

        .left p {
            margin-bottom: 30px;
            font-size: 25px;
        }

        .left p a {
            color: #0099FF;
            text-decoration: none;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-size: 17px;
            margin-bottom: 5px;
            display: block;
            margin-left: 80px;
        }

        input[type="email"],
        input[type="text"],
        input[type="password"] {
            text-align:center;
            margin-left: 80px;
            width: 110%;
            padding: 20px;
            border-radius: 5px;
            border: none;
            background-color: #e5e7eb;
        }

        .sign-up-btn {
            width: 90%;
            background-color: #FFE500;
            padding: 18px;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 50px;
            margin-left: 135px;
        }

        .right {
            flex: 1;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 90px;
        }

        .right img {
            width: 100%;
            height: 80%;
            border-radius: 8px;
            z-index: 1;
        }

        .top-left {
            position: absolute;
            top: 8.3%;
            right: 89%;
            width: 80px;
            height: 80px;
            border-top: 14px solid #FFE500;
            border-left: 14px solid #FFE500;
            z-index: 1;
            /* transform: rotate(-45deg); */
        }

        .bottom-right {
            position: absolute;
            bottom: 8.5%;
            left: 88%;
            width: 85px;
            height: 85px;
            border-bottom: 14px solid #FFE500;
            border-right: 14px solid #FFE500;
            z-index: 1;
            /* transform: rotate(-45deg); */
        }

        .form-container {
            max-width: 400px;
        }
    </style>
</head>
<body>

    <header class="header">
        <img src="{{ asset('img/Celep1 1.png') }}" class="logo" alt="Logo">
    </header>

    <div class="left">
        <div class="form-container">
            <h1>Welcome to Artify</h1>
            <p>Already have an account? <a href="{{ url('/signin') }}">Log in</a></p>

            <form action="{{ route('signup.submit') }}" method="POST">
                 @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" placeholder="Enter your username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Create a password">
                </div>

                <button type="submit" class="sign-up-btn">Create an account</button>
            </form>
        </div>
    </div>

    <div class="right">
        <img src="{{ asset('img/home bw 1.png') }}" alt="Puzzle">
        <div class="top-left"></div>
        <div class="bottom-right"></div>
    </div>
</body>
</html>
