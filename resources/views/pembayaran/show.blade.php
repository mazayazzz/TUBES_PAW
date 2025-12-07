@extends('layout')

@section('title', 'Detail Pembayaran')
@section('header-title', 'Detail Pembayaran')

@section('content')
<div class="w-full max-w-md bg-white p-6 rounded-lg shadow-lg mx-auto">
    <h1 class="text-2xl font-bold mb-6 text-center">Detail Pembayaran</h1>

    <div class="space-y-3">
        <p><strong>Pemesanan:</strong> 
            #{{ $pembayaran->pemesanan->id_pemesanan ?? '-' }} - 
            {{ $pembayaran->pemesanan->nama_pelanggan ?? '-' }}
        </p>
        <p><strong>Total Harga:</strong> Rp {{ number_format($pembayaran->total_harga ?? 0, 0, ',', '.') }}</p>
        <p><strong>Metode Pembayaran:</strong> {{ $pembayaran->metode_pembayaran ?? '-' }}</p>
        <p><strong>Tanggal Pembayaran:</strong> {{ $pembayaran->tanggal_pembayaran ?? '-' }}</p>
    </div>

    <div class="flex justify-between mt-6">
        <a href="{{ route('pembayaran.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">
            Kembali
        </a>
        <a href="{{ route('pembayaran.edit', $pembayaran->id) }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
            Edit
        </a>
    </div>
</div>
@endsection
