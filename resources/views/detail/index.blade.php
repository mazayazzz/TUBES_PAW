@extends('layout')

@section('content')
<h1 class="text-xl font-bold mb-4">Daftar Detail Tiket</h1>

<a href="{{ route('detail-tiket.create') }}" class="btn btn-primary mb-3">Tambah Detail Tiket</a>

<table class="table-auto w-full border">
    <thead>
        <tr class="bg-gray-200">
            <th>ID</th>
            <th>Pemesanan</th>
            <th>Jumlah Tiket</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($detail as $d)
        <tr>
            <td>{{ $d->id_detail }}</td>
            <td>{{ $d->pemesanan->id_pemesanan ?? '-' }}</td>
            <td>{{ $d->tiket }}</td>
            <td>{{ $d->harga }}</td>
            <td>
                <a href="{{ route('detail.edit', $d->id_detail) }}" class="text-blue-500">Edit</a> |
                <a href="{{ route('detail.show', $d->id_detail) }}" class="text-green-500">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
