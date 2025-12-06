@extends('layout')
@section('content')
<h1 class="text-xl font-bold mb-4">Daftar Pelanggan</h1>
<a href="{{ route('pelanggan.create') }}" class="btn btn-primary mb-3">Tambah Pelanggan</a>
<table class="table-auto w-full border">
<tr class="bg-gray-200">
<th>ID</th><th>Nama</th><th>Email</th><th>Telepon</th><th>Aksi</th></tr>
@foreach($pelanggan as $p)
<tr>
<td>{{ $p->id_pelanggan }}</td>
<td>{{ $p->nama }}</td>
<td>{{ $p->email }}</td>
<td>{{ $p->nomor_telepon }}</td>
<td>
<a href="{{ route('pelanggan.edit',$p->id_pelanggan) }}">Edit</a> |
<a href="{{ route('pelanggan.show',$p->id_pelanggan) }}">Detail</a>
</td></tr>
@endforeach
</table>
@endsection