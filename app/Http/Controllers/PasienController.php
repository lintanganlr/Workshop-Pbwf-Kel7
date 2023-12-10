<?php

namespace App\Http\Controllers;
use App\Models\Pasien;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(){
        return view('profile.index');
    }
    public function create(){
        return view('profile.create');
    }
    public function simpan(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pasien' => 'required',
            'no_telp_pasien' => 'required',
            'email_pasien' => 'required|email',
            'alamat_pasien' => 'required',
            'jk_pasien' => 'required',
        ]);

        Pasien::create([
            'nama_pasien' => $validatedData['nama_pasien'],
            'no_telp_pasien' => $validatedData['no_telp_pasien'],
            'email_pasien' => $validatedData['email_pasien'],
            'alamat_pasien' => $validatedData['alamat_pasien'],
            'jk_pasien' => $validatedData['jk_pasien'],
        ]);
        $data_pasien = session('data_pasien', []); // Mengambil data_pasien dari session atau array kosong jika belum ada

        $data_pasien[] = [
            'nama_pasien' => $validatedData['nama_pasien'],
            'no_telp_pasien' => $validatedData['no_telp_pasien'],
            'email_pasien' => $validatedData['email_pasien'],
            'alamat_pasien' => $validatedData['alamat_pasien'],
            'jk_pasien' => $validatedData['jk_pasien'],
        ];

        session()->put('data_pasien', $data_pasien); // Menyimpan data_pasien ke dalam session

        // Menyimpan nama pasien ke dalam session
        session()->put('nama_pasien', $validatedData['nama_pasien']);
        session()->put('no_telp_pasien', $validatedData['no_telp_pasien']);
        session()->put('email_pasien', $validatedData['email_pasien']);
        session()->put('alamat_pasien', $validatedData['alamat_pasien']);
        session()->put('jk_pasien', $validatedData['jk_pasien']);


        return redirect()->route('index')->with('success', 'Data pasien berhasil disimpan');
    }
    public function pilihan()
    {
        // Lakukan operasi yang diperlukan sebelum menampilkan view pasien.blade.php
        // Contoh:
        $data_pasien = []; // Ganti ini dengan data pasien yang akan Anda gunakan di view

        return view('pasien', compact('data_pasien')); // Menampilkan view pasien.blade.php dengan mengirimkan data_pasien
    }
}
