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
            'alamat' => 'required'
        ]);

        Pelanggan::create($request->all());
        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil ditambah');
    }

    public function edit($id)
    {
        $data = Pelanggan::findOrFail($id);
        return view('pelanggan.form', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Pelanggan::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil diupdate');
    }

    public function destroy($id)
    {
        Pelanggan::destroy($id);
        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil dihapus');
    }
}
