<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - CELEP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            background-color: #0f0f0f;
            color: white;
        }

        .sidebar {
            background-color: #000;
            min-height: 100vh;
            padding-top: 1rem;
            position: fixed;
            width: 220px;
        }

        .sidebar a {
            color: yellow;
            display: block;
            padding: 10px 20px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #222;
        }

        .content {
            margin-left: 230px;
            padding: 20px;
        }

        .card-custom {
            background-color: #0b2c56;
            color: yellow;
            text-align: center;
            padding: 20px;
            border-radius: 8px;
        }

        .custom-header {
            border-bottom: 2px solid yellow;
            padding: 10px 0;
            margin-bottom: 20px;
        }

        .card-custom div {
            font-size: 2rem;
        }

        .card-custom h6 {
            margin-top: 10px;
            font-weight: bold;
        }

        .card-custom h4 {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="text-center mb-4">
            <img src="{{ asset('asset/image.png') }}" alt="Logo" width="50">

        </div>
        <a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="{{ route('questions.index') }}"><i class="fas fa-book"></i> Kelola Latihan</a>
        <a href="{{ route('ujian.index') }}"><i class="fas fa-clipboard-list"></i> Kelola Ujian Akhir</a>
        <a href="{{ route('admin.users.index') }}"><i class="fas fa-users"></i> Data Pengguna</a>
        <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- Content -->
    <div class="content w-100">
        <div class="d-flex justify-content-between align-items-center custom-header">
            <h4>Dashboard Admin</h4>
            <div style="display: flex; align-items: center; gap: 8px;">
  <span>👤</span>
  <span>Admin</span>
</div>
        </div>

        <!-- Info Cards -->
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card-custom">
                    <div>👥</div>
                    <h6>Jumlah Pengguna</h6>
                    <h4>{{ $jumlah_pengguna ?? 100 }}</h4>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card-custom">
                    <div>📘</div>
                    <h6>Jumlah Soal Latihan</h6>
                    <h4>{{ $jumlah_soal_latihan ?? 12 }}</h4>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card-custom">
                    <div>📗</div>
                    <h6>Jumlah Soal Ujian Akhir</h6>
                    <h4>{{ $jumlah_soal_ujian ?? 10 }}</h4>
                </div>
            </div>
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
