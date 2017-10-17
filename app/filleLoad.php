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

        try {


            $this->firstname = $request->input('first_name');
            $this->lastname = $request->input('last_name');
            $this->gender = $request->input('gender');
            $user =  Auth::id();
            
            DB::table('users')->where('id', $user )->update(array('first_name' => $this->firstname, 'last_name' => $this->lastname,'gender' => $this->gender));

            

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
