@extends('layout')

@section('title', 'Detail Studio')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md mx-auto">
    <h1 class="text-2xl font-bold mb-6 text-center">Detail Studio</h1>

    <div class="mb-4">
        <p class="font-semibold">ID Studio:</p>
        <p class="border rounded px-3 py-2 bg-gray-50">{{ $studio->id_studio }}</p>
    </div>

    <div class="mb-4">
        <p class="font-semibold">Nama Studio:</p>
        <p class="border rounded px-3 py-2 bg-gray-50">{{ $studio->nama_studio }}</p>
    </div>

    <div class="mb-6">
        <p class="font-semibold">Kapasitas:</p>
        <p class="border rounded px-3 py-2 bg-gray-50">{{ $studio->kapasitas }}</p>
    </div>

    <div class="flex justify-between">
        <a href="{{ route('studio.index') }}" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">
            Kembali
        </a>
        <a href="{{ route('studio.edit', $studio->id_studio) }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
            Edit
        </a>
    </div>
</div>
@endsection
