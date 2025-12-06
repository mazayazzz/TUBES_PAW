@extends('layout')
@section('content')
<h1 class="text-xl font-bold mb-4">Daftar Film</h1>
<a href="{{ route('film.create') }}" class="btn btn-primary mb-3">Tambah Film</a>
<table class="table-auto w-full border">
<tr class="bg-gray-200"><th>ID</th><th>Judul</th><th>Durasi</th><th>Genre</th><th>Rating</th><th>Aksi</th></tr>
@foreach($film as $f)
<tr>
<td>{{ $f->id_film }}</td><td>{{ $f->judul }}</td><td>{{ $f->durasi }}</td><td>{{ $f->genre }}</td><td>{{ $f->rating }}</td>
<td><a href="{{ route('film.edit',$f->id_film) }}">Edit</a> | <a href="{{ route('film.show',$f->id_film) }}">Detail</a></td></tr>
@endforeach
</table>
@endsection