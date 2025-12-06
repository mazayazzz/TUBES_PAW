@extends('layout')
@section('content')
<h1 class="text-xl font-bold mb-4">Tambah Jadwal</h1>
<form action="{{ route('jadwal.store') }}" method="POST">@csrf
<label>Film</label>
<select name="id_film" class="border w-full mb-2">
@foreach($film as $f)
<option value="{{ $f->id_film }}">{{ $f->judul }}</option>
@endforeach
</select>
<label>Waktu Pemutaran</label><input type="datetime-local" name="waktu_pemutaran" class="border w-full mb-2"/>
<button class="btn btn-primary">Simpan</button>
</form>
@endsection