<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MateriController extends Controller
{
    public function show($level, $index)
    {
        $viewName = "materi.$level.$index";

        if (View::exists($viewName)) {
            return view($viewName);
        }

        abort(404, "Materi $level.$index tidak ditemukan.");
    }
}
