@extends('layout') 

@section('title', 'Daftar Film')
@section('header-title', 'Daftar Film')

@section('content')
<div class="w-full max-w-4xl bg-white p-6 rounded-lg shadow-lg">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-xl font-bold">Daftar Film</h1>
        <a href="{{ route('film.create') }}" 
           class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
           Tambah Film
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="table-auto w-full border border-gray-200 rounded-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 border">ID</th>
                    <th class="px-4 py-2 border">Judul</th>
                    <th class="px-4 py-2 border">Durasi</th>
                    <th class="px-4 py-2 border">Genre</th>
                    <th class="px-4 py-2 border">Rating</th>
                    <th class="px-4 py-2 border text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($film as $f)
                <tr class="text-center hover:bg-gray-50">
                    <td class="px-4 py-2 border">{{ $f->id_film }}</td>
                    <td class="px-4 py-2 border">{{ $f->judul }}</td>
                    <td class="px-4 py-2 border">{{ $f->durasi }}</td>
                    <td class="px-4 py-2 border">{{ $f->genre }}</td>
                    <td class="px-4 py-2 border">{{ $f->rating }}</td>
                    <td class="px-4 py-2 border">
                        <div class="flex justify-center space-x-2">
                            <a href="{{ route('film.edit', $f->id_film) }}" class="text-blue-500 hover:underline">Edit</a>
                            <a href="{{ route('film.show', $f->id_film) }}" class="text-green-500 hover:underline">Detail</a>
                            <form action="{{ route('film.destroy', $f->id_film) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center px-4 py-2 border">Belum ada data film.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
