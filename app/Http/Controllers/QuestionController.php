<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Question;
use App\Models\Level;

class QuestionController extends Controller
{
    public function index(Request $request): View
    {
        $levelDipilih = $request->query('materi'); // materi di-query pakai id level

        $questions = Question::when($levelDipilih, function ($query, $levelDipilih) {
            return $query->where('level_id', $levelDipilih);
        })->latest()->paginate(5);

        $materiList = Level::all();

        return view('admin.questions.index', compact('questions', 'levelDipilih', 'materiList'));
    }

    public function create(): View
    {
        $materiList = Level::all();
        return view('admin.questions.create', compact('materiList'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'soal' => 'required|min:5',
            'level_id' => 'required|exists:levels,id',
            'opsi_a' => 'required',
            'opsi_b' => 'required',
            'opsi_c' => 'required',
            'opsi_d' => 'required',
            'jawaban_benar' => 'required|in:a,b,c,d'
        ]);

        Question::create([
            'soal' => $request->soal,
            'level_id' => $request->level_id,
            'opsi_a' => $request->opsi_a,
            'opsi_b' => $request->opsi_b,
            'opsi_c' => $request->opsi_c,
            'opsi_d' => $request->opsi_d,
            'jawaban_benar' => $request->jawaban_benar
        ]);

        return redirect()->route('questions.index')->with(['success' => 'Soal berhasil disimpan!']);
    }

    public function edit(string $id): View
    {
        $question = Question::findOrFail($id);
        $materiList = Level::all();

        return view('admin.questions.edit', compact('question', 'materiList'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'soal' => 'required|min:5',
            'level_id' => 'required|exists:levels,id',
            'opsi_a' => 'required',
            'opsi_b' => 'required',
            'opsi_c' => 'required',
            'opsi_d' => 'required',
            'jawaban_benar' => 'required|in:a,b,c,d'
        ]);

        $question = Question::findOrFail($id);

        $question->update([
            'soal' => $request->soal,
            'level_id' => $request->level_id,
            'opsi_a' => $request->opsi_a,
            'opsi_b' => $request->opsi_b,
            'opsi_c' => $request->opsi_c,
            'opsi_d' => $request->opsi_d,
            'jawaban_benar' => $request->jawaban_benar,
        ]);

        return redirect()->route('questions.index')->with(['success' => 'Soal berhasil diperbarui!']);
    }

    public function destroy(string $id): RedirectResponse
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('questions.index')->with(['success' => 'Soal berhasil dihapus!']);
    }
}
