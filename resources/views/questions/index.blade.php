<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Latihan - CELEP</title>
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

        /* Form Styles */
        .form-control {
            background-color: #111827;
            color: #fff;
            border: 1px solid #333;
        }
        
        .form-control:focus {
            background-color: #111827;
            color: #fff;
            border-color: var(--text-yellow);
            box-shadow: 0 0 0 0.2rem rgba(255, 204, 0, 0.25);
        }
        
        select.form-control {
            background-color: #111827;
            color: var(--text-yellow);
            border: 1px solid var(--text-yellow);
        }

        /* Responsive Adjustments */
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
        <img src="img/logo.png" alt="Logo">
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
        <h4>Kelola Latihan</h4>
        <div class="admin-label">Admin</div>
    </div>

    <div class="mb-3 d-flex justify-content-between align-items-center">
        <div class="form-group mb-0">
            <label for="materi" class="mr-2 font-weight-bold">Pilih Materi</label>
            <select id="materi" class="form-control d-inline-block w-auto">
                <option selected>Variabels</option>
                <option>Fungsi</option>
                <option>Pengulangan</option>
                <!-- Tambah sesuai kebutuhan -->
            </select>
        </div>
        <a href="{{ route('questions.create') }}" class="btn btn-warning">Tambah Soal</a>
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
                @forelse ($questions as $question)
                    <tr>
                        <td>{{ $question->soal }}</td>
                        <td>{{ $question->opsi_a }}</td>
                        <td>{{ $question->opsi_b }}</td>
                        <td>{{ $question->opsi_c }}</td>
                        <td>{{ $question->opsi_d }}</td>
                        <td class="text-uppercase font-weight-bold">{{ $question->jawaban_benar }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
                            <form action="{{ route('questions.destroy', $question->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-warning">Belum ada soal.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{ $questions->links() }}
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