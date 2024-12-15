<?php

namespace App\Http\Controllers;

use App\Models\Cine;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('pelicules.index', compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelicules.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            "descripcion" => "required",
            'duracion' => 'required|integer|min:1',
            'director' => 'required|max:255',
            'presupuesto' => 'required|numeric|min:0',
        ]);

        $movie = Pelicula::create($validatedData);

        return redirect()->route('peliculas.index')->with('success', 'Pel·lícula creada amb èxit.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('pelicules.show', compact('pelicula'));
    }

    public function edit($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('pelicules.edit', compact('pelicula'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
        'nombre' => 'required|max:255',
        "descripcion" => "required",
        'duracion' => 'required|integer|min:1',
        'director' => 'required|max:255',
        'presupuesto' => 'required|numeric|min:0',
        ]);
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->update($validatedData);
        return redirect()->route('peliculas.index')->with('succes', 'actualitzzat correctaments');
    }

    public function destroy(Pelicula $pelicula)
    {
        $pelicula->delete();
        return redirect()->route('peliculas.index');
    }
}
