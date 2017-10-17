<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use App\filleLoad;
use Auth;

class FilleLoadController extends Controller
{
    


    public function testing1(Request $request){




        

        $avatar = new filleLoad();
        $result = $avatar->editProfile($request);
        if (view()->exists('avatarEdit')) {
            return view('avatarEdit');
            
            $this->firstname = $request->input('first_name');
            $this->lastname = $request->input('last_name');
            $this->gender = $request->input('gender');
            $user =  Auth::id();
            DB::table('users')->where('id', $user )->update(array('first_name' => $this->firstname, 'last_name' => $this->lastname,'gender' => $this->gender));

            
        }
        return response()->json($result);
      
    }
}
