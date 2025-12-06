@extends('layout')
@section('content')
<h1 class="text-xl font-bold mb-4">Edit Jadwal</h1>
<form action="{{ route('jadwal.update',$jadwal->id_jadwal) }}" method="POST">@csrf @method('PUT')
<label>Film</label>
<select name="id_film" class="border w-full mb-2">
@foreach($film as $f)
<option value="{{ $f->id_film }}" {{ $jadwal->id_film == $f->id_film ? 'selected' : '' }}>{{ $f->judul }}</option>
@endforeach
</select>
<label>Waktu Pemutaran</label><input type="datetime-local" name="waktu_pemutaran" value="{{ $jadwal->waktu_pemutaran }}" class="border w-full mb-2"/>
<button class="btn btn-primary">Update</button>
</form>
@endsection