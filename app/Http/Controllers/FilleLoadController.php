<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use App\filleLoad;

class FilleLoadController extends Controller
{
    
    public function avatarEdit(){
        // $avatar = DB::select("SELECT * FROM `avatar`");
//        dd($products);

        if (view()->exists('avatarEdit')) {
            return view('avatarEdit');
            // return view('avatarEdit')->with('avatarEdit', $avatar);
        }
        abort(404);
    }

    public function edit(Request $request)
    {
        $avatar = new Product();
        $result = $product->editProduct($request);
        if (view()->exists('avatarEdit')) {
            return response()->json($result);
        }

    }
}
