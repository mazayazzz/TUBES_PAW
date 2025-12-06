@extends('layout')

@section('title', isset($data) ? 'Edit Pelanggan' : 'Tambah Pelanggan')

@section('content')
<h1 class="text-2xl font-bold mb-4">{{ isset($data) ? 'Edit Pelanggan' : 'Tambah Pelanggan' }}</h1>

<form action="{{ isset($data) ? route('pelanggan.update', $data->id) : route('pelanggan.store') }}" method="POST">
    @csrf
    @if(isset($data))
        @method('PUT')
    @endif

    <div class="mb-4">
        <label for="nama" class="block mb-1">Nama Pelanggan</label>
        <input type="text" name="nama" id="nama" value="{{ $data->nama ?? '' }}" class="border rounded px-3 py-2 w-full" required>
    </div>

    <div class="mb-4">
        <label for="email" class="block mb-1">Email</label>
        <input type="email" name="email" id="email" value="{{ $data->email ?? '' }}" class="border rounded px-3 py-2 w-full" required>
    </div>

    <div class="mb-4">
        <label for="telepon" class="block mb-1">No. Telepon</label>
        <input type="text" name="telepon" id="telepon" value="{{ $data->telepon ?? '' }}" class="border rounded px-3 py-2 w-full" required>
    </div>

    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">
        {{ isset($data) ? 'Update' : 'Simpan' }}
    </button>
</form>
@endsection
