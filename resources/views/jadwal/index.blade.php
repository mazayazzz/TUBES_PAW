@extends('layout')
@section('content')
<h1 class="text-xl font-bold mb-4">Daftar Jadwal</h1>
<a href="{{ route('jadwal.create') }}" class="btn btn-primary mb-3">Tambah Jadwal</a>
<table class="table-auto w-full border">
<tr class="bg-gray-200"><th>ID</th><th>Film</th><th>Waktu Pemutaran</th><th>Aksi</th></tr>
@foreach($jadwal as $j)
<tr>
    <td>{{ $j->id_jadwal }}</td>
    <td>{{ $j->film->judul }}</td>
    <td>{{ $j->waktu_pemutaran }}</td>
    <td>
        <a href="{{ route('jadwal.edit',$j->id_jadwal) }}">Edit</a> |
        <a href="{{ route('jadwal.show',$j->id_jadwal) }}">Detail</a>
    </td>
</tr>
@endforeach
</table>
@endsection