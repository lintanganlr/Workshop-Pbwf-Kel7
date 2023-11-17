<?php

namespace App\Http\Controllers;
use App\Models\Roles;
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
        // $roles = Roles::all();
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

    /**
     * Display the specified resource.
     */
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


    // public function update(Request $request, $id)
    // {
    //     $this->validate($request, [
    //         'id_role'       => 'required',
    //         'tgl_artikel'   => 'required',
    //         'judul_artikel' => 'required',
    //         'image'         => 'image|mimes:jpeg,png,jpg,gif|max:2048|nullable',
    //         'deskripsi'     => 'required',
    //     ]);
    //    $artikels = uploadart::find($id);
    //    $artikels->id_roles           =  $request->id_role;
    //    $artikels->tgl_artikel       =   $request->tgl_artikel;
    //    $artikels->judul_artikel     =   $request->judul_artikel;
    //    $artikels->image             =   $request->image;
    //    $artikels->deskripsi         =   $request->deskripsi;

    //    $artikels->save();

    // $artikels = uploadart::find($id);
    // $artikels->update($request->all());

    //    return redirect('/article');

    // }

        // Mengunggah gambar (foto artikels)
    //     if ($request->hasFile('/artikelimg')) {
    //         $file = $request->file('/artikelimg');
    //         $artikelimgName = time() . '.' . $file->getClientOriginalExtension();
    //         $file->move(public_path('/artikelimg'), $artikelimgName);
    //         // Hapus foto lama jika ada
    //         if (!empty($pekerja->artikelimg)) {
    //             $fotoPath = public_path('artikelimg/' . $pekerja->artikelimg);
    //            s if (file_exists($fotoPath)) {
    //                 unlink($fotoPath);
    //             } else {
    //                 // Tampilkan pesan bahwa file tidak ditemukan
    //                 return redirect()->back()->with('error', 'File foto pekerja tidak ditemukan');
    //             }
    //         }
    //         $pekerja->artikelimg = $artikelimgName;

    //     }

    //     return redirect()->route('article.index')->with('success', 'Data pekerja berhasil diperbarui');
    // }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $artikels = uploadart::find($id);
        $artikels->delete();

        return redirect()->back();
    }
}
