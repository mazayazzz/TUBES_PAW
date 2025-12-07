<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('pelanggan.index', compact('pelanggan'));
    }

    public function create()
    {
        return view('pelanggan.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'nomor_telepon' => 'required',

        ]);

        Pelanggan::create($request->all());
        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil ditambah');
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.form', compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($request->all());
        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil diupdate');
    }

        public function show($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.show', compact('pelanggan'));
    }

    public function destroy($id)
    {
        Pelanggan::destroy($id);
        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil dihapus');
    }
}
