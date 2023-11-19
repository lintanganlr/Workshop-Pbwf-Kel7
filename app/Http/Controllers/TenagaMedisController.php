<?php

namespace App\Http\Controllers;
use App\Models\Roles;
use App\Models\TenagaMedis;
use Illuminate\Http\Request;


class TenagaMedisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenagamedis = TenagaMedis::all();
        // $roles = Roles::all();
        return view('admin.tenagamedis.index', compact('tenagamedis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tenagamedis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input form disini sesuai dengan kebutuhan Anda
        $tenagamedis = new TenagaMedis();
        $tenagamedis->id_roles = $request->input('id_roles');
        $tenagamedis->nama_medis = $request->input('nama_medis');
        $tenagamedis->spesialisasi_medis = $request->input('spesialisasi_medis');

        // Mengunggah gambar (foto pekerja)
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('medisimg'), $imageName); // Ganti direktori tujuan
            $tenagamedis->image = $imageName;
        }

        $tenagamedis->save();

        return redirect()->route('tenagamedis.index')->with('success', 'Data medis berhasil disimpan');
    }


    /**
     * Display the specified resource.
     */
    public function show(TenagaMedis $tenagaMedis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TenagaMedis $tenagaMedis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TenagaMedis $tenagaMedis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TenagaMedis $tenagaMedis)
    {
        //
    }
}
