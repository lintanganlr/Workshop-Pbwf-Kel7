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
        $tenagaMedis = TenagaMedis::all();
        return view('admin.tenagamedis.index', compact('tenagaMedis'));
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



    public function show(TenagaMedis $TenagaMedis)
    {
        //
    }

    public function showForm()
    {
        $roles = Roles::all();

        return view('admin.tenagamedis.create', compact('roles'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tenagamedis = TenagaMedis::find($id);
        return view('admin.tenagamedis.edit', ['tenagamedis' => $tenagamedis]);
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, $id)
     {
         $tenagamedis = TenagaMedis::find($id);

         // Validasi input form disini sesuai dengan kebutuhan Anda

         $tenagamedis->id_roles = $request->input('id_roles');
         $tenagamedis->nama_medis = $request->input('nama_medis');
         $tenagamedis->spesialisasi_medis = $request->input('spesialisasi_medis');

         // Mengunggah gambar (foto medis) jika dipilih
         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $imageName = time() . '.' . $file->getClientOriginalExtension();
             $file->move(public_path('medisimg'), $imageName);

             // Hapus foto lama jika ada
             if (!empty($tenagamedis->image)) {
                 $fotoPath = public_path('medisimg/' . $tenagamedis->image);
                 if (file_exists($fotoPath)) {
                     unlink($fotoPath);
                 } else {
                     return redirect()->back()->with('error', 'File foto medis tidak ditemukan');
                 }
             }

             $tenagamedis->image = $imageName;
         }

         $tenagamedis->save();

         return redirect()->route('tenagamedis.index')->with('success', 'Data medis berhasil diperbarui');
     }

    public function destroy($id)
    {
        $tenagamedis = TenagaMedis::find($id);
        $tenagamedis->delete();

        return redirect()->back();
    }
    public function tampilan(){
        return view('doctor', compact('tenagaMedis'));
    }
    


    
}
