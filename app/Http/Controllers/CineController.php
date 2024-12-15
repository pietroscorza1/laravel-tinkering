<?php

namespace App\Http\Controllers;

use App\Models\Cine;
use Illuminate\Http\Request;

class CineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cines = Cine::all();
        return view('cines.index', compact('cines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cines.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'activo' => 'nullable|boolean',
        ]);
        $validatedData['activo'] = $request->has('activo');

        $cine = Cine::create($validatedData);
        return redirect('/cines')->with('success', 'Cine created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cine = Cine::findOrFail($id);
        return view('cines.show', compact('cine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cine = Cine::findOrFail($id);
        return view('cines.edit', compact('cine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cine = Cine::FindOrFail($id);
        $validatedData = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'activo' => 'nullable|boolean',
        ]);
        $validatedData['activo'] = $request->has('activo');
        $cine->update($validatedData);
        return redirect('/cines')->with('success', 'Cine updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cine $cine)
    {
        $cine->delete();
        return redirect('/cines')->with('success', 'Cine deleted successfully.');
    }
}
