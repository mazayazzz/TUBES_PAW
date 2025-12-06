@extends('layout')
@section('content')
<h1 class="text-xl font-bold mb-4">Tambah Pemesanan</h1>
<form action="{{ route('pemesanan.store') }}" method="POST">@csrf
<label>Pelanggan</label>
<select name="id_pelanggan" class="border w-full mb-2">
@foreach($pelanggan as $p)
<option value="{{ $p->id_pelanggan }}">{{ $p->nama }}</option>
@endforeach
</select>
<label>Jadwal</label>
<select name="id_jadwal" class="border w-full mb-2">
@foreach($jadwal as $j)
<option value="{{ $j->id_jadwal }}">{{ $j->film->judul }} - {{ $j->waktu_pemutaran }}</option>
@endforeach
</select>
<label>Studio</label>
<select name="id_studio" class="border w-full mb-2">
@foreach($studio as $s)
<option value="{{ $s->id_studio }}">{{ $s->nama_studio }}</option>
@endforeach
</select>
<label>Jumlah Tiket</label><input type="number" name="jumlah_tiket" class="border w-full mb-2"/>
<button class="btn btn-primary">Simpan</button>
</form>
@endsection