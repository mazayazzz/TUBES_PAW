@extends('layout')
@section('content')
<h1 class="text-xl font-bold mb-4">Edit Film</h1>
<form action="{{ route('film.update',$film->id_film) }}" method="POST">@csrf @method('PUT')
<label>Judul</label><input type="text" name="judul" value="{{ $film->judul }}" class="border w-full mb-2"/>
<label>Durasi</label><input type="number" name="durasi" value="{{ $film->durasi }}" class="border w-full mb-2"/>
<label>Genre</label><input type="text" name="genre" value="{{ $film->genre }}" class="border w-full mb-2"/>
<label>Rating</label><input type="text" name="rating" value="{{ $film->rating }}" class="border w-full mb-2"/>
<button class="btn btn-primary">Update</button>
</form>
@endsection