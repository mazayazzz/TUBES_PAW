<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $film = Film::all();
        return view('film.index', compact('film'));
    }

    public function create()
    {
        return view('film.form');
    }

    public function store(Request $request)
    {
        Film::create($request->all());
        return redirect()->route('film.index')->with('success', 'Film berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Film::findOrFail($id);
        return view('film.form', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Film::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('film.index')->with('success', 'Film berhasil diperbarui');
    }

    public function show($id)
{
    // Ambil data film berdasarkan id
    $film = Film::findOrFail($id);

    // Tampilkan view detail film
    return view('film.show', compact('film'));
}

    public function destroy($id)
    {
        Film::destroy($id);
        return redirect()->route('film.index')->with('success', 'Film berhasil dihapus');
    }
}
