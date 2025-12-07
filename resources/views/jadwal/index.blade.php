@extends('layout')

@section('title', 'Daftar Jadwal')
@section('header-title', 'Daftar Jadwal')

@section('content')
<div class="w-full max-w-4xl bg-white p-6 rounded-lg shadow-lg">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-xl font-bold">Daftar Jadwal</h1>
        <a href="{{ route('jadwal.create') }}" 
           class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
           Tambah Jadwal
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200 divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">ID</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Film</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Waktu Pemutaran</th>
                    <th class="px-4 py-2 text-center text-sm font-semibold text-gray-700">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($jadwal as $j)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $j->id_jadwal }}</td>
                    <td class="px-4 py-2">{{ $j->film->judul }}</td>
                    <td class="px-4 py-2">{{ $j->waktu_pemutaran }}</td>
                    <td class="px-4 py-2 text-center">
                        <div class="flex justify-center space-x-4">
                            <a href="{{ route('jadwal.edit', $j->id_jadwal) }}" 
                               class="text-blue-600 hover:underline">Edit</a>
                            <a href="{{ route('jadwal.show', $j->id_jadwal) }}" 
                               class="text-green-600 hover:underline">Detail</a>
                            <form action="{{ route('jadwal.destroy', $j->id_jadwal) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus jadwal ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
