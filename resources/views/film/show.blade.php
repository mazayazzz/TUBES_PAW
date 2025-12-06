@extends('layout')
@section('content')
<h1 class="text-xl font-bold mb-4">Detail Film</h1>
<p><strong>Judul:</strong> {{ $film->judul }}</p>
<p><strong>Durasi:</strong> {{ $film->durasi }} menit</p>
<p><strong>Genre:</strong> {{ $film->genre }}</p>
<p><strong>Rating:</strong> {{ $film->rating }}</p>
@endsection