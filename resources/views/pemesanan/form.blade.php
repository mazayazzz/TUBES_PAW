<!-- resources/views/pemesanan/form.blade.php -->

@extends('layout')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white shadow rounded-xl">
    <h2 class="text-2xl font-bold mb-4">{{ isset($pemesanan) ? 'Edit' : 'Tambah' }} Pemesanan</h2>

    <form action="{{ isset($pemesanan) ? route('pemesanan.update', $pemesanan->id_pemesanan) : route('pemesanan.store') }}" method="POST">
        @csrf
        @if(isset($pemesanan))
            @method('PUT')
        @endif

        <!-- Pilih Pelanggan -->
        <div class="mb-4">
            <label class="block font-semibold">Nama Pemesan</label>
            <select name="id_pelanggan" class="w-full border rounded p-2" required>
                <option value="">-- Pilih Pelanggan --</option>
                @foreach($pelanggan as $p)
                    <option value="{{ $p->id_pelanggan }}" 
                        {{ isset($pemesanan) && $pemesanan->id_pelanggan == $p->id_pelanggan ? 'selected' : '' }}>
                        {{ $p->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Pilih Jadwal -->
        <div class="mb-4">
            <label class="block font-semibold">Jadwal (Film & Studio)</label>
            <select name="id_jadwal" class="w-full border rounded p-2" required>
                <option value="">-- Pilih Jadwal --</option>
                @foreach($jadwal as $j)
                    <option value="{{ $j->id_jadwal }}"
                        {{ isset($pemesanan) && $pemesanan->id_jadwal == $j->id_jadwal ? 'selected' : '' }}>
                        {{ $j->film->judul }} | Studio: {{ $j->studio->nama_studio ?? '-' }} | {{ $j->tanggal }} {{ $j->jam }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Jumlah Tiket -->
        <div class="mb-4">
            <label class="block font-semibold">Jumlah Tiket</label>
            <input type="number" name="jumlah_tiket" class="w-full border rounded p-2" 
                value="{{ $pemesanan->jumlah_tiket ?? old('jumlah_tiket') }}" min="1" required>
        </div>

        <!-- Tombol Submit -->
        <div class="flex justify-between mt-6">
            <a href="{{ route('pemesanan.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Kembali</a>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                {{ isset($pemesanan) ? 'Update' : 'Simpan' }}
            </button>
        </div>
    </form>
</div>
@endsection
