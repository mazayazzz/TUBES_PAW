<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::with('pemesanan')->get();
        return view('pembayaran.index', compact('pembayaran'));
    }

    public function create()
    {
        $pemesanan = Pemesanan::all();
        return view('pembayaran.form', compact('pemesanan'));
    }

    public function store(Request $request)
    {
        Pembayaran::create($request->all());
        return redirect()->route('pembayaran.index')->with('success','Pembayaran berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Pembayaran::findOrFail($id);
        $pemesanan = Pemesanan::all();

        return view('pembayaran.form', compact('data','pemesanan'));
    }

    public function update(Request $request, $id)
    {
        $data = Pembayaran::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('pembayaran.index')->with('success','Pembayaran berhasil diperbarui');
    }

    public function destroy($id)
    {
        Pembayaran::destroy($id);
        return redirect()->route('pembayaran.index')->with('success','Pembayaran berhasil dihapus');
    }
}
