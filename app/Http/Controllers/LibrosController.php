<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorLibros;

class LibrosController extends Controller
{
    public function index()
    {
        return view('principal');
    }

    public function create()
    {
        return view('registro');
    }
    public function store(ValidadorLibros $request)
    {
        $tituloLibro = $request->input('titulo');
        session()->flash('success', 'Todo correcto: Libro "' . $tituloLibro . '" guardado');
        return redirect()->route('registro');
    }
}

