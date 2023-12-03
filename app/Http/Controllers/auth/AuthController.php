<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function halamanlogin(){
        if(Auth::check()){

        }
        return view('auth.login');
    }

    function halamanregister(){
        if(Auth::check()){
            return redirect(route('/home2'));
        }
        return view('auth.register');
    }

    //retrieve data from form
    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $minta = $request->only('email', 'password');
        if(Auth::attempt($minta)){
            return redirect()->intended(route('home2'))->with("success", "Access Granted!");
        }
        return redirect(route('login'))->with("error", "Login Invalid!");
    }

    function registerPost(Request $request){
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required|min:8',
            'notelp' => 'required',
            'email' => 'required|email|unique:users',
            'alamat' => 'required',
        ]);

        $user = User::create([

            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'notelp' => $request->notelp,
            'email' => $request->email,
            'alamat' => $request->alamat,

        ]);
        if(!$user){
            return redirect(route('auth.register'))->with("error", "Registration Failed, try again!");
        }
        return redirect(route('auth.login'))->with( "success", "Registration Success!");

    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('auth.login'));

    }



}

