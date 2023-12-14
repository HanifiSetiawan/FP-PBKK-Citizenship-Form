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
    
    public function edit($id)
    {
        $citizenship = Citizenship::findOrFail($id);
        return view('edit', ['citizenship' => $citizenship]);
    }

    public function update(Request $request, $id)
    {
        // Validation and update logic here
        $citizenship = Citizenship::findOrFail($id);
        $citizenship->update($request->all());
        return redirect()->route('Data')->with('success', 'Data updated successfully!');
    }

    public function destroy($id)
    {
        $citizenship = Citizenship::findOrFail($id);
        $citizenship->delete();
        return redirect()->route('Data')->with('success', 'Data deleted successfully!');
    }
}

