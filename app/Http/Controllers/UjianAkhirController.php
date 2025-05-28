<?php

namespace App\Http\Controllers;

use App\Models\UjianAkhir;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class UjianAkhirController extends Controller
{
    public function index(): View
    {
        $ujian = UjianAkhir::latest()->paginate(5);
        return view('ujian.index', compact('ujian'));
    }

    public function create(): View
    {
        return view('ujian.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'soal' => 'required',
            'opsi_a' => 'required',
            'opsi_b' => 'required',
            'opsi_c' => 'required',
            'opsi_d' => 'required',
            'jawaban_benar' => 'required|in:a,b,c,d',
        ]);

        UjianAkhir::create($request->all());

        return redirect()->route('ujian.index')->with('success', 'Soal Ujian berhasil disimpan!');
    }

    public function edit(string $id): View
    {
        $soal = UjianAkhir::findOrFail($id);
        return view('ujian.edit', compact('soal'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'soal' => 'required',
            'opsi_a' => 'required',
            'opsi_b' => 'required',
            'opsi_c' => 'required',
            'opsi_d' => 'required',
            'jawaban_benar' => 'required|in:a,b,c,d',
        ]);

        $soal = UjianAkhir::findOrFail($id);
        $soal->update($request->all());

        return redirect()->route('ujian.index')->with('success', 'Soal berhasil diperbarui!');
    }

    public function destroy(string $id): RedirectResponse
    {
        $soal = UjianAkhir::findOrFail($id);
        $soal->delete();

        return redirect()->route('ujian.index')->with('success', 'Soal berhasil dihapus!');
    }
}
