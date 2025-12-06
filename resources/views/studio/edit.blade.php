@extends('layout')
@section('content')
<h1 class="text-xl font-bold mb-4">Edit Studio</h1>
<form action="{{ route('studio.update',$studio->id_studio) }}" method="POST">@csrf @method('PUT')
<label>Nama Studio</label><input type="text" name="nama_studio" value="{{ $studio->nama_studio }}" class="border w-full mb-2"/>
<label>Kapasitas</label><input type="number" name="kapasitas" value="{{ $studio->kapasitas }}" class="border w-full mb-2"/>
<button class="btn btn-primary">Update</button>
</form>
@endsection