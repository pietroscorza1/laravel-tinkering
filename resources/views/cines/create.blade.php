@extends('layouts.app')

@section('title', 'Crear Nova Pel·lícula - Projecte LaravelTinkering Pietro Scorza')

@section('content')
    <section class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Crear Nova Cines</h1>

        <form action="{{ route('cines.store') }}" method="POST" class="max-w-md mx-auto">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nom:</label>
                <input type="text" name="nombre" id="nombre" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripció:</label>
                <input type="text" name="descripcion" id="descripcion" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="precio" class="block text-gray-700 text-sm font-bold mb-2">precio:</label>
                <input type="number" name="precio" id="precio" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-6">
                <label> Activo
                    <input type="checkbox" name="activo" id="activo" >
                </label>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Crear cine
                </button>
                <a href="{{ route('cines.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Tornar a la llista
                </a>
            </div>
        </form>
    </section>
@endsection

