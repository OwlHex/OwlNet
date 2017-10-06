<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function home ()
    {
        if (view()->exists('welcome')) {
            return view('post');
           
        }
        abort(404);

    }
    public function gallery ()
    {
        if (view()->exists('gallery')) {
            return view ('gallery');
            
        }
        abort(404);
        
    }
    public function news ()
    {
        if (view()->exists('news')) {
            return view('news');
        }
        abort(404);

    }
    
    public function logout ()
    {
        if (view()->exists('welcome')) {
            return view('welcome');
        }
        abort(404);

    }

    public function SignIn ()
    {
        if (view()->exists('login')) {
            return view('login');
        }
        abort(404);

    }
    public function Registration ()
    {
        if (view()->exists('Registration')) {
            return view('Registration');
        }
        abort(404);

    }

}
