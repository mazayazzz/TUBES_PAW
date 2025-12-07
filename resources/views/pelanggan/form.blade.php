@extends('layout')

@section('title', isset($pelanggan) ? 'Edit Pelanggan' : 'Tambah Pelanggan')

@section('content')
<div class="w-full max-w-md bg-white p-6 rounded-lg shadow-lg mx-auto">
    <h1 class="text-2xl font-bold mb-6 text-center">{{ isset($pelanggan) ? 'Edit Pelanggan' : 'Tambah Pelanggan' }}</h1>

    <form action="{{ isset($pelanggan) ? route('pelanggan.update', $pelanggan->id_pelanggan) : route('pelanggan.store') }}" method="POST">
        @csrf
        @if(isset($pelanggan))
            @method('PUT')
        @endif

        <div class="mb-4">
            <label for="nama" class="block mb-2 font-semibold">Nama Pelanggan</label>
            <input type="text" name="nama" id="nama" value="{{ $pelanggan->nama ?? '' }}" class="border rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block mb-2 font-semibold">Email</label>
            <input type="email" name="email" id="email" value="{{ $pelanggan->email ?? '' }}" class="border rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="nomor_telepon" class="block mb-2 font-semibold">No. Telepon</label>
            <input type="text" name="nomor_telepon" id="nomor_telepon" value="{{ $pelanggan->nomor_telepon ?? '' }}" class="border rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="flex justify-between items-center mt-6">
            <a href="{{ route('pelanggan.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Kembali</a>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                {{ isset($pelanggan) ? 'Update' : 'Simpan' }}
            </button>
        </div>
    </form>
</div>
@endsection
