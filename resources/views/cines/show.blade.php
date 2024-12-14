@extends('layouts.app')

@section('title', 'Detalls de la Pel·lícula - Projecte LaravelTinkering Pietro Scorza')

@section('content')
    <section class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Detalls de la Pel·lícula</h1>

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <h2 class="text-xl font-semibold text-gray-700">{{ $cine->nombre }}</h2>
            </div>
            <div class="mb-4">
                <p class="text-gray-700"><strong>Descripció:</strong> {{ $cine->descripcion }}</p>
            </div>
            <div class="mb-4">
                <p class="text-gray-700"><strong>Director:</strong> {{ $cine->director }}</p>
            </div>
            <div class="mb-4">
                <p class="text-gray-700"><strong>Pressupost:</strong> {{ number_format($cine->presupuesto, 2) }} €</p>
            </div>
            <div class="mb-4">
                <p class="text-gray-700"><strong>Duració:</strong> {{ $cine->duracion }} minuts</p>
            </div>
            <div class="mt-6">
                <a href="{{ route('cines.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Tornar a la llista
                </a>
                <a href="{{ route('cines.edit', $cine->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ml-2">
                    Editar
                </a>
            </div>
        </div>
    </section>
@endsection

