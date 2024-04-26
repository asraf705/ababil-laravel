<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    private static $productType;


    public static function newProductType($request)
    {

        self::$productType = new ProductType();
        self::saveBasicInfo(self::$productType, $request);
        self::$productType->save();
    }

    public static function  updateProductType($request, $id)
    {

        self::$productType = ProductType::find($id);
        self::saveBasicInfo(self::$productType, $request);
    }

    public static function  deleteProductType($id)
    {

        self::$productType = ProductType::find($id);
        self::$productType->delete();
    }

    private static function saveBasicInfo($productType, $request){
        $productType->name           = $request->name;
        $productType->description    = $request->description;
        $productType->save();

    }

    public static function checkStatus($id){
        self::$productType = ProductType::find($id);
        if (self::$productType->status == 1){
            self::$productType->status = 0;
        }else{
            self::$productType->status = 1;

        }
        self::$productType->save();
    }
}
