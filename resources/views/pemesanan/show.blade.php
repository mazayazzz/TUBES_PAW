@extends('layouts.app')

@section('title', 'Detail Pemesanan')

@section('content')
<h2>Detail Pemesanan</h2>

<div class="card p-3">
    <p><strong>Nama Pemesan:</strong> {{ $pemesanan->nama_pemesan }}</p>
    <p><strong>Email:</strong> {{ $pemesanan->email }}</p>
    <p><strong>Tanggal Pemesanan:</strong> {{ $pemesanan->tanggal_pemesanan }}</p>
    <p><strong>Jumlah Tiket:</strong> {{ $pemesanan->jumlah_tiket }}</p>
    <p><strong>Film:</strong> {{ $pemesanan->film->judul_film ?? '-' }}</p>
    <p><strong>Total Harga:</strong> Rp {{ number_format($pemesanan->total_harga,0,',','.') }}</p>
</div>

<a href="{{ route('pemesanan.index') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection