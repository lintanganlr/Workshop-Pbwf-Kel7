<?php

namespace App\Http\Controllers;
use App\Models\Roles;
use App\Models\Artikel;
use App\Models\uploadart;
use Illuminate\Http\Request;


class UploadArtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikels = uploadart::all();
        return view('admin.article.index', compact('artikels'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         // Validasi input form disini sesuai dengan kebutuhan Anda
         $artikels = new uploadart();
         $artikels->id_roles = $request->input('id_roles');
         $artikels->tgl_artikel = $request->input('tgl_artikel');
         $artikels->judul_artikel = $request->input('judul_artikel');
         $artikels->deskripsi = $request->input('deskripsi');

         // Mengunggah gambar (foto pekerja)
         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $imageName = time() . '.' . $file->getClientOriginalExtension();
             $file->move(public_path('artikelimg'), $imageName); // Ganti direktori tujuan
             $artikels->image = $imageName;
         }

         $artikels->save();

         return redirect()->route('article.index')->with('success', 'Data artikel berhasil disimpan');
     }


    public function show(UploadArt $uploadArt)
    {
        //
    }

    public function showForm()
    {
        $roles = Roles::all();

        return view('admin.article.create', compact('roles'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $artikels = uploadart::find($id);
        return view('admin.article.edit', ['artikels' => $artikels]);
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, $id)
     {
         $artikels = uploadart::find($id);

         // Validasi input form disini sesuai dengan kebutuhan Anda

         $artikels->id_roles = $request->input('id_roles');
         $artikels->tgl_artikel = $request->input('tgl_artikel');
         $artikels->judul_artikel = $request->input('judul_artikel');
         $artikels->deskripsi = $request->input('deskripsi');

         // Mengunggah gambar (foto artikel) jika dipilih
         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $imageName = time() . '.' . $file->getClientOriginalExtension();
             $file->move(public_path('artikelimg'), $imageName);

             // Hapus foto lama jika ada
             if (!empty($artikels->image)) {
                 $fotoPath = public_path('artikelimg/' . $artikels->image);
                 if (file_exists($fotoPath)) {
                     unlink($fotoPath);
                 } else {
                     return redirect()->back()->with('error', 'File foto artikel tidak ditemukan');
                 }
             }

             $artikels->image = $imageName;
         }

         $artikels->save();

         return redirect()->route('article.index')->with('success', 'Data artikel berhasil diperbarui');
     }

    public function destroy($id)
    {
        $artikels = uploadart::find($id);
        $artikels->delete();

        return redirect()->back();
    }

    // tampil ke cust //
    public function tampilcust()
    {
        // Fetching articles using the Artikel model
        $artikels = Artikel::select('id', 'judul_artikel', 'image')->get();
        return view('artikel.index', compact('artikels'));
    }
    public function tampilan($id)
    {
        // return 12;
        // Fetching a single article using the ID
        $artikels = Artikel::findOrFail($id);
        return view('artikel.tampilan', compact('artikels'));
    }
//dd($request->all());

}
