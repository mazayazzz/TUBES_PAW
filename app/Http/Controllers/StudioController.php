<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    public function index()
    {
        $studio = Studio::all();
        return view('studio.index', compact('studio'));
    }

    public function create()
    {
        return view('studio.form');
    }

    public function store(Request $request)
    {
        Studio::create($request->all());
        return redirect()->route('studio.index')->with('success', 'Studio berhasil ditambahkan');
    }

    public function edit($id)
    {
        $studio = Studio::findOrFail($id);
        return view('studio.form', compact('studio'));
    }

    public function update(Request $request, $id)
    {
        $data = Studio::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('studio.index')->with('success', 'Studio berhasil diperbarui');
    }

    public function destroy($id)
    {
        Studio::destroy($id);
        return redirect()->route('studio.index')->with('success', 'Studio berhasil dihapus');
    }
}
