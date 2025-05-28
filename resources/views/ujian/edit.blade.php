<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Soal Ujian Akhir - CELEP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #000000;
            color: #ffcc00;
        }
        .card {
            background-color: #222222;
            border-color: #ffcc00;
        }
        .card-header {
            background-color: #333333 !important;
            border-bottom: 1px solid #ffcc00;
            color: #ffcc00 !important;
        }
        .form-control, .form-control:focus {
            background-color: #333333;
            color: #ffcc00;
            border-color: #ffcc00;
        }
        .option-container {
            background: #333333;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: 1px solid #ffcc00;
        }
        .option-header {
            font-weight: bold;
            margin-bottom: 15px;
            color: #ffcc00;
        }
        .answer-section {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ffcc00;
        }
        .btn-warning {
            background-color: #ffcc00;
            border-color: #ffcc00;
            color: #000000;
            font-weight: bold;
        }
        .btn-warning:hover {
            background-color: #e6b800;
            border-color: #e6b800;
            color: #000000;
        }
        .btn-secondary {
            background-color: #444444;
            border-color: #ffcc00;
            color: #ffcc00;
        }
        .btn-secondary:hover {
            background-color: #333333;
            border-color: #e6b800;
        }
        .text-danger {
            color: #ff6666 !important;
        }
        select.form-control {
            color: #ffcc00;
        }
        select.form-control option {
            background-color: #333333;
            color: #ffcc00;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Edit Soal Ujian Akhir – Materi: Variables (C++)</h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('ujian.update', $soal->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="soal" class="font-weight-bold">Soal</label>
                            <textarea name="soal" class="form-control" rows="4" required>{{ old('soal', $soal->soal) }}</textarea>
                            @error('soal')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="option-container">
                            <div class="option-header">Opsi Jawaban (A–D)</div>
                            
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Opsi A</label>
                                    <input type="text" name="opsi_a" class="form-control" value="{{ old('opsi_a', $soal->opsi_a) }}" required>
                                    @error('opsi_a')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Opsi C</label>
                                    <input type="text" name="opsi_c" class="form-control" value="{{ old('opsi_c', $soal->opsi_c) }}" required>
                                    @error('opsi_c')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Opsi B</label>
                                    <input type="text" name="opsi_b" class="form-control" value="{{ old('opsi_b', $soal->opsi_b) }}" required>
                                    @error('opsi_b')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Opsi D</label>
                                    <input type="text" name="opsi_d" class="form-control" value="{{ old('opsi_d', $soal->opsi_d) }}" required>
                                    @error('opsi_d')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="answer-section">
                            <div class="form-group">
                                <label class="font-weight-bold">Jawaban Benar</label>
                                <select name="jawaban_benar" class="form-control" required>
                                    <option value="">-- Pilih Jawaban --</option>
                                    <option value="a" {{ old('jawaban_benar', $soal->jawaban_benar) == 'a' ? 'selected' : '' }}>A</option>
                                    <option value="b" {{ old('jawaban_benar', $soal->jawaban_benar) == 'b' ? 'selected' : '' }}>B</option>
                                    <option value="c" {{ old('jawaban_benar', $soal->jawaban_benar) == 'c' ? 'selected' : '' }}>C</option>
                                    <option value="d" {{ old('jawaban_benar', $soal->jawaban_benar) == 'd' ? 'selected' : '' }}>D</option>
                                </select>
                                @error('jawaban_benar')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="text-right mt-4">
                            <button type="submit" class="btn btn-warning">UPDATE</button>
                            <a href="{{ route('ujian.index') }}" class="btn btn-secondary">BATAL</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>