<?php

namespace App\Http\Controllers;

use App\Models\Citizenship;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');

        $citizenships = Citizenship::when($query, function ($q) use ($query) {
            $q->where('name', 'like', "%{$query}%");
        })
        ->orderBy('created_at', 'desc')
        ->take(6)
        ->get();

        return view('yes', ['citizenships' => $citizenships, 'search' => $query]);
    }

    public function showAll(Request $request)
    {
        $query = $request->input('search');

        $citizenships = Citizenship::when($query, function ($q) use ($query) {
            $q->where('name', 'like', "%{$query}%");
        })
        ->orderBy('created_at', 'desc')
        ->get();

        return view('yes', ['citizenships' => $citizenships, 'search' => $query]);
    }
}

