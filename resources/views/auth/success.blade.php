<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Account Created | CELEP</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background-color: #0B0B0D;
            font-family: 'Inter', sans-serif;
            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .logo {
            position: absolute;
            top: 24px;
            left: 24px;
            width: 48px;
        }

        .card {
            background-color: #1a1a1a;
            border-radius: 20px;
            padding: 64px 48px;
            max-width: 560px;
            width: 90%;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .card img.thumb {
            width: 160px;
            margin-bottom: 24px;
        }

        .card h1 {
            font-size: 32px;
            margin-bottom: 8px;
            font-weight: 700;
        }

        .card h1 span {
            color: #FFE500;
        }

        .card p {
            font-size: 18px;
            color: #c9c9c9;
            margin-bottom: 32px;
        }

        .btn {
            display: inline-block;
            padding: 14px 0;
            background-color: #FFE500;
            color: #000;
            font-weight: bold;
            font-size: 18px;
            text-decoration: none;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            width: 100%;
        }

        .decor {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 50%;
            background: url('{{ asset("img/bg.png") }}') no-repeat center;
            background-size: cover;
            pointer-events: none;
            z-index: 0;
        }

        .card > * {
            position: relative;
            z-index: 1;
        }

        @media (max-width: 480px) {
            .card {
                padding: 48px 24px;
            }

            .card h1 {
                font-size: 24px;
            }

            .card p {
                font-size: 16px;
            }

            .btn {
                font-size: 16px;
            }

            .card img.thumb {
                width: 72px;
            }
        }
    </style>
</head>
<body>

    <img src="{{ asset('img/Celep1 1.png') }}" class="logo" alt="Logo">

    <div class="card">
        <img src="{{ asset('img/Jempol.png') }}" alt="Thumb" class="thumb">
        <h1>Account <span>Created!</span></h1>
        <p>Your email has been created</p>
        <a href="{{ route('signin') }}" class="btn">Back to Login</a>
    </div>

    <div class="decor"></div>

</body>
</html>
