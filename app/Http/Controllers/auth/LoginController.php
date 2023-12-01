<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // New method: index
    public function index()
    {
        // return view('auth.login'); // Assuming 'auth.login' is your login view
    BERHASIL;
    }

    // Fix the logout function
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function login(Request $request)
    {
        // dd($request->all());
    $credentials = $request->only('username', 'password');
        // dd($credentials);

    if (Auth::attempt($credentials)) {
        // Authentication passed
        return redirect()->intended('/');
    }

    // Log failed login attempts
    \Log::info('Login attempt failed for: ' . $request->email);

    // Authentication failed
    return back()->withErrors(['email' => 'These credentials do not match our records.']);
    }
}


