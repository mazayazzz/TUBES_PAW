@extends('layout')

@section('title', 'Detail Film')
@section('header-title', 'Detail Film')

@section('content')
<div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg mx-auto">
    <h1 class="text-2xl font-bold mb-6 text-center">Detail Film</h1>

    <p><strong>Judul:</strong> {{ $film->judul }}</p>
    <p><strong>Durasi:</strong> {{ $film->durasi }} menit</p>
    <p><strong>Genre:</strong> {{ $film->genre }}</p>
    <p><strong>Rating:</strong> {{ $film->rating }}</p>

    <div class="mt-6 flex justify-between">
        <a href="{{ route('film.index') }}" 
           class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">
           Kembali
        </a>
        <a href="{{ route('film.edit', $film->id_film) }}" 
           class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
           Edit
        </a>
    </div>
</div>
@endsection
