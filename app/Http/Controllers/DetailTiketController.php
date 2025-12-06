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
        DetailTiket::create($request->all());
        return redirect()->route('detail.index')->with('success','Detail tiket berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = DetailTiket::findOrFail($id);
        $pemesanan = Pemesanan::all();

        return view('detail.form', compact('data','pemesanan'));
    }

    public function update(Request $request, $id)
    {
        $data = DetailTiket::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('detail.index')->with('success','Detail tiket berhasil diperbarui');
    }

    public function destroy($id)
    {
        DetailTiket::destroy($id);
        return redirect()->route('detail.index')->with('success','Detail tiket berhasil dihapus');
    }
}
