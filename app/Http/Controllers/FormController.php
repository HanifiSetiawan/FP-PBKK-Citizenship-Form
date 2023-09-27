<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'address' => 'required|string|max:255',
        'score' => 'required|numeric|between:2.50,99.99',
        'picture' => 'required|image|max:2048', // 2 MB in kilobytes
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    // Handle the form submission and save data (including the picture).
    // Make sure you are storing the data in an array and passing it to the view.
    $data = [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'address' => $request->input('address'),
        'score' => $request->input('score'),
        'picture_path' => 'path_to_uploaded_picture.jpg', // Replace with the actual path
    ];

    // Check if the image file exists
    if (isset($data['picture_path']) && File::exists(public_path('storage/' . $data['picture_path']))) {
        return view('submitted', compact('data'));
    } else {
        // Handle the case where the image file doesn't exist
        // You can return an error message or redirect to an error page.
    }

    return view('submitted', compact('data'));
}

}


