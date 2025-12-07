@extends('layout')

@section('title', isset($jadwal) ? 'Edit Jadwal' : 'Tambah Jadwal')
@section('header-title', isset($jadwal) ? 'Edit Jadwal' : 'Tambah Jadwal')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg max-w-md mx-auto">
    <h1 class="text-2xl font-bold mb-6 text-center">
        {{ isset($jadwal) ? 'Edit Jadwal' : 'Tambah Jadwal' }}
    </h1>

    <form action="{{ isset($jadwal) ? route('jadwal.update', $jadwal->id_jadwal) : route('jadwal.store') }}" method="POST">
        @csrf
        @if(isset($jadwal))
            @method('PUT')
        @endif

        <!-- Film -->
        <div class="mb-4">
            <label for="id_film" class="block font-semibold mb-2">Film</label>
            <select name="id_film" id="id_film" class="border rounded px-3 py-2 w-full">
                @foreach($film as $f)
                    <option value="{{ $f->id_film }}" {{ isset($jadwal) && $jadwal->id_film == $f->id_film ? 'selected' : '' }}>
                        {{ $f->judul }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Waktu Pemutaran -->
        <div class="mb-4">
            <label for="waktu_pemutaran" class="block font-semibold mb-2">Waktu Pemutaran</label>
            <input type="datetime-local" name="waktu_pemutaran" id="waktu_pemutaran"
                value="{{ isset($jadwal) ? \Carbon\Carbon::parse($jadwal->waktu_pemutaran)->format('Y-m-d\TH:i') : '' }}"
                class="border rounded px-3 py-2 w-full" required>
        </div>

        <!-- Tombol -->
        <div class="flex justify-between mt-6">
            <a href="{{ route('jadwal.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                Kembali
            </a>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                {{ isset($jadwal) ? 'Update' : 'Simpan' }}
            </button>
        </div>
    </form>
</div>
@endsection
