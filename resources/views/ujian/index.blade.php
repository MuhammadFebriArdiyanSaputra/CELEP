<!-- resources/views/ujian/index.blade.php -->

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
        body {
            background-color: #0f0f0f;
            color: #fff;
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
        .btn-warning {
            background-color: yellow;
            color: black;
            font-weight: bold;
        }
        .btn-warning:hover {
            background-color: gold;
        }
        table {
            color: white;
        }
        thead {
            background-color: yellow;
            color: black;
        }
        tbody tr:nth-child(even) {
            background-color: rgb(0, 0, 0);
        }
        .table td,
        .table th {
            vertical-align: middle;
        }
        table tbody tr {
            background-color: #333;
        }
        table td {
            color: white !important;
        }
        select.form-control {
            background-color: #222;
            color: yellow;
            border: 1px solid yellow;
        }
        .custom-header {
            border-bottom: 2px solid yellow;
            padding: 10px 0;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="d-flex">
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

    <div class="content w-100">
        <div class="d-flex justify-content-between align-items-center custom-header">
            <h4>Kelola Ujian Akhir</h4>
            <div>Admin</div>
        </div>

        <div class="mb-3 d-flex justify-content-between align-items-center">
            <div class="form-group mb-0">
                <label for="materi" class="mr-2 font-weight-bold">Pilih Materi</label>
                <select id="materi" class="form-control d-inline-block w-auto">
                    <option selected>Variabels</option>
                    <option>Fungsi</option>
                    <option>Pengulangan</option>
                </select>
            </div>
            <a href="{{ route('ujian.create') }}" class="btn btn-warning ml-3">Tambah Soal</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered mt-3">
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
                        <td>
                            <a href="{{ route('ujian.edit', $soal->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
                            <form action="{{ route('ujian.destroy', $soal->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Delete</button>
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

        {{ $ujian->links() }}
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
