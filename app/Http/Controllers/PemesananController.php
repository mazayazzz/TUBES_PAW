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
        $pemesanan = Pemesanan::with(['pelanggan','jadwal','studio'])->get();
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
        $data = Pemesanan::findOrFail($id);
        $pelanggan = Pelanggan::all();
        $jadwal = Jadwal::all();
        $studio = Studio::all();

        return view('pemesanan.form', compact('data','pelanggan','jadwal','studio'));
    }

    public function update(Request $request, $id)
    {
        $data = Pemesanan::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('pemesanan.index')->with('success','Pemesanan berhasil diperbarui');
    }

    public function destroy($id)
    {
        Pemesanan::destroy($id);
        return redirect()->route('pemesanan.index')->with('success','Pemesanan berhasil dihapus');
    }
}
