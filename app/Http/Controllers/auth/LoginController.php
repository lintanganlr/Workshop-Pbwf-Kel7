<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // use AuthenticatesUsers;

    // protected $redirectTo = '/home';

    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.index');
    }

    function login (Request $request)
    {
        Session::flash('username',$request->username);
        $request->validate(
            [
                'username'=>'required',
                'password'=>'required',
            ],
            [
                'username.required'=>'Username wajib diisi',
                'password.required'=>'Password wajib diisi',
            ]
        );

        $infologin = [
            'username'=> $request->username,
            'password'=> $request->password
        ];

        if(Auth::attempt($infologin)){
            //kalau sukses
            return redirect('/home2');
        }else {
            // kalau gagal
            return redirect('/')->withErrors('Username dan Password yang dimasukkan tidak sesuai');
        }
    }
    
    // public function password()
    // {
    //     return view('login.forgot-password');
    // }

    function logout (){
        Auth::logout();
        return redirect('/');
    }
}


