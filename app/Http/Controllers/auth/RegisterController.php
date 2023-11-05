<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('regis.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required|min:6',
            'notelp' => 'required',
            'email' => 'required|email|unique:users',
            'alamat' => 'required'
        ]);

        $data = [
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
            'notelp' => $request->input('notelp'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat')
        ];

        User::create($data);

        if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])) {
            return redirect('/home2');
        } else {
            return redirect('/')->withErrors('Username dan Password yang dimasukkan tidak sesuai');
        }
    }
}
