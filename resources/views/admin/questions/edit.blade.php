<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Soal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #0f0f0f;
            color: #ffcc00;
        }
        .card {
            background-color: #1b1b1b;
            border: none;
        }
        .card-header {
            background-color: #ffcc00 !important;
            color: black !important;
            border: none;
        }
        label {
            font-weight: bold;
        }
        .form-control {
            background-color: #111827;
            color: #fff;
            border: 1px solid #333;
        }
        .form-control:focus {
            background-color: #111827;
            color: #fff;
            border-color: #ffcc00;
            box-shadow: 0 0 0 0.2rem rgba(255, 204, 0, 0.25);
        }
        select.form-control {
            background-color: #111827;
            color: #ffcc00;
            border: 1px solid #ffcc00;
        }
        .btn-warning {
            background-color: #ffcc00;
            border: none;
            color: black;
            font-weight: bold;
        }
        .btn-warning:hover {
            background-color: #e6b800;
        }
        .btn-secondary {
            background-color: #333;
            border: none;
            color: #ffcc00;
        }
        .btn-secondary:hover {
            background-color: #444;
        }
        .text-danger {
            color: #ff6b6b !important;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card p-4">
                <div class="card-header">
                    <h4 class="mb-0">Edit Soal</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('questions.update', $question->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="materi">Materi</label>
                            <select name="materi" class="form-control" required>
                                <option value="">-- Pilih Materi --</option>
                                <option value="Pengenalan Dasar" {{ $question->materi == 'Pengenalan Dasar' ? 'selected' : '' }}>Pengenalan Dasar</option>
                                <option value="Dasar Pemrograman" {{ $question->materi == 'Dasar Pemrograman' ? 'selected' : '' }}>Dasar Pemrograman</option>
                                <option value="Struktur Data Dasar" {{ $question->materi == 'Struktur Data Dasar' ? 'selected' : '' }}>Struktur Data</option>
                                <option value="Konsep Lanjut" {{ $question->materi == 'Konsep Lanjut' ? 'selected' : '' }}>Struktur Data</option>
                                <option value="Pemrograman OOP" {{ $question->materi == 'Pemrograman OOP' ? 'selected' : '' }}>Struktur Data</option>
                                <option value="Studi Kasus & Project" {{ $question->materi == 'Studi Kasus & Project' ? 'selected' : '' }}>Struktur Data</option>
                            </select>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label>Opsi A</label>
                                <input type="text" name="opsi_a" class="form-control" value="{{ old('opsi_a', $question->opsi_a) }}">
                                @error('opsi_a')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>Opsi B</label>
                                <input type="text" name="opsi_b" class="form-control" value="{{ old('opsi_b', $question->opsi_b) }}">
                                @error('opsi_b')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label>Opsi C</label>
                                <input type="text" name="opsi_c" class="form-control" value="{{ old('opsi_c', $question->opsi_c) }}">
                                @error('opsi_c')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>Opsi D</label>
                                <input type="text" name="opsi_d" class="form-control" value="{{ old('opsi_d', $question->opsi_d) }}">
                                @error('opsi_d')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Jawaban Benar</label>
                            <select name="jawaban_benar" class="form-control">
                                <option value="">-- Pilih Jawaban --</option>
                                @foreach(['a', 'b', 'c', 'd'] as $opt)
                                    <option value="{{ $opt }}" {{ old('jawaban_benar', $question->jawaban_benar) == $opt ? 'selected' : '' }}>
                                        {{ strtoupper($opt) }}
                                    </option>
                                @endforeach
                            </select>
                            @error('jawaban_benar')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-warning">UPDATE</button>
                            <a href="{{ route('questions.index') }}" class="btn btn-secondary">BATAL</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>