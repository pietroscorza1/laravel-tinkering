@extends('layouts.app')

@section('title', 'Editar Pel·lícula - Projecte LaravelTinkering Pietro Scorza')

@section('content')
    <section class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Editar cine</h1>

        <form action="{{ route('cines.update', $cine->id) }}" method="POST" class="max-w-md mx-auto">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nom:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $cine->nombre) }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-6">
                <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripció:</label>
                <textarea name="descripcion" id="descripcion" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="4">{{ old('descripcion', $cine->descripcion) }}</textarea>
            </div>
            <div class="mb-4">
                <label for="precio" class="block text-gray-700 text-sm font-bold mb-2">Precio (€):</label>
                <input type="number" name="precio" id="precio" value="{{ old('precio', $cine->precio) }}" required step="0.01" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Activo:</label>
                <input type="checkbox" name="activo" id="activo" value="1" {{ old('activo', $cine->activo) ? 'checked' : '' }}>
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

