@extends('layout')
@section('content')
<h1 class="text-xl font-bold mb-4">Tambah Film</h1>
<form action="{{ route('film.store') }}" method="POST">@csrf
<label>Judul</label><input type="text" name="judul" class="border w-full mb-2"/>
<label>Durasi</label><input type="number" name="durasi" class="border w-full mb-2"/>
<label>Genre</label><input type="text" name="genre" class="border w-full mb-2"/>
<label>Rating</label><input type="text" name="rating" class="border w-full mb-2"/>
<button class="btn btn-primary">Simpan</button>
</form>
@endsection