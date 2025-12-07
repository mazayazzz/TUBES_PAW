@extends('layout')

@section('title', 'Daftar Studio')
@section('header-title', 'Daftar Studio')

@section('content')
<div class="w-full max-w-4xl bg-white p-6 rounded-lg shadow-lg">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-xl font-bold">Daftar Studio</h1>
        <a href="{{ route('studio.create') }}" 
           class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
           Tambah Studio
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200 divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">ID</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Nama Studio</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Kapasitas</th>
                    <th class="px-4 py-2 text-center text-sm font-semibold text-gray-700">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($studio as $s)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $s->id_studio }}</td>
                    <td class="px-4 py-2">{{ $s->nama_studio }}</td>
                    <td class="px-4 py-2">{{ $s->kapasitas }}</td>
                    <td class="px-4 py-2 text-center">
                        <div class="flex justify-center space-x-4">
                            <a href="{{ route('studio.edit', $s->id_studio) }}" 
                               class="text-blue-600 hover:underline">Edit</a>
                            <a href="{{ route('studio.show', $s->id_studio) }}" 
                               class="text-green-600 hover:underline">Detail</a>
                            <form action="{{ route('studio.destroy', $s->id_studio) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus studio ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center px-4 py-2">Belum ada data studio.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
