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
        // Ambil semua film dan studio untuk dropdown
        $film = Film::all();

        // $jadwal null menandakan form untuk tambah
        $jadwal = null;

        return view('jadwal.form', compact('jadwal', 'film'));
    }

    public function store(Request $request)
    {
        // Validasi jika perlu
        $request->validate([
            'film_id' => 'required|exists:film,id_film',
            'tanggal' => 'required|date',
            'jam' => 'required'
        ]);

        Jadwal::create($request->all());

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan');
    }

    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $film = Film::all();

        return view('jadwal.form', compact('jadwal','film'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_film' => 'required|exists:film,id_film',
            'waktu_pemutaran' => 'required|date',
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update($request->only('id_film', 'waktu_pemutaran'));

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diupdate');
    }

    public function show($id)
    {
        $jadwal = Jadwal::with('film')->findOrFail($id);
        return view('jadwal.show', compact('jadwal'));
    }

    public function destroy($id)
    {
        Jadwal::destroy($id);
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus');
    }
}
