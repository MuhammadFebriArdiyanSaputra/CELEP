<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian Akhir - C++</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            max-width: 800px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
        }
        .question {
            margin-bottom: 25px;
        }
        .question p {
            margin-bottom: 10px;
            font-weight: bold;
        }
        .options label {
            display: block;
            margin-bottom: 5px;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ffc107;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .result {
            margin-top: 30px;
            padding: 15px;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
            color: #155724;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ujian Akhir</h2>

        @if(session('result'))
            <div class="result">
                {{ session('result') }}
            </div>

            <script>
                setTimeout(function() {
                    window.location.href = "{{ route('welcome') }}";
                }, 2000); // redirect setelah 2 detik
            </script>
        @endif

        <form method="POST" action="{{ route('materi.storeUjianAkhir') }}">
            @csrf
            @foreach ($soal as $index => $item)
                <div class="question">
                    <p>{{ $index + 1 }}. {{ $item->soal }}</p>
                    <div class="options">
                        <label>
                            <input type="radio" name="jawaban[{{ $item->id }}]" value="a"
                                {{ old("jawaban.{$item->id}") == 'a' ? 'checked' : '' }}>
                            A. {{ $item->opsi_a }}
                        </label>
                        <label>
                            <input type="radio" name="jawaban[{{ $item->id }}]" value="b"
                                {{ old("jawaban.{$item->id}") == 'b' ? 'checked' : '' }}>
                            B. {{ $item->opsi_b }}
                        </label>
                        <label>
                            <input type="radio" name="jawaban[{{ $item->id }}]" value="c"
                                {{ old("jawaban.{$item->id}") == 'c' ? 'checked' : '' }}>
                            C. {{ $item->opsi_c }}
                        </label>
                        <label>
                            <input type="radio" name="jawaban[{{ $item->id }}]" value="d"
                                {{ old("jawaban.{$item->id}") == 'd' ? 'checked' : '' }}>
                            D. {{ $item->opsi_d }}
                        </label>
                    </div>
                </div>
            @endforeach
            <button type="submit">Kirim Jawaban</button>
        </form>
    </div>
</body>
</html>