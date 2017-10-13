<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use League\Flysystem\Exception;
use DB;
use Auth;


class filleLoad extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    // public $avatar = 'somen';

    /**
     * Add product info into DB
     * @param $request
     * @return array
     */
    
        
    public function editProfile( $request)
    {

        
        $firstName =$_POST["firstname"];
        $lastName =$_POST["lastname"];
        $gender = $_POST["gender"];

        $user = Auth::user()->select('name')->get();
        // dd($user);
        // $DBUserInsert  = DB::select("SELECT * FROM `users`");
        // $usertest = DB::table('users')->distinct()->select('name',$user)->get();
        // echo $usertest->name;

        DB::table('users')->where('name', $user )->insert(
           array('first_name' => "$firstName", 'last_name' => "$lastName",'gender' => "$gender"));

        




        try {

            $isUpdatedFile = ($request->file() && $request->file()["file"]) || false;

            if ($isUpdatedFile) {
                $file = $request->file()["file"];
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('img'), $imageName);
                settype($avatar, "string");
                $avatar = $imageName;
            }


            // $avatar->save();
            $response = ['success' => true, 'message' => 'product updated','avatar' => $avatar];
        } catch (\Exception $e) {
            $response = ['error' => true, 'message' => $e->getMessage()];
        }

        return $response;



       

    }
}
