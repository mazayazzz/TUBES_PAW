@extends('layout')

@section('title', 'Detail Jadwal')
@section('header-title', 'Detail Jadwal')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg max-w-md mx-auto">
    <h1 class="text-2xl font-bold mb-4">Detail Jadwal</h1>

    <p><strong>Film:</strong> {{ $jadwal->film->judul }}</p>
    <p><strong>Tanggal:</strong> {{ $jadwal->tanggal }}</p>
    <p><strong>Jam:</strong> {{ $jadwal->jam }}</p>

    <div class="mt-6 flex justify-between">
        <a href="{{ route('jadwal.index') }}" 
           class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">
           Kembali
        </a>
        <a href="{{ route('jadwal.edit', $jadwal->id_jadwal) }}" 
           class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
           Edit
        </a>
    </div>
</div>
@endsection
