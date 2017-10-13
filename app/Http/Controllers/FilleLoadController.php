<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use App\filleLoad;

class FilleLoadController extends Controller
{
    


    public function testing1(Request $request){

        

        

    

        $avatar = new filleLoad();
        $result = $avatar->editProfile($request);
        if (view()->exists('avatarEdit')) {
            return view('avatarEdit');
            
        }
        return response()->json($result);



        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $gender = $_POST['gender'];

        $user = Auth::user()->select('name')->get();

        DB::table('users')->where('name', $user )->insert(
        array('first_name' => "$firstName", 'last_name' => "$lastName",'gender' => "$gender"));
        
        
    }
}
