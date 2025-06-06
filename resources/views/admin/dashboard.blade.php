<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - CELEP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <style>
        :root {
            --bg-dark: #0f0f0f;
            --sidebar-dark: #1b1b1b;
            --text-yellow: #ffcc00;
            --card-blue: #112288;
        }

        body {
            background-color: var(--bg-dark);
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .sidebar {
            background-color: var(--sidebar-dark);
            height: 100vh;
            width: 220px;
            position: fixed;
            padding: 30px 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.5);
        }

        .sidebar .logo-container {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #333;
        }

        .sidebar .logo-container img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            margin-right: 10px;
        }

        .sidebar .logo-container h4 {
            color: var(--text-yellow);
            font-weight: bold;
            margin: 0;
        }

        .sidebar a {
            color: var(--text-yellow);
            display: block;
            padding: 10px 15px;
            margin: 5px 0;
            text-decoration: none;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #333;
            transform: translateX(5px);
        }

        .content {
            margin-left: 240px;
            padding: 30px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--text-yellow);
        }

        .page-header h4 {
            color: var(--text-yellow);
            font-weight: bold;
            margin: 0;
        }

        .admin-label {
            background-color: var(--text-yellow);
            color: #000;
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: bold;
        }

        .card-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .card-box {
            background-color: var(--card-blue);
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            color: var(--text-yellow);
            min-width: 200px;
            flex: 1;
        }

        .card-box h5 {
            color: white;
            margin-bottom: 10px;
            font-size: 1rem;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .content {
                margin-left: 0;
            }

            .card-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="logo-container">
         <img src="img/logo.png" alt="Logo" style="width: 40px; height: 40px; object-fit: cover; margin-right: 10px;">
        <h4>CELEP</h4>
    </div>
    <a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="{{ route('questions.index') }}"><i class="fas fa-book"></i> Kelola Latihan</a>
    <a href="{{ route('ujian.index') }}"><i class="fas fa-clipboard-list"></i> Kelola Ujian Akhir</a>
    <a href="{{ route('users.index') }}"><i class="fas fa-users"></i> Data Pengguna</a>
    <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<div class="content">
    <div class="page-header">
        <h4>Dashboard Admin</h4>
        <div class="admin-label">Admin</div>
    </div>

    <div class="card-container">
        <div class="card-box">
            <h5><i class="fas fa-users"></i> Jumlah Pengguna</h5>
            <p>{{ $jumlahPengguna }}</p>
        </div>
        <div class="card-box">
            <h5><i class="fas fa-pen"></i> Jumlah Soal Latihan</h5>
            <p>{{ $jumlahLatihan }}</p>
        </div>
        <div class="card-box">
            <h5><i class="fas fa-book"></i> Jumlah Soal Ujian Akhir</h5>
            <p>{{ $jumlahUjian }}</p>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(session()->has('success'))
        toastr.success('{{ session('success') }}', 'BERHASIL!');
    @elseif(session()->has('error'))
        toastr.error('{{ session('error') }}', 'GAGAL!');
    @endif
</script>

</body>
</html>
