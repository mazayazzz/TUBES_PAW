@extends('layout')

@section('title', isset($data) ? 'Edit Pembayaran' : 'Tambah Pembayaran')

@section('content')
<h1 class="text-2xl font-bold mb-4">{{ isset($data) ? 'Edit Pembayaran' : 'Tambah Pembayaran' }}</h1>

<form action="{{ isset($data) ? route('pembayaran.update', $data->id) : route('pembayaran.store') }}" method="POST" class="space-y-4">
    @csrf
    @if(isset($data))
        @method('PUT')
    @endif

    <div>
        <label for="id_pemesanan" class="block font-medium">Pemesanan</label>
        <select name="id_pemesanan" id="id_pemesanan" class="border rounded px-2 py-1 w-full">
            <option value="">-- Pilih Pemesanan --</option>
            @foreach($pemesanan as $p)
                <option value="{{ $p->id }}" {{ isset($data) && $data->id_pemesanan == $p->id ? 'selected' : '' }}>
                    {{ $p->detail ?? 'Pemesanan #'.$p->id }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="nama_pelanggan" class="block font-medium">Nama Pelanggan</label>
        <input type="text" name="nama_pelanggan" id="nama_pelanggan" value="{{ $data->nama_pelanggan ?? '' }}" class="border rounded px-2 py-1 w-full">
    </div>

    <div>
        <label for="jumlah" class="block font-medium">Jumlah</label>
        <input type="number" name="jumlah" id="jumlah" value="{{ $data->jumlah ?? '' }}" class="border rounded px-2 py-1 w-full">
    </div>

    <div>
        <label for="tanggal" class="block font-medium">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal" value="{{ $data->tanggal ?? '' }}" class="border rounded px-2 py-1 w-full">
    </div>

    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">
        {{ isset($data) ? 'Update' : 'Simpan' }}
    </button>
</form>
@endsection
