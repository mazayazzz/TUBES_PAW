@extends('layout')

@section('title', 'Register')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 shadow rounded">
    <h1 class="text-2xl font-bold mb-4 text-center">Register</h1>

    <form action="{{ route('register') }}" method="POST" class="space-y-4">
        @csrf

        {{-- Nama --}}
        <div>
            <label for="name" class="block font-medium mb-1">Nama</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                class="border rounded px-3 py-2 w-full"
                value="{{ old('name') }}" 
                required
            >
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        {{-- Email --}}
        <div>
            <label for="email" class="block font-medium mb-1">Email</label>
            <input 
                type="email" 
                name="email" 
                id="email" 
                class="border rounded px-3 py-2 w-full"
                value="{{ old('email') }}" 
                required
            >
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        {{-- Password --}}
        <div>
            <label for="password" class="block font-medium mb-1">Password</label>
            <input 
                type="password" 
                name="password" 
                id="password" 
                class="border rounded px-3 py-2 w-full"
                required
            >
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        {{-- Konfirmasi Password --}}
        <div>
            <label for="password_confirmation" class="block font-medium mb-1">Konfirmasi Password</label>
            <input 
                type="password" 
                name="password_confirmation" 
                id="password_confirmation" 
                class="border rounded px-3 py-2 w-full"
                required
            >
        </div>

        {{-- Tombol Daftar --}}
        <button 
            type="submit" 
            class="w-full px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
        >
            Daftar
        </button>

        {{-- Link ke login --}}
        <p class="text-center text-sm text-gray-700 mt-3">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="text-blue-600 font-medium hover:underline">
                Login
            </a>
        </p>
    </form>
</div>
@endsection
