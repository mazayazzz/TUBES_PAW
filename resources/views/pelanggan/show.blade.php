@extends('layout')
@section('content')
<h1 class="text-xl font-bold mb-4">Detail Pelanggan</h1>
<p><strong>Nama:</strong> {{ $pelanggan->nama }}</p>
<p><strong>Email:</strong> {{ $pelanggan->email }}</p>
<p><strong>Telepon:</strong> {{ $pelanggan->nomor_telepon }}</p>
<p><strong>Alamat:</strong> {{ $pelanggan->alamat }}</p>
@endsection