@extends('layout')

@section('title', 'Daftar Detail Tiket')
@section('header-title', 'Daftar Detail Tiket')

@section('content')
<div class="w-full max-w-4xl bg-white p-6 rounded-lg shadow-lg mx-auto">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-xl font-bold">Daftar Detail Tiket</h1>
        <a href="{{ route('detail-tiket.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            Tambah Detail Tiket
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="table-auto w-full border border-gray-200 rounded-lg">
            <thead class="bg-gray-100">
                <tr class="text-center">
                    <th class="px-4 py-2 border">Pemesanan</th>
                    <th class="px-4 py-2 border">Harga</th>
                    <th class="px-4 py-2 border">Kategori Tiket</th>
                    <th class="px-4 py-2 border">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($detail as $d)
                <tr class="text-center hover:bg-gray-50">

                    <td class="px-4 py-2 border">
                        {{ $d->pemesanan->id_pemesanan ?? '-' }}
                    </td>

                    <td class="px-4 py-2 border">
                        Rp {{ number_format($d->harga, 0, ',', '.') }}
                    </td>

                    <td class="px-4 py-2 border">
                        {{ $d->kategori_tiket }}
                    </td>

                    <td class="px-4 py-2 border">
                        <div class="flex justify-center space-x-3">

                            <a href="{{ route('detail-tiket.edit', $d) }}"
                               class="text-blue-600 hover:underline">
                                Edit
                            </a>

                            <a href="{{ route('detail-tiket.show', $d) }}"
                               class="text-green-600 hover:underline">
                                Detail
                            </a>

                            <form action="{{ route('detail-tiket.destroy', $d) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus detail tiket ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">
                                    Hapus
                                </button>
                            </form>

                        </div>
                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="4"
                        class="text-center px-4 py-3 border text-gray-500">
                        Belum ada data detail tiket.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection
