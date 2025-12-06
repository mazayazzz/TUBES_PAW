@extends('layout')
@section('content')
<h1 class="text-xl font-bold mb-4">Daftar Studio</h1>
<a href="{{ route('studio.create') }}" class="btn btn-primary mb-3">Tambah Studio</a>
<table class="table-auto w-full border">
<tr class="bg-gray-200"><th>ID</th><th>Nama Studio</th><th>Kapasitas</th><th>Aksi</th></tr>
@foreach($studio as $s)
<tr>
<td>{{ $s->id_studio }}</td><td>{{ $s->nama_studio }}</td><td>{{ $s->kapasitas }}</td>
<td><a href="{{ route('studio.edit',$s->id_studio) }}">Edit</a> | <a href="{{ route('studio.show',$s->id_studio) }}">Detail</a></td></tr>
@endforeach
</table>
@endsection