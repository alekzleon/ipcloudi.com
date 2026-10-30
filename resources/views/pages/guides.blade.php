@extends('layouts.info')
@section('title', 'Guías sobre IP, redes y privacidad')
@section('description', 'Aprende sobre direcciones IP públicas y privadas, cambios de IP, CGNAT, privacidad y consultas de red con las guías de IPCloudi.')
@section('content')
<p>Resuelve tus dudas sobre tu conexión con explicaciones, ejemplos y pasos prácticos.</p>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
    @foreach(config('guides') as $slug => $item)
        <a href="/{{ $slug }}" class="rounded-2xl bg-white p-6 text-gray-900 hover:ring-2 hover:ring-pink-500 focus-visible:outline focus-visible:outline-pink-500">
            <h2 class="text-xl font-bold">{{ $item['title'] }}</h2>
            <p class="mt-3 text-sm text-gray-600">{{ $item['description'] }}</p>
            <span class="inline-block mt-4 text-sm font-semibold text-pink-600">Leer guía →</span>
        </a>
    @endforeach
</div>
@endsection
