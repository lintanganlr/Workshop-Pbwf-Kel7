<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    /**
     * Menampilkan daftar artikel.
     */
    public function index()
    {
        $artikels = Artikel::all(); // Mengambil semua artikel dari database
        return view('artikel.index', ['artikels' => $artikels]);
    }

    /**
     * Menampilkan halaman baca artikel.
     */
    public function baca($id)
    {
        $artikel = Artikel::find($id); // Mengambil artikel berdasarkan ID
        return view('artikel.tampilan', ['artikels' => $artikels]);
    }

    /**
     * Menampilkan form untuk membuat artikel baru.
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Menyimpan artikel baru ke dalam database.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'tgl_artikel' => 'required',
            'judul_artikel' => 'required',
            'deskripsi' => 'required',
        ]);

        // Simpan artikel ke dalam database
        Artikel::create($request->all());

        return redirect()->route('artikel.index')
            ->with('success', 'Artikel berhasil ditambahkan.');
    }

    /**
     * Menampilkan artikel berdasarkan ID.
     */
    public function show($id)
    {
        $artikel = Artikel::find($id);
        return view('artikel.show', ['artikels' => $artikels]);
    }

    /**
     * Menampilkan form untuk mengedit artikel.
     */
    public function edit($id)
    {
        $artikel = Artikel::find($id);
        return view('artikel.edit', ['artikels' => $artikels]);
    }

    /**
     * Menyimpan perubahan artikel ke dalam database.
     */
    public function update(Request $request, $id)
    {
        // Validasi input dari form
        $request->validate([
            'tgl_artikel' => 'required',
            'judul_artikel' => 'required',
            'deskripsi' => 'required',
        ]);

        $artikel = Artikel::find($id);
        $artikel->update($request->all());

        return redirect()->route('artikel.index')
            ->with('success', 'Artikel berhasil diperbarui.');
    }

    /**
     * Menghapus artikel dari database.
     */
    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        $artikel->delete();

        return redirect()->route('artikel.index')
            ->with('success', 'Artikel berhasil dihapus.');
    }
}
