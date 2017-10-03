<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function home ()
    {
        if (view()->exists('welcome')) {
            return view('welcome');
        }
        abort(404);

    }
    public function SignIn ()
    {
        if (view()->exists('Signin')) {
            return view('Signin');
        }
        abort(404);

    }
    public function SignUp ()
    {
        if (view()->exists('SignUp')) {
            return view('SignUp');
        }
        abort(404);

    }

}
