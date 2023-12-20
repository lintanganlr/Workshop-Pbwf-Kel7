<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TenagaMedis;
use App\Models\artikel;
use App\Models\Service;
use App\Models\Roles;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index()
     {
         $artikels = artikel::all(); // Mengambil semua data artikel dari model Artikel

         return view('home', compact('artikels')); // Mengirimkan data artikel ke view 'home'
     }

    }

        // $serviceController = new Service();
        // $services = $serviceController->index()->getData()['services'];

        // return view('home', compact('services')); // Pass $services variable to the view
