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
            $this->name = $request->input('name');
            $this->count = $request->input('count');
//            dd($request->file()["avatar"]);
            $file = $request->file()["file"][0];

            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $imageName);
            $this->image = $imageName;
            $this->save();
            $response = ['product' => $this, 'success' => true, 'message' => 'product created'];
        } catch (\Exception $e){
            $response = ['error' => true, 'message' => $e->getMessage()];
        }
        return $response;
    }

    public function deleteProduct($request) {
        try {
            $ids = $request->input('ids');
            $this->whereIn('id', $ids)->delete();
            $response = ['product_ids' => $ids, 'success' => true, 'message' => 'product deleted'];
        } catch (\Exception $e){
            $response = ['error' => true, 'message' => $e->getMessage()];
        }
        return $response;
    }

    public function editProduct($request)
    {
        try {
            $product = Product::find($request->input('id'));
            $product->name = $request->input('name');
            $product->count = $request->input('count');
            $isUpdatedFile = ($request->file() && $request->file()["file"]) || false;
            if ($isUpdatedFile) {
                $file = $request->file()["file"];
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('img'), $imageName);
                $product->image = $imageName;
            }
            $product->save();
            $response = ['success' => true, 'message' => 'product updated', 'product' => $product];
        } catch (\Exception $e) {
            $response = ['error' => true, 'message' => $e->getMessage()];
        }
        return $response;
    }
}
