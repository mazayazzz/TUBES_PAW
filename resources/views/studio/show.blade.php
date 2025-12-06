@extends('layout')
@section('content')
<h1 class="text-xl font-bold mb-4">Detail Studio</h1>
<p><strong>Nama Studio:</strong> {{ $studio->nama_studio }}</p>
<p><strong>Kapasitas:</strong> {{ $studio->kapasitas }}</p>
@endsection