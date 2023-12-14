<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;

class MailController extends Controller
{
    public function index()
    {
        return view('emails');
    }

    public function sendEmail(Request $request)
    {
        $message = $request->input('message');

        try {
            Mail::to('recipient@example.com')->send(new MyTestMail($message));
            return view('success');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
