@extends('layout')

@section('title', isset($film) ? 'Edit Film' : 'Tambah Film')
@section('header-title', isset($film) ? 'Edit Film' : 'Tambah Film')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h1 class="text-2xl font-bold mb-6 text-center">{{ isset($film) ? 'Edit Film' : 'Tambah Film' }}</h1>

    <form action="{{ isset($film) ? route('film.update', $film->id_film) : route('film.store') }}" method="POST">
        @csrf
        @if(isset($film))
            @method('PUT')
        @endif

        <div class="mb-4">
            <label for="judul" class="block mb-2 font-semibold">Judul</label>
            <input type="text" name="judul" id="judul" value="{{ $film->judul ?? '' }}"
                   class="border rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="durasi" class="block mb-2 font-semibold">Durasi</label>
            <input type="text" name="durasi" id="durasi" value="{{ $film->durasi ?? '' }}"
                   class="border rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="genre" class="block mb-2 font-semibold">Genre</label>
            <input type="text" name="genre" id="genre" value="{{ $film->genre ?? '' }}"
                   class="border rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="rating" class="block mb-2 font-semibold">Rating</label>
            <input type="text" name="rating" id="rating" value="{{ $film->rating ?? '' }}"
                   class="border rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
            {{ isset($film) ? 'Update' : 'Simpan' }}
        </button>
    </form>
</div>
@endsection
