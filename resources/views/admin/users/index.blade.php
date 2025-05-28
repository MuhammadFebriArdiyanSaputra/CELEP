<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Pengguna - CELEP</title>
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
        thead {
            background-color: yellow;
            color: black;
        }
        tbody tr:nth-child(even) {
            background-color: #111;
        }
        table td {
            color: white !important;
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

    <!-- Main Content -->
    <div class="content w-100">
        <div class="d-flex justify-content-between align-items-center mb-4 border-bottom border-warning pb-2">
            <h4>Data Pengguna</h4>
            <div>Admin</div>
        </div>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tanggal Daftar</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('Y-m-d') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center text-warning">Belum ada pengguna.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>
</html>
