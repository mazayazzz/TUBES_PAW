@extends('layout')

@section('title', 'Daftar Pemesanan')
@section('header-title', 'Daftar Pemesanan')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Daftar Pemesanan</h1>
        <a href="{{ route('pemesanan.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
            Tambah Pemesanan
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2 text-left">ID</th>
                    <th class="border px-4 py-2 text-left">Pelanggan</th>
                    <th class="border px-4 py-2 text-left">Film</th>
                    <th class="border px-4 py-2 text-left">Studio</th>
                    <th class="border px-4 py-2 text-left">Waktu</th>
                    <th class="border px-4 py-2 text-left">Jumlah Tiket</th>
                    <th class="border px-4 py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($pemesanan as $p)
                <tr class="hover:bg-gray-50">
                    <td class="border px-4 py-2">{{ $p->id_pemesanan }}</td>
                    <td class="border px-4 py-2">{{ $p->pelanggan->nama ?? '-' }}</td>
                    <td class="border px-4 py-2">{{ $p->jadwal->film->judul ?? '-' }}</td>
                    <td class="border px-4 py-2">{{ $p->jadwal->studio->nama_studio ?? '-' }}</td>
                    <td class="border px-4 py-2">
                        {{ \Carbon\Carbon::parse($p->jadwal->waktu_pemutaran)->format('d M Y H:i') ?? '-' }}
                    </td>
                    <td class="border px-4 py-2">{{ $p->jumlah_tiket }}</td>
                    <td class="border px-4 py-2 space-x-2">
                        <a href="{{ route('pemesanan.edit', $p->id_pemesanan) }}" class="text-green-500 hover:underline">Edit</a>
                        <a href="{{ route('pemesanan.show', $p->id_pemesanan) }}" class="text-blue-500 hover:underline">Detail</a>
                        <form action="{{ route('pemesanan.destroy', $p->id_pemesanan) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="border px-4 py-4 text-center text-gray-500">Tidak ada data pemesanan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
