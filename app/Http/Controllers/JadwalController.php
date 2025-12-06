<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Film;
use App\Models\Studio;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::with('film')->get();
        return view('jadwal.index', compact('jadwal'));
    }

    public function create()
    {
        $film = Film::all();
        $studio = Studio::all();

        return view('jadwal.form', compact('film', 'studio'));
    }

    public function store(Request $request)
    {
        Jadwal::create($request->all());
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Jadwal::findOrFail($id);
        $film = Film::all();
        return view('jadwal.form', compact('data','film'));
    }

    public function update(Request $request, $id)
    {
        $data = Jadwal::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diperbarui');
    }

    public function destroy($id)
    {
        Jadwal::destroy($id);
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus');
    }
}
