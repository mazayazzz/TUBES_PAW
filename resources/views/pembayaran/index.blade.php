@extends('layout')

@section('title', 'Pembayaran')

@section('content')
<h1 class="text-2xl font-bold mb-4">Halaman Pembayaran</h1>

<table class="table-auto w-full border">
    <thead>
        <tr class="bg-gray-200">
            <th class="border px-4 py-2">ID Pembayaran</th>
            <th class="border px-4 py-2">Nama Pelanggan</th>
            <th class="border px-4 py-2">Jumlah</th>
            <th class="border px-4 py-2">Tanggal</th>
            <th class="border px-4 py-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pembayaran as $p)
        <tr>
            <td class="border px-4 py-2">{{ $p->id }}</td>
            <td class="border px-4 py-2">{{ $p->nama_pelanggan }}</td>
            <td class="border px-4 py-2">{{ $p->jumlah }}</td>
            <td class="border px-4 py-2">{{ $p->tanggal }}</td>
            <td class="border px-4 py-2">
                <a href="{{ route('pembayaran.show', $p->id) }}" class="text-blue-500">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('pembayaran.create') }}" class="btn btn-primary mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded">Tambah Pembayaran</a>
@endsection
