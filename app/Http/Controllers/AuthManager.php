<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function halamanlogin(){
        if(Auth::check()){

        }
        return view('auth.login');
    }

    function halamanregister(){
        if(Auth::check()){
            return redirect(route('home'));
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
            $user = Auth::user();

            // Mengecek jika alamat email mengandung '@admin.com'
            if (strpos($user->email, '@admin.com') !== false) {
                return redirect()->route('admin.dashboard')->with("success", "Logged in as admin!");
            } else {
                return redirect()->route('home')->with("success", "Logged in as user!");
            }
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
            return redirect(route('/register'))->with("error", "Registration Failed, try again!");
        }
        return redirect(route('login'))->with( "success", "Registration Success!");

    }

    function logout(){
        Session::flush();
        Auth::logout();

        return redirect('/');

    }



}
