<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function redirectTo()
    {
        // Modify this method to specify the desired redirection logic.
        if (auth()->user()->isAdmin()) {
            return route('backend.dashboard'); // Redirect admins to the backend dashboard.
        }

        return RouteServiceProvider::HOME; // Redirect regular users to the root URL.
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
