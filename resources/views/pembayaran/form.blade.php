@extends('layout')

@section('title', isset($pembayaran) ? 'Edit Pembayaran' : 'Tambah Pembayaran')
@section('header-title', isset($pembayaran) ? 'Edit Pembayaran' : 'Tambah Pembayaran')

@section('content')
<div class="w-full max-w-2xl bg-white p-6 rounded-lg shadow-lg mx-auto">
    <h1 class="text-2xl font-bold mb-6">{{ isset($pembayaran) ? 'Edit Pembayaran' : 'Tambah Pembayaran' }}</h1>

    <form action="{{ isset($pembayaran) ? route('pembayaran.update', $pembayaran->id) : route('pembayaran.store') }}" method="POST" class="space-y-4">
        @csrf
        @if(isset($pembayaran))
            @method('PUT')
        @endif

        <!-- Pemesanan -->
        <div>
            <label for="id_pemesanan" class="block font-medium mb-1">Pemesanan</label>
            <select name="id_pemesanan" id="id_pemesanan" class="border rounded px-3 py-2 w-full" required>
                <option value="">-- Pilih Pemesanan --</option>
                @foreach($pemesanan as $p)
                    <option value="{{ $p->id_pemesanan }}" {{ isset($pembayaran) && $pembayaran->id_pemesanan == $p->id_pemesanan ? 'selected' : '' }}>
                        {{ $p->nama_pelanggan }} - {{ \Carbon\Carbon::parse($p->created_at)->format('d M Y') }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="total_harga" class="block font-medium mb-1">Total Harga</label>
            <input type="number" name="total_harga" id="total_harga" value="{{ $pembayaran->total_harga ?? '' }}" class="border rounded px-3 py-2 w-full" required>
        </div>

        <div>
            <label for="metode_pembayaran" class="block font-medium mb-1">Metode Pembayaran</label>
            <input type="text" name="metode_pembayaran" id="metode_pembayaran" value="{{ $pembayaran->metode_pembayaran ?? '' }}" class="border rounded px-3 py-2 w-full" required>
        </div>

        <div>
            <label for="tanggal_pembayaran" class="block font-medium mb-1">Tanggal Pembayaran</label>
            <input type="date" name="tanggal_pembayaran" id="tanggal_pembayaran" value="{{ $pembayaran->tanggal_pembayaran ?? '' }}" class="border rounded px-3 py-2 w-full" required>
        </div>

        <div class="flex items-center space-x-3 mt-4">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                {{ isset($pembayaran) ? 'Update' : 'Simpan' }}
            </button>
            <a href="{{ route('pembayaran.index') }}" class="text-gray-700 hover:underline">Batal</a>
        </div>
    </form>
</div>
@endsection
