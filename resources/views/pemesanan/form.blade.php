<!-- resources/views/pemesanan/form.blade.php -->

@extends('layout')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white shadow rounded-xl">
    <h2 class="text-2xl font-bold mb-4">Form Pemesanan</h2>

    <form action="{{ isset($pemesanan) ? route('pemesanan.update', $pemesanan->id) : route('pemesanan.store') }}" method="POST">
        @csrf
        @if(isset($pemesanan))
            @method('PUT')
        @endif

        <!-- Nama Pemesan -->
        <div class="mb-4">
            <label class="block font-semibold">Nama Pemesan</label>
            <input type="text" name="nama" class="w-full border rounded p-2" value="{{ $pemesanan->nama ?? old('nama') }}" required>
        </div>

        <!-- Tanggal Pemesanan -->
        <div class="mb-4">
            <label class="block font-semibold">Tanggal</label>
            <input type="date" name="tanggal" class="w-full border rounded p-2" value="{{ $pemesanan->tanggal ?? old('tanggal') }}" required>
        </div>

        <!-- Jumlah Tiket -->
        <div class="mb-4">
            <label class="block font-semibold">Jumlah Tiket</label>
            <input type="number" name="jumlah_tiket" class="w-full border rounded p-2" value="{{ $pemesanan->jumlah_tiket ?? old('jumlah_tiket') }}" min="1" required>
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Simpan</button>
    </form>
</div>
@endsection