<?php

namespace App\Http\Controllers;

use App\Models\DetailTiket;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class DetailTiketController extends Controller
{
    public function index()
    {
        $detail = DetailTiket::with('pemesanan')->get();
        return view('detail.index', compact('detail'));
    }

    public function create()
    {
        $pemesanan = Pemesanan::all();
        return view('detail.form', compact('pemesanan'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_pemesanan' => 'required|exists:pemesanan,id_pemesanan',
            'kategori_tiket' => 'required|string|max:50',
            'harga' => 'required|numeric',
        ]);

        DetailTiket::create($validated);

        return redirect()->route('detail-tiket.index')->with('success','Detail tiket berhasil ditambahkan');
    }

    public function show($id)
    {
        $detail = DetailTiket::with('pemesanan')->findOrFail($id);
        return view('detail.show', compact('detail'));
    }

    public function edit($id)
    {
        $detail = DetailTiket::findOrFail($id);
        $pemesanan = Pemesanan::all();

        return view('detail.form', compact('detail','pemesanan'));
    }

    public function update(Request $request, $id)
    {
        $detail = DetailTiket::findOrFail($id);

        $validated = $request->validate([
            'id_pemesanan' => 'required|exists:pemesanan,id_pemesanan',
            'kategori_tiket' => 'required|string|max:50',
            'harga' => 'required|numeric',
        ]);

        $detail->update($validated);

        return redirect()->route('detail-tiket.index')->with('success','Detail tiket berhasil diperbarui');
    }

    public function destroy($id)
    {
        DetailTiket::destroy($id);
        return redirect()->route('detail-tiket.index')->with('success','Detail tiket berhasil dihapus');
    }
}
