<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambah Soal Latihan - CELEP</title>
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
        .btn-success {
            background-color: #ffcc00;
            border-color: #ffcc00;
            color: #000000;
            font-weight: bold;
        }
        .btn-success:hover {
            background-color: #e6b800;
            border-color: #e6b800;
            color: #000000;
        }
        .form-check-input {
            background-color: #333333;
            border-color: #ffcc00;
        }
        .form-check-input:checked {
            background-color: #ffcc00;
            border-color: #ffcc00;
        }
        .text-danger {
            color: #ff6666 !important;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Menambah Soal Latihan – Materi: Variables (C++)</h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('questions.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="soal" class="font-weight-bold">Input Goal</label>
                            <textarea name="soal" class="form-control" rows="4" required>{{ old('soal') }}</textarea>
                            @error('soal')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="option-container">
                            <div class="option-header">Opsi Jawaban (A–D)</div>
                            
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Opsi A</label>
                                    <input type="text" name="opsi_a" class="form-control" value="{{ old('opsi_a') }}" required>
                                    @error('opsi_a')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Opsi C</label>
                                    <input type="text" name="opsi_c" class="form-control" value="{{ old('opsi_c') }}" required>
                                    @error('opsi_c')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Opsi B</label>
                                    <input type="text" name="opsi_b" class="form-control" value="{{ old('opsi_b') }}" required>
                                    @error('opsi_b')
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
                        </div>

                        <div class="answer-section">
                            <div class="form-group">
                                <label class="font-weight-bold">Pilih Jawaban Yang Benar</label>
                                <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline mr-3">
                                        <input class="form-check-input" type="radio" name="jawaban_benar" id="jawaban_a" value="a" {{ old('jawaban_benar') == 'a' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="jawaban_a">A</label>
                                    </div>
                                    <div class="form-check form-check-inline mr-3">
                                        <input class="form-check-input" type="radio" name="jawaban_benar" id="jawaban_b" value="b" {{ old('jawaban_benar') == 'b' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="jawaban_b">B</label>
                                    </div>
                                    <div class="form-check form-check-inline mr-3">
                                        <input class="form-check-input" type="radio" name="jawaban_benar" id="jawaban_c" value="c" {{ old('jawaban_benar') == 'c' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="jawaban_c">C</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jawaban_benar" id="jawaban_d" value="d" {{ old('jawaban_benar') == 'd' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="jawaban_d">D</label>
                                    </div>
                                </div>
                                @error('jawaban_benar')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="text-right mt-4">
                            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
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