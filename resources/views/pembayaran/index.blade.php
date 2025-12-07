@extends('layout')

@section('title', 'Daftar Pembayaran')
@section('header-title', 'Daftar Pembayaran')

@section('content')
<div class="w-full max-w-4xl bg-white p-6 rounded-lg shadow-lg mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-xl font-bold">Daftar Pembayaran</h1>
        <a href="{{ route('pembayaran.create') }}" 
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
           Tambah Pembayaran
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="table-auto w-full border border-gray-200 rounded-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 border">ID</th>
                    <th class="px-4 py-2 border">Nama Pelanggan</th>
                    <th class="px-4 py-2 border">Total Harga</th>
                    <th class="px-4 py-2 border">Metode Pembayaran</th>
                    <th class="px-4 py-2 border">Tanggal Bayar</th>
                    <th class="px-4 py-2 border text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pembayaran as $p)
                <tr class="text-center hover:bg-gray-50">
                    <td class="px-4 py-2 border">{{ $p->id }}</td>
                    <td class="px-4 py-2 border">{{ $p->pemesanan->pelanggan->nama ?? '-' }}</td>
                    <td class="px-4 py-2 border">Rp {{ number_format($p->total_harga,0,',','.') }}</td>
                    <td class="px-4 py-2 border">{{ $p->metode_pembayaran }}</td>
                    <td class="px-4 py-2 border">{{ \Carbon\Carbon::parse($p->tanggal_pembayaran)->format('d M Y') }}</td>
                    <td class="px-4 py-2 border">
                        <div class="flex justify-center space-x-2">
                            <a href="{{ route('pembayaran.edit', $p->id) }}" class="text-blue-500 hover:underline">Edit</a>
                            <a href="{{ route('pembayaran.show', $p->id) }}" class="text-green-500 hover:underline">Detail</a>
                            <form action="{{ route('pembayaran.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pembayaran ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center px-4 py-2 border">Belum ada data pembayaran.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
