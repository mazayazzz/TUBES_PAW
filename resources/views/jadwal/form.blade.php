@extends('layout')

@section('title', isset($data) ? 'Edit Jadwal' : 'Tambah Jadwal')

@section('content')
<h1 class="text-2xl font-bold mb-4">{{ isset($data) ? 'Edit Jadwal' : 'Tambah Jadwal' }}</h1>

<form action="{{ isset($data) ? route('jadwal.update', $data->id) : route('jadwal.store') }}" method="POST">
    @csrf
    @if(isset($data))
        @method('PUT')
    @endif

    <div class="mb-4">
        <label for="film_id" class="block mb-1">Film</label>
        <select name="film_id" id="film_id" class="border rounded px-3 py-2 w-full" required>
            <option value="">-- Pilih Film --</option>
            @foreach($film as $f)
                <option value="{{ $f->id }}" {{ isset($data) && $data->film_id == $f->id ? 'selected' : '' }}>
                    {{ $f->judul }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label for="studio_id" class="block mb-1">Studio</label>
        <select name="studio_id" id="studio_id" class="border rounded px-3 py-2 w-full" required>
            <option value="">-- Pilih Studio --</option>
            @foreach($studio as $s)
                <option value="{{ $s->id }}" {{ isset($data) && $data->studio_id == $s->id ? 'selected' : '' }}>
                    {{ $s->nama_studio }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label for="tanggal" class="block mb-1">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal" value="{{ $data->tanggal ?? '' }}" class="border rounded px-3 py-2 w-full" required>
    </div>

    <div class="mb-4">
        <label for="jam" class="block mb-1">Jam</label>
        <input type="time" name="jam" id="jam" value="{{ $data->jam ?? '' }}" class="border rounded px-3 py-2 w-full" required>
    </div>

    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">
        {{ isset($data) ? 'Update' : 'Simpan' }}
    </button>
</form>
@endsection
