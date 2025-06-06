<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna - CELEP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --bg-dark: #0f0f0f;
            --sidebar-dark: #1b1b1b;
            --text-yellow: #ffcc00;
            --table-header: #ffcc00;
            --table-row-even: #1a1a2e;
            --table-row-hover: #2a2a3e;
        }

        body {
            background-color: var(--bg-dark);
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Sidebar Styles */
        .sidebar {
            background-color: var(--sidebar-dark);
            height: 100vh;
            width: 220px;
            position: fixed;
            padding: 30px 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.5);
        }

        .sidebar h4 {
            color: var(--text-yellow);
            font-weight: bold;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #333;
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

        /* Content Area */
        .content {
            margin-left: 240px;
            padding: 30px;
        }

        .content h3 {
            color: var(--text-yellow);
            font-weight: bold;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 1px solid #333;
        }

        /* Table Styles */
        .table {
            background-color: var(--bg-dark);
            border: 1px solid #333;
        }

        .table thead th {
            background-color: var(--table-header);
            color: #000;
            font-weight: bold;
            border-bottom: 2px solid #333;
        }

        .table tbody tr {
            transition: all 0.2s ease;
        }

        .table tbody tr:nth-child(even) {
            background-color: var(--table-row-even);
        }

        .table tbody tr:hover {
            background-color: var(--table-row-hover);
        }

        .table td, .table th {
            padding: 12px 15px;
            vertical-align: middle;
            border-top: 1px solid #333;
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
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="d-flex align-items-center mb-4">
            <img src="img/logo.png" alt="Logo" style="width: 40px; height: 40px; object-fit: cover; margin-right: 10px;">
            <h4 class="m-0">CELEP</h4>
        </div>
        <a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="{{ route('questions.index') }}"><i class="fas fa-book"></i> Kelola Latihan</a>
        <a href="{{ route('ujian.index') }}"><i class="fas fa-clipboard-list"></i> Kelola Ujian Akhir</a>
        <a href="{{ route('users.index') }}"><i class="fas fa-users"></i> Data Pengguna</a>
        <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </a>
      
    </div>

    <div class="content">
        <h3>Data Pengguna</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tanggal Daftar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('Y-m-d') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>
</html>
