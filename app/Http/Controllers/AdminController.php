<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Question;
use App\Models\UjianAkhir;
use App\Models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        return view('admin.dashboard', [
            'jumlah_pengguna' => User::count(),
            'jumlah_soal_latihan' =>  Question::count(),
            'jumlah_soal_ujian' => UjianAkhir::count(),
        ]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin)
    {
        //
    }
}
