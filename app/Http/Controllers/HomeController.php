<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Example;

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
        $Examples = Example::take(5)->get(); 
        return view('home', ['examples' => $Examples]);
        //return view('home');
    }
}
