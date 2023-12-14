<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\citizenship;

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
        'nik' => 'required|numeric',
        'phonenumber' => 'string|max:20',
        'address' => 'required|string|max:255',
        'age' => 'required|integer',
        'religion' => 'required|string|in:Islam,Christian,Protestan,Hindi,Budha,Other',
        'gender' => 'required|string|in:Male,Female',
        'job' => 'required|string|max:255',
        'marialstatus' => 'required|string|in:Unmarried,Married',
        'citizenship' => 'required|string|max:255',
        'picture' => 'required|image|max:2048', // 2 MB in kilobytes
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    $PicturePath = $request->file('picture')->store('public/picture');

    $citizenship = new citizenship;
    $citizenship->name = $request->input('name');
    $citizenship->nik = $request->input('nik');
    $citizenship->phonenumber = $request->input('phonenumber');
    $citizenship->address = $request->input('address');
    $citizenship->age = $request->input('age');
    $citizenship->religion = $request->input('religion');
    $citizenship->gender = $request->input('gender');
    $citizenship->job = $request->input('job');
    $citizenship->marialstatus = $request->input('marialstatus');
    $citizenship->citizenship = $request->input('citizenship');
    $citizenship->picture = $PicturePath;
    $citizenship->save();
    // Handle the form submission and save data (including the picture).
    // Make sure you are storing the data in an array and passing it to the view.
    /*$data = [
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
        'picture' => 'path_to_uploaded_picture.jpg', // Replace with the actual path
    ];

    // Check if the image file exists
    if (isset($data['picture']) && File::exists(public_path('storage/' . $data['picture']))) {
        return view('submitted', compact('data'));
    } else {
        // Handle the case where the image file doesn't exist
        // You can return an error message or redirect to an error page.
    }

    return view('submitted', compact('data'));*/
    return view('success');
    }   

}
