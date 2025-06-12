<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Ujian Akhir - CELEP</title>
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
            color: #fff;
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

        /* Content Area */
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

        /* Button Styles */
        .btn-warning {
            background-color: var(--text-yellow);
            color: #000;
            font-weight: bold;
            border: none;
        }

        .btn-warning:hover {
            background-color: #e6b800;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
            font-weight: bold;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        /* Table Styles */
        .table-responsive {
            overflow-x: auto;
        }

        .table {
            background-color: var(--bg-dark);
            border: 1px solid #333;
            color: white;
            table-layout: auto;
            width: 100%;
            white-space: normal;
        }

        .table thead th {
            background-color: var(--table-header);
            color: #000;
            font-weight: bold;
            border-bottom: 2px solid #333;
            vertical-align: middle;
        }

        .table tbody tr {
            transition: all 0.2s ease;
            background-color: #333;
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
            border-top: 1px solid #444;
            word-break: break-word;
        }

        .table td {
            color: white !important;
        }

        .action-buttons {
            display: flex;
            gap: 5px;
        }

        .action-buttons .btn {
            padding: 5px 10px;
            font-size: 14px;
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
    <div class="logo-container">
        <img src="{{ asset('img/celep1 1.png') }}" alt="Logo CELEP" style="width: 24px; height: 24px;">
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
        <h4>Kelola Ujian Akhir</h4>
        <div class="admin-label">Admin</div>
    </div>

    <div class="mb-3 d-flex justify-content-end">
        <a href="{{ route('ujian.create') }}" class="btn btn-warning">Tambah Soal</a>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>SOAL</th>
                    <th>OPSI A</th>
                    <th>OPSI B</th>
                    <th>OPSI C</th>
                    <th>OPSI D</th>
                    <th>JAWABAN BENAR</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($ujian as $soal)
                    <tr>
                        <td>{{ $soal->soal }}</td>
                        <td>{{ $soal->opsi_a }}</td>
                        <td>{{ $soal->opsi_b }}</td>
                        <td>{{ $soal->opsi_c }}</td>
                        <td>{{ $soal->opsi_d }}</td>
                        <td class="text-uppercase font-weight-bold">{{ $soal->jawaban_benar }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('ujian.edit', $soal->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
                            <form action="{{ route('ujian.destroy', $soal->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-warning">Belum ada soal ujian akhir.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{ $ujian->links() }}
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