@extends('layout')
@section('content')
<h1 class="text-xl font-bold mb-4">Tambah Pelanggan</h1>
<form action="{{ route('pelanggan.store') }}" method="POST">@csrf
<label>Nama</label><input type="text" name="nama" class="border w-full mb-2"/>
<label>Email</label><input type="email" name="email" class="border w-full mb-2"/>
<label>Nomor Telepon</label><input type="text" name="nomor_telepon" class="border w-full mb-2"/>
<label>Alamat</label><textarea name="alamat" class="border w-full mb-2"></textarea>
<button class="btn btn-primary">Simpan</button>
</form>
@endsection