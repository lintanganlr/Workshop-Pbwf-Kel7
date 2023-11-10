<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploadArticleController extends Controller
{
    public function index()
    {
        $artikels = DB::table('artikels as a')
            ->select('a.id_artikel', 'a.tgl_artikel', 'a.judul_artikel', 'a.deskripsi', 'a.status')
            ->join('users as u', 'a.id_user', '=', 'u.id_user')
            ->where('a.status', 1)
            ->get();

        return view('admin.article.index', ['artikels' => $artikels]);
    }


    // public function trash(){

    //     $query = 'SELECT a.id_artikel, a.id_artikel, a.tgl_artikel, a.judul_artikel, a.deskripsi, a.status
    //               FROM artikels a
    //               JOIN users u ON a.id_user = u.id_user
    //               WHERE a.status = ?';
    //     $kondisi = [0];
    //     $artikel = DB::select($query,$kondisi);
    //     return view('admin.article.trash',['artikels'=>$artikels]);

    // }

public function create()
{
    $artikels = DB::table('artikels')
        ->select('*')
        ->where('status', 1)
        ->get();

    return view('admin.article.create', ['artikels' => $artikels]);
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'tgl_artikel' => 'required',
        'judul_artikel' => 'required',
        'deskripsi' => 'required',
        'id_user' => 'required',
    ], [
        'tgl_artikel.required' => 'tgl_artikel Wajib Diisi',
        'judul_artikel.required' => 'Judul Wajib Diisi',
        'deskripsi.required' => 'Deskripsi Wajib Diisi',
        'id_user.required' => 'User Wajib Dipilih',
    ]);

    $data = [
        'id_user' => $validatedData['id_user'],
        'tgl_artikel' => $validatedData['tgl_artikel'],
        'judul_artikel' => $validatedData['judul_artikel'],
        'deskripsi' => $validatedData['deskripsi'],
    ];

    $result = DB::table('artikels')->insert($data);

    if ($result) {
        return redirect()->route('artikel.index')->with('success', 'Berhasil !');
    }
}


    // public function edit($id){

    //     $query = 'SELECT * FROM artikels WHERE id_artikel = ? ';
    //     $kondisi = [$id];
    //     $artikel = DB::select($query,$kondisi);

    //     $query = 'SELECT * FROM users  WHERE status = ?';
    //     $kondisi = [1];
    //     $users = DB::select($query,$kondisi);

    //     return view('admin.article.update',['artikels'=>$artikels,'users'=>$users]);
    // }

    // public function update(Request $request, $id){
    //     $validatedData = $request->validate([
    //         'id_user'=>'required',
    //         'tgl_artikel'=>'required',
    //         'judul_artikel' => 'required',
    //         'deskripsi'=>'required',
    //     ],
    // [
    //     'id_user.required'=>'User Wajib Dipilih',
    //     'tgl_artikel.required'=>'tgl_artikel Wajib Diisi',
    //     'judul_artikel.required'=>'judul_artikel Wajib Diisi',
    //     'deskripsi.required'=>'Deskripsi Wajib Diisi',
    // ]);

    //     $data = [
    //         'id_user'=>$validatedData['id_user'],
    //         'tgl_artikel' => $validatedData['tgl_artikel'],
    //         'judul_artikel' => $validatedData['judul_artikel'],
    //         'deskripsi'=>$validatedData['deskripsi'],
    //     ];

    //     //QUERY BUILDER
    //     // $artikel = DB::table('artikel')->where('id_artikel',$id);
    //     // $valid = $artikel->update($data);

    //     //QUERY SQL NATIVE
    //     $query = 'UPDATE artikels SET id_user = ? , tgl_artikel= ?, judul_artikel = ?, deskripsi = ? WHERE id_artikel = ?';
    //     $values = [$data['id_user'],$data['tgl_artikel'],$data['judul_artikel'],$data['deskripsi'],$id];
    //     $sql = DB::update($query,$values);
    //     if($sql){
    //         return redirect()->route('artikel.index')->with('success','Berhasil!');
    //     }
    // }

    // public function destroy($id){
    //     //QUERY BUILDER
    //     // DB::table('artikel')->where('id_artikel',$id)->update(['status'=>0]);

    //     //Query Native sql
    //     $query = 'UPDATE artikels SET status = ? WHERE id_artikel =?';
    //     $values = [0,$id];
    //     $sql = DB::update($query,$values);

    //     if($sql){
    //     return redirect()->route('artikel.index')->with('success','Berhasil Terhapus !');
    //     }
    // }

    // public function restore($id){
    //     //QUERY BUILDER
    //     // DB::table('artikel')->where('id_artikel',$id)->update(['status'=>1]);

    //     //QUERY SQL NATIVE
    //     $query = 'UPDATE artikels SET status = ? WHERE id_artikel =?';
    //     $values = [1,$id];
    //     $sql = DB::update($query,$values);

    //     if($sql){
    //     return redirect()->route('artikel.trash')->with('success','Berhasil di Restore !');
    //     }
    // }

    // public function restoreall(){
    //     //QUERY BUILDER
    //     // DB::table('artikel')->where('status',0)->update(['status'=> 1]);

    //     //QUERY SQL NATIVE
    //     $query = 'UPDATE artikels SET status = ? WHERE status = ?';
    //     $values =[1,0];
    //     $sql = DB::update($query,$values);
    //     if($sql){
    //         return redirect()->route('admin.trash')->with('success','Semua Data Berhasil Di Restore !');
    //     }
    // }
}
