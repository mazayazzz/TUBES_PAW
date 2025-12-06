@extends('layout')

@section('title', isset($data) ? 'Edit Studio' : 'Tambah Studio')

@section('content')
<h1 class="text-2xl font-bold mb-4">{{ isset($data) ? 'Edit Studio' : 'Tambah Studio' }}</h1>

<form action="{{ isset($data) ? route('studio.update', $data->id) : route('studio.store') }}" method="POST">
    @csrf
    @if(isset($data))
        @method('PUT')
    @endif

    <div class="mb-4">
        <label for="nama_studio" class="block mb-1">Nama Studio</label>
        <input type="text" name="nama_studio" id="nama_studio" value="{{ $data->nama_studio ?? '' }}" class="border rounded px-3 py-2 w-full" required>
    </div>

    <div class="mb-4">
        <label for="kapasitas" class="block mb-1">Kapasitas</label>
        <input type="number" name="kapasitas" id="kapasitas" value="{{ $data->kapasitas ?? '' }}" class="border rounded px-3 py-2 w-full" required>
    </div>

    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">
        {{ isset($data) ? 'Update' : 'Simpan' }}
    </button>
</form>
@endsection
