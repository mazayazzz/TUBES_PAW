@extends('layout')

@section('title', isset($studio) ? 'Edit Studio' : 'Tambah Studio')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md mx-auto">
    <h1 class="text-2xl font-bold mb-6 text-center">
        {{ isset($studio) ? 'Edit Studio' : 'Tambah Studio' }}
    </h1>

    <form action="{{ isset($studio) ? route('studio.update', $studio->id_studio) : route('studio.store') }}" method="POST">
        @csrf
        @if(isset($studio))
            @method('PUT')
        @endif

        <div class="mb-4">
            <label for="nama_studio" class="block mb-2 font-semibold">Nama Studio</label>
            <input type="text" name="nama_studio" id="nama_studio" value="{{ $studio->nama_studio ?? '' }}" 
                class="border rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="kapasitas" class="block mb-2 font-semibold">Kapasitas</label>
            <input type="number" name="kapasitas" id="kapasitas" value="{{ $studio->kapasitas ?? '' }}" 
                class="border rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="flex justify-between">
            <a href="{{ route('studio.index') }}" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">
                Kembali
            </a>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                {{ isset($studio) ? 'Update' : 'Simpan' }}
            </button>
        </div>
    </form>
</div>
@endsection
