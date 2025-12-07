@extends('layout')

@section('title', 'Daftar Pelanggan')
@section('header-title', 'Daftar Pelanggan')

@section('content')
<div class="w-full max-w-4xl bg-white p-6 rounded-lg shadow-lg mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-xl font-bold">Daftar Pelanggan</h1>
        <a href="{{ route('pelanggan.create') }}" 
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
           Tambah Pelanggan
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="table-auto w-full border border-gray-200 rounded-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 border">ID</th>
                    <th class="px-4 py-2 border">Nama</th>
                    <th class="px-4 py-2 border">Email</th>
                    <th class="px-4 py-2 border">Telepon</th>
                    <th class="px-4 py-2 border text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pelanggan as $p)
                <tr class="text-center hover:bg-gray-50">
                    <td class="px-4 py-2 border">{{ $p->id_pelanggan }}</td>
                    <td class="px-4 py-2 border">{{ $p->nama }}</td>
                    <td class="px-4 py-2 border">{{ $p->email }}</td>
                    <td class="px-4 py-2 border">{{ $p->nomor_telepon }}</td>
                    <td class="px-4 py-2 border">
                        <div class="flex justify-center space-x-2">
                            <a href="{{ route('pelanggan.edit', $p->id_pelanggan) }}" class="text-blue-500 hover:underline">Edit</a>
                            <a href="{{ route('pelanggan.show', $p->id_pelanggan) }}" class="text-green-500 hover:underline">Detail</a>
                            <form action="{{ route('pelanggan.destroy', $p->id_pelanggan) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pelanggan ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center px-4 py-2 border">Belum ada data pelanggan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
