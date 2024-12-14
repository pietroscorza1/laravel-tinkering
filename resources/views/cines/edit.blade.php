@extends('layouts.app')

@section('title', 'Editar Pel·lícula - Projecte LaravelTinkering Pietro Scorza')

@section('content')
    <section class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Editar Pel·lícula</h1>

        <form action="{{ route('cines.update', $cine->id) }}" method="POST" class="max-w-md mx-auto">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nom:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $cine->nombre) }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="duracion" class="block text-gray-700 text-sm font-bold mb-2">Duració (minuts):</label>
                <input type="number" name="duracion" id="duracion" value="{{ old('duracion', $cine->duracion) }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="director" class="block text-gray-700 text-sm font-bold mb-2">Director:</label>
                <input type="text" name="director" id="director" value="{{ old('director', $cine->director) }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="presupuesto" class="block text-gray-700 text-sm font-bold mb-2">Pressupost (€):</label>
                <input type="number" name="presupuesto" id="presupuesto" value="{{ old('presupuesto', $cine->presupuesto) }}" required step="0.01" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-6">
                <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripció:</label>
                <textarea name="descripcion" id="descripcion" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="4">{{ old('descripcion', $cine->descripcion) }}</textarea>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Actualitzar Pel·lícula
                </button>
                <a href="{{ route('cines.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Tornar a la llista
                </a>
            </div>
        </form>
    </section>
@endsection

