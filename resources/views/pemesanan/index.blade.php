@extends('layout')
@section('content')
<h1 class="text-xl font-bold mb-4">Daftar Pemesanan</h1>
<a href="{{ route('pemesanan.create') }}" class="btn btn-primary mb-3">Tambah Pemesanan</a>
<table class="table-auto w-full border">
<tr class="bg-gray-200"><th>ID</th><th>Pelanggan</th><th>Film</th><th>Studio</th><th>Jumlah Tiket</th><th>Aksi</th></tr>
@foreach($pemesanan as $p)
<tr>
<td>{{ $p->id_pemesanan }}</td>
<td>{{ $p->pelanggan->nama }}</td>
<td>{{ $p->jadwal->film->judul }}</td>
<td>{{ $p->studio->nama_studio ?? '-' }}</td>
<td>{{ $p->jumlah_tiket }}</td>
<td><a href="{{ route('pemesanan.edit',$p->id_pemesanan) }}">Edit</a> | <a href="{{ route('pemesanan.show',$p->id_pemesanan) }}">Detail</a></td></tr>
@endforeach
</table>
@endsection
