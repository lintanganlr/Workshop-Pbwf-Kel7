<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;


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
        $serviceController = new ServiceController();
        $services = $serviceController->index()->getData()['services'];

        return view('home', compact('services')); // Pass $services variable to the view
    }


}
