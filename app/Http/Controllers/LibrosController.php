<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $request->validate([
            'isbn' => 'required|numeric|digits:13',
            'titulo' => 'required|string|max:150',
            'autor' => 'required|string|max:100',
            'paginas' => 'required|integer|min:1',
            'año' => 'required|integer|min:1000|max:' . date('Y'),
            'editorial' => 'required|string|max:100',
            'email' => 'required|email'
        ]);

        return redirect()->route('registro')->with('success', 'Todo correcto: Libro "' . $request->titulo . '" guardado');
    }

    
}

