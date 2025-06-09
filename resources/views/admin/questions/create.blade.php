<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Soal - CELEP</title>
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
        .btn-success {
            background-color: #ffcc00;
            border: none;
            color: black;
            font-weight: bold;
        }
        .btn-success:hover {
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
                    <h4 class="mb-0">Form Tambah Soal</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('questions.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="soal">Soal</label>
                            <textarea name="soal" class="form-control" rows="4" required>{{ old('soal') }}</textarea>
                            @error('soal')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label>Opsi A</label>
                                <input type="text" name="opsi_a" class="form-control" value="{{ old('opsi_a') }}" required>
                                @error('opsi_a')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>Opsi B</label>
                                <input type="text" name="opsi_b" class="form-control" value="{{ old('opsi_b') }}" required>
                                @error('opsi_b')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label>Opsi C</label>
                                <input type="text" name="opsi_c" class="form-control" value="{{ old('opsi_c') }}" required>
                                @error('opsi_c')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>Opsi D</label>
                                <input type="text" name="opsi_d" class="form-control" value="{{ old('opsi_d') }}" required>
                                @error('opsi_d')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Jawaban Benar</label>
                            <select name="jawaban_benar" class="form-control" required>
                                <option value="">-- Pilih Jawaban --</option>
                                <option value="a" {{ old('jawaban_benar') == 'a' ? 'selected' : '' }}>A</option>
                                <option value="b" {{ old('jawaban_benar') == 'b' ? 'selected' : '' }}>B</option>
                                <option value="c" {{ old('jawaban_benar') == 'c' ? 'selected' : '' }}>C</option>
                                <option value="d" {{ old('jawaban_benar') == 'd' ? 'selected' : '' }}>D</option>
                            </select>
                            @error('jawaban_benar')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <a href="{{ route('questions.index') }}" class="btn btn-secondary">KEMBALI</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>