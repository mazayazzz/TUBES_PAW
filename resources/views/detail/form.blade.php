@extends('layout')

@section('title', isset($detail) ? 'Edit Detail Tiket' : 'Tambah Detail Tiket')
@section('header-title', isset($detail) ? 'Edit Detail Tiket' : 'Tambah Detail Tiket')

@section('content')
<div class="w-full max-w-2xl bg-white p-6 rounded-lg shadow-lg mx-auto">
    <h1 class="text-2xl font-bold mb-6">{{ isset($detail) ? 'Edit Detail Tiket' : 'Tambah Detail Tiket' }}</h1>

    <form action="{{ isset($detail) ? route('detail-tiket.update', $detail->id) : route('detail-tiket.store') }}" method="POST" class="space-y-4">
        @csrf
        @if(isset($detail))
            @method('PUT')
        @endif

        <!-- Pemesanan -->
        <div>
            <label for="id_pemesanan" class="block font-medium mb-1">Pemesanan</label>
            <select name="id_pemesanan" id="id_pemesanan" class="border rounded px-3 py-2 w-full" required>
                <option value="">-- Pilih Pemesanan --</option>
                @foreach($pemesanan as $p)
                    <option value="{{ $p->id_pemesanan }}" {{ isset($detail) && $detail->id_pemesanan == $p->id_pemesanan ? 'selected' : '' }}>
                        {{ $p->nama_pelanggan }} - {{ \Carbon\Carbon::parse($p->created_at)->format('d M Y') }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="kategori_tiket" class="block font-medium mb-1">Kategori Tiket</label>
            <input type="text" name="kategori_tiket" id="kategori_tiket" value="{{ $detail->kategori_tiket ?? '' }}" class="border rounded px-3 py-2 w-full" required>
        </div>

        <div>
            <label for="harga" class="block font-medium mb-1">Harga</label>
            <input type="number" name="harga" id="harga" value="{{ $detail->harga ?? '' }}" class="border rounded px-3 py-2 w-full" required>
        </div>

        <div class="flex items-center space-x-3 mt-4">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                {{ isset($detail) ? 'Update' : 'Simpan' }}
            </button>
            <a href="{{ route('detail-tiket.index') }}" class="text-gray-700 hover:underline">Batal</a>
        </div>
    </form>
</div>
@endsection
