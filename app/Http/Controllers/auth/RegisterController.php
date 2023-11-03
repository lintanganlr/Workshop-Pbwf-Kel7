<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class RegisterController extends Controller
{
    function register()
    {
        // untuk mendaftarkan 
        return view('regis.index');
    }

    function create(Request $request)
    {
        // untuk memasukkan data ke dalam database
        Session::flash('name',$request->name);
        Session::flash('username',$request->username);
        Session::flash('notelp',$request->no_telp);
        Session::flash('email',$request->email);
        Session::flash('alamat',$request->alamat);

        $request->validate(
            [
                'name'=>'required',
                'username'=>'required',
                'password'=>'required|min:6',
                'notelp'=>'required',
                'email'=>'required|email|unique:users',
                'alamat'=>'required'

            ],[
                'name.required'=>'Nama wajib diisi',
                'username.required'=>'Username wajib diisi',
                'password.required'=>'Password wajib diisi',
                'password.min'=> 'Minimum password 6 karakter',
                'notelp.required'=>'No Telepom wajib diisi',
                'email.required'=>'Email wajib diisi',
                'email.email'=> 'Silahkan masukkan email yang valid',
                'email.unique'=>'Email telah terdaftar',
                'alamat.required'=>'Alamat wajib diisi'
            ]
        );

        $data = [
            'name'=> $request->name,
            'username'=> $request->username,
            'password'=> Hash::make($request->password),
            'notelp'=> $request->notelp,
            'email'=> $request->email,
            'alamat'=> $request->alamat
        ];
        
        User::create($data);

        $inforegis = [
            'name'=> $request->name,
            'username'=> $request->username,
            'password'=> $request->password,
            'notelp'=> $request->notelp,
            'email'=> $request->email,
            'alamat'=> $request->alamat
        ];
        
        if(Auth::attempt($inforegis)){
            //kalau sukses
            return redirect('/home2');
        }else {
            // kalau gagal
            return redirect('/')->withErrors('Username dan Password yang dimasukkan tidak sesuai');
        }
    }
}
