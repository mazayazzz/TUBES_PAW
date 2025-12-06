@extends('layout')
@section('content')
<h1 class="text-xl font-bold mb-4">Edit Pelanggan</h1>
<form action="{{ route('pelanggan.update',$pelanggan->id_pelanggan) }}" method="POST">@csrf @method('PUT')
<label>Nama</label><input type="text" name="nama" value="{{ $pelanggan->nama }}" class="border w-full mb-2"/>
<label>Email</label><input type="email" name="email" value="{{ $pelanggan->email }}" class="border w-full mb-2"/>
<label>Telepon</label><input type="text" name="nomor_telepon" value="{{ $pelanggan->nomor_telepon }}" class="border w-full mb-2"/>
<label>Alamat</label><textarea name="alamat" class="border w-full mb-2">{{ $pelanggan->alamat }}</textarea>
<button class="btn btn-primary">Update</button>
</form>
@endsection