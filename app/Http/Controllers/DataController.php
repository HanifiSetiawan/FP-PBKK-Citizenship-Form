<?php

namespace App\Http\Controllers;
use App\Models\citizenship;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(){
        /*$citizenships = citizenship::take(5)->get(); 
        return view('yes', ['citizenships' => $citizenships]);*/
        $citizenships = citizenship::orderBy('created_at', 'desc')->take(6)->get();
        return view('yes', ['citizenships' => $citizenships]);
    }
}
