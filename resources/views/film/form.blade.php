@extends('layout')

@section('content')
<h1 class="text-xl font-bold mb-4">Tambah Film</h1>

<form action="{{ route('film.store') }}" method="POST" class="space-y-4">
    @csrf
    <div>
        <label>Judul:</label>
        <input type="text" name="judul" class="border p-1" required>
    </div>
    <div>
        <label>Durasi:</label>
        <input type="number" name="durasi" class="border p-1" required>
    </div>
    <div>
        <label>Genre:</label>
        <input type="text" name="genre" class="border p-1" required>
    </div>
    <div>
        <label>Rating:</label>
        <input type="number" step="0.1" name="rating" class="border p-1" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2">Simpan</button>
</form>
@endsection
