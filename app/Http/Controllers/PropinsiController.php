<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propinsi;

class PropinsiController extends Controller
{
    /**
     * Menampilkan semua data propinsi.
     */
    public function index()
    {
        $propinsi = Propinsi::orderBy('id', 'DESC')->paginate(5);
        return view('propinsi.index', compact('propinsi'));
    }

    /**
     * Menampilkan form tambah data propinsi.
     */
    public function create()
    {
        return view('propinsi.create');
    }

    /**
     * Menyimpan data propinsi baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_propinsi' => 'required|string|max:255',
        ]);

        Propinsi::create([
            'nama_propinsi' => $request->nama_propinsi,
        ]);

        return redirect()->route('propinsi.index')
                         ->with('message', 'Propinsi berhasil ditambahkan!');
    }

    /**
     * Menampilkan form edit.
     */
    public function edit($id)
    {
        $propinsi = Propinsi::findOrFail($id);
        return view('propinsi.edit', compact('propinsi'));
    }

    /**
     * Menyimpan hasil edit.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_propinsi' => 'required|string|max:255',
        ]);

        $propinsi = Propinsi::findOrFail($id);
        $propinsi->update([
            'nama_propinsi' => $request->nama_propinsi,
        ]);

        return redirect()->route('propinsi.index')
                         ->with('message', 'Data Propinsi berhasil diperbarui!');
    }

    /**
     * Menghapus data.
     */
    public function destroy($id)
    {
        $propinsi = Propinsi::findOrFail($id);
        $propinsi->delete();

        return redirect()->route('propinsi.index')
                         ->with('message', 'Data Propinsi berhasil dihapus!');
    }
}
