@extends('layout')

@section('title', isset($data) ? 'Edit Detail Tiket' : 'Tambah Detail Tiket')

@section('content')
<h1 class="text-2xl font-bold mb-4">{{ isset($data) ? 'Edit Detail Tiket' : 'Tambah Detail Tiket' }}</h1>

<form action="{{ isset($data) ? route('detail-tiket.update', $data->id) : route('detail-tiket.store') }}" method="POST">
    @csrf
    @if(isset($data))
        @method('PUT')
    @endif

    <div class="mb-4">
        <label for="pemesanan_id" class="block mb-1">Pilih Pemesanan</label>
        <select name="pemesanan_id" id="pemesanan_id" class="border rounded px-3 py-2 w-full">
            <option value="">-- Pilih Pemesanan --</option>
            @foreach($pemesanan as $p)
                <option value="{{ $p->id }}" {{ isset($data) && $data->pemesanan_id == $p->id ? 'selected' : '' }}>
                    {{ $p->nama_pelanggan }} - {{ $p->tanggal }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label for="kursi" class="block mb-1">Nomor Kursi</label>
        <input type="text" name="kursi" id="kursi" value="{{ $data->kursi ?? '' }}" class="border rounded px-3 py-2 w-full">
    </div>

    <div class="mb-4">
        <label for="harga" class="block mb-1">Harga</label>
        <input type="number" name="harga" id="harga" value="{{ $data->harga ?? '' }}" class="border rounded px-3 py-2 w-full">
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
        {{ isset($data) ? 'Update' : 'Simpan' }}
    </button>
    <a href="{{ route('detail-tiket.index') }}" class="ml-2 text-gray-700">Batal</a>
</form>
@endsection
