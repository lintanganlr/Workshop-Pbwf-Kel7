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
        // Fetching articles using the Artikel model
        $artikels = Artikel::select('id', 'judul_artikel', 'image')->get();
        return view('artikel.index', compact('artikels'));
    }

    public function tampilan($judul_artikel)
    {
        // Fetching a single article using the Artikel model
        $artikel = Artikel::where('judul_artikel', $judul_artikel)->first();
        return view('artikel.tampilan', compact('artikels'));
    }
}
