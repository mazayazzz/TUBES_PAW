@extends('layout')

@section('title', 'Detail Pelanggan')

@section('content')
<div class="w-full max-w-md bg-white p-6 rounded-lg shadow-lg mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Detail Pelanggan</h1>

    <div class="space-y-4">
        <div class="flex justify-between border-b pb-2">
            <span class="font-semibold text-gray-700">ID Pelanggan</span>
            <span class="text-gray-900">{{ $pelanggan->id_pelanggan }}</span>
        </div>
        <div class="flex justify-between border-b pb-2">
            <span class="font-semibold text-gray-700">Nama</span>
            <span class="text-gray-900">{{ $pelanggan->nama }}</span>
        </div>
        <div class="flex justify-between border-b pb-2">
            <span class="font-semibold text-gray-700">Email</span>
            <span class="text-gray-900">{{ $pelanggan->email }}</span>
        </div>
        <div class="flex justify-between pb-2">
            <span class="font-semibold text-gray-700">No. Telepon</span>
            <span class="text-gray-900">{{ $pelanggan->nomor_telepon }}</span>
        </div>
    </div>

    <div class="flex justify-between mt-6">
        <a href="{{ route('pelanggan.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
            Kembali
        </a>
        <a href="{{ route('pelanggan.edit', $pelanggan->id_pelanggan) }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
            Edit
        </a>
    </div>
</div>
@endsection
