<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lupa Password | CELEP</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #0b0b0d;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: #101e3d;
            padding: 40px;
            border-radius: 12px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        h2 {
            text-align: center;
            color: #FFE500;
            margin-bottom: 30px;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            color: white;
            font-size: 16px;
            margin-bottom: 8px;
        }

        input[type="email"] {
            width: 100%;
            padding: 12px 16px;
            font-size: 16px;
            border-radius: 6px;
            border: none;
            background-color: #f3f4f6;
        }

        .note {
            color: #ccc;
            font-size: 12px;
            margin-top: 8px;
            display: flex;
            align-items: center;
        }

        .note::before {
            content: '⚠️';
            margin-right: 6px;
        }

        .button-group {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .btn {
            padding: 12px 30px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 14px;
            border: none;
            cursor: pointer;
        }

        .btn-send {
            background-color: #FFE500;
            color: #000;
        }

        .btn-cancel {
            background-color: #fff;
            color: #000;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Forgot Password</h2>
    <form method="POST" action="{{route('password.email')}}">
        @csrf
        <div class="form-group">
            <label for="email">Email Address *</label>
            <input id="email" type="email" name="email" required>
            <div class="note">
                Enter your registered email to receive password reset instructions.
            </div>
        </div>

        <div class="button-group">
            <button type="submit" class="btn btn-send">KIRIM</button>
            <button type="button" class="btn btn-cancel" onclick="window.location.href='/'">BATAL</button>
        </div>
    </form>
</div>

</body>
</html>
