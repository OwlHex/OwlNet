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
    
}
