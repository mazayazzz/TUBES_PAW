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
        $validated = $request->validate([
            'id_pemesanan' => 'required|exists:pemesanan,id',
            'total_harga' => 'required|numeric',
            'metode_pembayaran' => 'required|string|max:255',
            'tanggal_pembayaran' => 'required|date',
        ]);

        Pembayaran::create($validated);

        return redirect()->route('pembayaran.index')->with('success','Pembayaran berhasil ditambahkan');
    }
    public function edit($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pemesanan = Pemesanan::all();

        return view('pembayaran.form', compact('pembayaran','pemesanan'));
    }

    public function update(Request $request, $id)
    {
        $pembayaran = Pembayaran::findOrFail($id);

        $validated = $request->validate([
            'id_pemesanan' => 'required|exists:pemesanan,id',
            'total_harga' => 'required|numeric',
            'metode_pembayaran' => 'required|string|max:255',
            'tanggal_pembayaran' => 'required|date',
        ]);

        $pembayaran->update($validated);

        return redirect()->route('pembayaran.index')->with('success','Pembayaran berhasil diperbarui');
    }

        public function show($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);

        return view('pembayaran.show', compact('pembayaran'));
    }

    public function destroy($id)
    {
        Pembayaran::destroy($id);
        return redirect()->route('pembayaran.index')->with('success','Pembayaran berhasil dihapus');
    }
}
