<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Soal Ujian Akhir - CELEP</title>
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
        }
        select.form-control {
            background-color: #111827;
            color: #ffcc00;
            border: 1px solid yellow;
        }
        .btn-primary {
            background-color: #ffcc00;
            border: none;
            color: black;
            font-weight: bold;
        }
        .btn-primary:hover {
            background-color: #e6b800;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <h4 class="mb-4"><strong>← Edit Soal Ujian Akhir</strong></h4>

    <div class="card p-4">
        <form action="{{ route('ujian.update', $ujian->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Input Soal</label>
                <textarea name="soal" class="form-control" rows="4" required>{{ old('soal', $ujian->soal) }}</textarea>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label>Opsi A</label>
                    <input type="text" name="opsi_a" class="form-control" value="{{ old('opsi_a', $ujian->opsi_a) }}" required>
                </div>
                <div class="col-md-6">
                    <label>Opsi C</label>
                    <input type="text" name="opsi_c" class="form-control" value="{{ old('opsi_c', $ujian->opsi_c) }}" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label>Opsi B</label>
                    <input type="text" name="opsi_b" class="form-control" value="{{ old('opsi_b', $ujian->opsi_b) }}" required>
                </div>
                <div class="col-md-6">
                    <label>Opsi D</label>
                    <input type="text" name="opsi_d" class="form-control" value="{{ old('opsi_d', $ujian->opsi_d) }}" required>
                </div>
            </div>

            <div class="form-group">
                <label>Pilih Jawaban Yang Benar</label>
                <select name="jawaban_benar" class="form-control" required>
                    <option value="">-- Pilih Jawaban --</option>
                    <option value="a" {{ old('jawaban_benar', $ujian->jawaban_benar) == 'a' ? 'selected' : '' }}>A</option>
                    <option value="b" {{ old('jawaban_benar', $ujian->jawaban_benar) == 'b' ? 'selected' : '' }}>B</option>
                    <option value="c" {{ old('jawaban_benar', $ujian->jawaban_benar) == 'c' ? 'selected' : '' }}>C</option>
                    <option value="d" {{ old('jawaban_benar', $ujian->jawaban_benar) == 'd' ? 'selected' : '' }}>D</option>
                </select>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>

        </form>
    </div>
</div>

</body>
</html>