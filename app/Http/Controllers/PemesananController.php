<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Pelanggan;
use App\Models\Studio;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::with(['pelanggan', 'jadwal.film', 'jadwal.studio'])->get();
        return view('pemesanan.index', compact('pemesanan'));
    }

    public function create()
    {
        $pelanggan = Pelanggan::all();
        $jadwal = Jadwal::all();
        $studio = Studio::all();

        return view('pemesanan.form', compact('pelanggan','jadwal','studio'));
    }

    public function store(Request $request)
    {
        Pemesanan::create($request->all());
        return redirect()->route('pemesanan.index')->with('success','Pemesanan berhasil dibuat');
    }

    public function edit($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $pelanggan = Pelanggan::all();
        $jadwal = Jadwal::all();
        $studio = Studio::all();

        return view('pemesanan.form', compact('pemesanan','pelanggan','jadwal','studio'));
    }

    public function update(Request $request, $id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->update($request->all());
        return redirect()->route('pemesanan.index')->with('success','Pemesanan berhasil diperbarui');
    }

        public function show($id)
    {
        $pemesanan = Pemesanan::with(['pelanggan', 'jadwal', 'jadwal.film', 'jadwal.studio'])->findOrFail($id);
        return view('pemesanan.show', compact('pemesanan'));
    }

    public function destroy($id)
    {
        Pemesanan::destroy($id);
        return redirect()->route('pemesanan.index')->with('success','Pemesanan berhasil dihapus');
    }
}
