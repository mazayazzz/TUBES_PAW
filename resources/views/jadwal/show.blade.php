@extends('layout')
@section('content')
<h1 class="text-xl font-bold mb-4">Detail Jadwal</h1>
<p><strong>Film:</strong> {{ $jadwal->film->judul }}</p>
<p><strong>Waktu Pemutaran:</strong> {{ $jadwal->waktu_pemutaran }}</p>
@endsection
