<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partido;

class PartidoController extends Controller
{
     public function index()
    {
        $partidos = Partido::orderBy('fecha', 'desc')->get();

        return view('partidos.index', compact('partidos'));
    }
}
