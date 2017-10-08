<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use App\filleLoad;

class FilleLoadController extends Controller
{

    public function testing(Request $request) {

        if (view()->exists('avatarEdit')) {
            return view('avatarEdit');
            // return view('avatarEdit')->with('avatarEdit', $avatar);
        }
        abort(404);


        if(Input::file())
        {
            $file = $request->file()["file"][0];
            // dd($file);

            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $imageName);
            $this->image = $imageName;
            $this->save();
        }
    }

}
