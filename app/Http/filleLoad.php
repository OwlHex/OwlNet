<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use League\Flysystem\Exception;

class Product extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    /**
     * Add product info into DB
     * @param $request
     * @return array
     */
    public function addProductInfo($request)
    {

        try {

//            dd($request->file()["avatar"]);
            $file = $request->file()["file"][0];
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $imageName);
            $this->image = $imageName;
            $this->save();
            $response = ['avatar' => $this, 'success' => true, 'message' => 'image load'];
        } catch (\Exception $e){
            $response = ['error' => true, 'message' => $e->getMessage()];
        }
        return $response;
    }



    public function avatarChange($request)
    {
        try {
            $avatar = filleLoad::find($request->input('id'));
            $isUpdatedFile = ($request->file() && $request->file()["file"]) || false;
            if ($isUpdatedFile) {
                $file = $request->file()["file"];
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('img'), $imageName);
                $avatar->image = $imageName;
            }
            $product->save();
            $response = ['success' => true, 'message' => 'avatar update', 'product' => $avatar];
        } catch (\Exception $e) {
            $response = ['error' => true, 'message' => $e->getMessage()];
        }
        return $response;
    }
}
