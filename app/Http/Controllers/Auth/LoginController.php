<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Events\UserLoggedIn; // Update the namespace to use the correct event
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Override the authenticated method to fire the UserLoggedIn event
    protected function authenticated($request, $user)
    {
        // Fire the UserLoggedIn event
        event(new UserLoggedIn($user));

        // Continue with the default behavior (e.g., redirect to intended page)
        return redirect()->intended($this->redirectPath());
    }
}
