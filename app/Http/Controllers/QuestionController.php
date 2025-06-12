<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Question;

class QuestionController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(Request $request): View
    {
        $materiDipilih = $request->query('materi');

        $questions = Question::when($materiDipilih, function ($query, $materiDipilih) {
            return $query->where('materi', $materiDipilih);
        })->latest()->paginate(5);

        return view('admin.questions.index', compact('questions', 'materiDipilih'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.questions.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validasi form
        $this->validate($request, [
            'soal' => 'required|min:5',
            'materi' => 'required|string',
            'opsi_a' => 'required',
            'opsi_b' => 'required',
            'opsi_c' => 'required',
            'opsi_d' => 'required',
            'jawaban_benar' => 'required|in:a,b,c,d'
        ]);

        //simpan ke database
        Question::create([
            'soal' => $request->soal,
            'materi' => $request->materi,
            'opsi_a' => $request->opsi_a,
            'opsi_b' => $request->opsi_b,
            'opsi_c' => $request->opsi_c,
            'opsi_d' => $request->opsi_d,
            'jawaban_benar' => $request->jawaban_benar
        ]);

        //redirect ke index dengan pesan sukses
        return redirect()->route('questions.index')->with(['success' => 'Soal berhasil disimpan!']);
    }


    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        $question = Question::findOrFail($id);

        return view('admin.questions.edit', compact('question'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'soal' => 'required|min:5',
            'materi' => 'required|string',
            'opsi_a' => 'required',
            'opsi_b' => 'required',
            'opsi_c' => 'required',
            'opsi_d' => 'required',
            'jawaban_benar' => 'required|in:a,b,c,d'
        ]);

        $question = Question::findOrFail($id);

        $question->update([
            'soal' => $request->soal,
            'materi' => $request->materi,
            'opsi_a' => $request->opsi_a,
            'opsi_b' => $request->opsi_b,
            'opsi_c' => $request->opsi_c,
            'opsi_d' => $request->opsi_d,
            'jawaban_benar' => $request->jawaban_benar,
        ]);

        return redirect()->route('admin.questions.index')->with(['success' => 'Soal berhasil diperbarui!']);
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy(string $id): RedirectResponse
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('admin.questions.index')->with(['success' => 'Soal berhasil dihapus!']);
    }
}
