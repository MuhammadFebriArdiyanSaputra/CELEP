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
        $this->validate($request, [
            'soal' => 'required|min:5',
            'opsi_a' => 'required',
            'opsi_b' => 'required',
            'opsi_c' => 'required',
            'opsi_d' => 'required',
            'jawaban_benar' => 'required|in:a,b,c,d',
        ]);

        UjianAkhir::create($request->all());

        return redirect()->route('ujian.index')->with('success', 'Soal ujian berhasil ditambahkan!');
    }

   public function edit($id)
{
    $ujian = UjianAkhir::findOrFail($id); // pastikan pakai model yang sesuai
    return view('ujian.edit', compact('ujian'));
}

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'soal' => 'required|min:5',
            'opsi_a' => 'required',
            'opsi_b' => 'required',
            'opsi_c' => 'required',
            'opsi_d' => 'required',
            'jawaban_benar' => 'required|in:a,b,c,d',
        ]);

        $soal = UjianAkhir::findOrFail($id);
        $soal->update($request->all());

        return redirect()->route('ujian.index')->with('success', 'Soal ujian berhasil diperbarui!');
    }

    public function destroy($id): RedirectResponse
    {
        UjianAkhir::findOrFail($id)->delete();
        return redirect()->route('ujian.index')->with('success', 'Soal ujian berhasil dihapus!');
    }
}
