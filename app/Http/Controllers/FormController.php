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
        'id' => 'required|numeric',
        'phonenumber' => 'string|max:20',
        'address' => 'required|string|max:255',
        'age' => 'required|integer',
        'religion' => 'required|string|max:255',
        'gender' => 'required|string|in:Male,Female',
        'job' => 'required|string|max:255',
        'marialstatus' => 'required|string|max:255',
        'citizenship' => 'required|string|max:255',
        'picture' => 'required|image|max:2048', // 2 MB in kilobytes
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    // Handle the form submission and save data (including the picture).
    // Make sure you are storing the data in an array and passing it to the view.
    $data = [
        'name' => $request->input('name'),
        'id' => $request->input('id'),
        'phonenumber' => $request->input('phonenumber'),
        'address' => $request->input('address'),
        'age' => $request->input('age'),
        'religion' => $request->input('religion'),
        'gender' => $request->input('gender'),
        'job' => $request->input('job'),
        'marialstatus' => $request->input('marialstatus'),
        'citizenship' => $request->input('citizenship'),

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
