<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.register'); // Mengasumsikan 'auth.login' adalah tampilan login Anda
    }

    protected function validator(array $data)
{
    return Validator::make($data, [
        'name' => ['required', 'string', 'max:255'],
        'username' => ['required', 'string', 'max:255', 'unique:users'], // Menambahkan aturan validasi untuk username
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'notelp' => ['required', 'string', 'max:15'],
        'alamat' => ['required', 'string', 'max:250'],
    ]);
}


    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        return $this->create($request->all());
        return redirect('/home');
    }

    protected function create(array $data)
    {
    $user = User::create([
        'name' => $data['name'],
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'notelp' => $data['notelp'],
        'alamat' => $data['alamat'],
    ]);

    // Arahkan pengguna ke halaman 'home'
    return redirect('/home')->with('success', 'Registration successful!'); // Anda juga dapat menambahkan pesan sukses jika diperlukan
    }

}
