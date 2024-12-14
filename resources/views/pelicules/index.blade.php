@extends('layouts.app')

@section('title', 'Inici - Projecte LaravelTinkering Pietro Scorza')

@section('content')
    <section class="container mx-auto py-8">

        <div class="flex w-full justify-between">
            <h1 class="text-3xl font-bold mb-6">Llista de Pel·lícules</h1>
            <a href="{{ route('peliculas.create') }}" class="inline-block bg-red-700 text-white font-bold py-2 px-6 rounded-t-lg shadow-lg hover:bg-blue-800 transition-all duration-200">
                Crear película
            </a>
        </div>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Nom</th>
                <th class="py-2 px-4 border-b">Duració (minuts)</th>
                <th class="py-2 px-4 border-b">Accions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($peliculas as $pelicula)
                <tr class>
                    <td class="py-2 px-4 border-b text-left text-center">{{ $pelicula->id }}</td>
                    <td class="py-2 px-4 border-b text-left text-center">{{ $pelicula->nombre }}</td>
                    <td class="py-2 px-4 border-b text-left text-center">{{ $pelicula->duracion }}</td>
                    <td class="py-2 px-4 border-b text-left text-center">
                        <a href="{{ route('peliculas.show', $pelicula->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded mr-2">
                            Veure
                        </a>
                        <a href="{{ route('peliculas.edit', $pelicula->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded mr-2">
                            Editar
                        </a>
                        <form action="{{ route('peliculas.destroy', $pelicula) }}" method="POST" class="inline p-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded" onclick="return confirm('Estàs segur que vols eliminar aquesta pel·lícula?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection

