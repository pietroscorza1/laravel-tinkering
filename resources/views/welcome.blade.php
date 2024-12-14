@extends('layouts.app')
@section('title', 'Inici - Projecte LaravelTinkering Pietro Scorza')
@section('content')
    <section class="mb-8">
        <h2 class="text-3xl font-bold text-red-800 mb-4">Benvingut al meu projecte de Laravel</h2>
        <p class="text-red-700 mb-4">
            En aquest projecte, podràs crear pel·lícules.
        </p>
            Començar
        </a>
    </section>

    <section class="grid md:grid-cols-2 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-md border border-red-200">
            <h3 class="text-xl font-semibold text-red-800 mb-2">Característiques</h3>
            <ul class="list-disc list-inside text-red-700">
                <li>Integració perfecta amb Laravel</li>
                <li>Components reutilitzables</li>
                <li>Optimització del rendiment</li>
                <li>Seguretat millorada</li>
            </ul>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md border border-red-200">
            <h3 class="text-xl font-semibold text-red-800 mb-2">Recursos</h3>
            <ul class="list-disc list-inside text-red-700">
                <li>Documentació detallada</li>
                <li>Tutorials en vídeo</li>
                <li>Comunitat de suport</li>
                <li>Actualitzacions regulars</li>
            </ul>
        </div>
    </section>
@endsection
