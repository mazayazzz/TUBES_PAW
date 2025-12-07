@extends('layout')

@section('title', 'Detail Tiket')
@section('header-title', 'Detail Tiket')

@section('content')
<div class="w-full max-w-md bg-white p-6 rounded-lg shadow-lg mx-auto">
    <h1 class="text-2xl font-bold mb-6 text-center">Detail Tiket</h1>

    <div class="space-y-3">
        <p><strong>Pemesanan:</strong> 
            #{{ $detail->pemesanan->id_pemesanan ?? '-' }} - 
            {{ $detail->pemesanan->nama_pelanggan ?? '-' }}
        </p>
        <p><strong>Kategori Tiket:</strong> {{ $detail->kategori_tiket ?? '-' }}</p>
        <p><strong>Harga:</strong> Rp {{ number_format($detail->harga ?? 0, 0, ',', '.') }}</p>
    </div>

    <div class="flex justify-between mt-6">
        <a href="{{ route('detail-tiket.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">
            Kembali
        </a>
        <a href="{{ route('detail-tiket.edit', $detail->id) }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
            Edit
        </a>
    </div>
</div>
@endsection
