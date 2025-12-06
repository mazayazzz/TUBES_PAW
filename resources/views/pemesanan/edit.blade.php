@extends('layouts.app')

@section('title', 'Edit Pemesanan')

@section('content')
<h2>Edit Pemesanan</h2>

<form action="{{ route('pemesanan.update', $pemesanan->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
        <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan"
               value="{{ $pemesanan->nama_pemesan }}" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email Pemesan</label>
        <input type="email" class="form-control" id="email" name="email"
               value="{{ $pemesanan->email }}" required>
    </div>

    <div class="mb-3">
        <label for="tanggal_pemesanan" class="form-label">Tanggal Pemesanan</label>
        <input type="date" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan"
               value="{{ $pemesanan->tanggal_pemesanan }}" required>
    </div>

    <div class="mb-3">
        <label for="jumlah_tiket" class="form-label">Jumlah Tiket</label>
        <input type="number" class="form-control" id="jumlah_tiket" name="jumlah_tiket"
               value="{{ $pemesanan->jumlah_tiket }}" required>
    </div>

    <div class="mb-3">
        <label for="film" class="form-label">Film</label>
        <select name="film_id" id="film" class="form-select" required>
            @foreach ($film as $f)
                <option value="{{ $f->id }}" {{ $pemesanan->film_id == $f->id ? 'selected' : '' }}>
                    {{ $f->judul_film }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="total_harga" class="form-label">Total Harga</label>
        <input type="number" class="form-control" id="total_harga" name="total_harga"
               value="{{ $pemesanan->total_harga }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('pemesanan.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
