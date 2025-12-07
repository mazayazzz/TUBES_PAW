@extends('layout')

@section('title', 'Detail Pemesanan')
@section('header-title', 'Detail Pemesanan')

@section('content')
<div class="max-w-lg mx-auto mt-6 bg-white p-6 rounded-xl shadow-lg">
    <h2 class="text-2xl font-bold mb-6 text-center">Detail Pemesanan</h2>

    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="font-semibold">Nama Pemesan:</div>
        <div>{{ $pemesanan->pelanggan->nama ?? $pemesanan->nama_pemesan }}</div>

        <div class="font-semibold">Email:</div>
        <div>{{ $pemesanan->pelanggan->email ?? $pemesanan->email }}</div>

        <div class="font-semibold">Tanggal Pemesanan:</div>
        <div>{{ \Carbon\Carbon::parse($pemesanan->tanggal_pemesanan)->format('d M Y') }}</div>

        <div class="font-semibold">Jumlah Tiket:</div>
        <div>{{ $pemesanan->jumlah_tiket }}</div>

        <div class="font-semibold">Film:</div>
        <div>{{ $pemesanan->jadwal->film->judul ?? '-' }}</div>

        <div class="font-semibold">Studio:</div>
        <div>{{ $pemesanan->jadwal->studio->nama_studio ?? '-' }}</div>

        <div class="font-semibold">Total Harga:</div>
        <div>Rp {{ number_format($pemesanan->total_harga,0,',','.') }}</div>
    </div>

    <div class="mt-6 flex justify-center gap-4">
        <a href="{{ route('pemesanan.index') }}" 
           class="flex-1 text-center px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition">
            Kembali
        </a>
        <a href="{{ route('pemesanan.edit', $pemesanan->id_pemesanan) }}" 
           class="flex-1 text-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
            Edit
        </a>
    </div>
</div>
@endsection
