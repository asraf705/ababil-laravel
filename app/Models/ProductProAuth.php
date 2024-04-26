<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductType;

class ProductProAuth extends Model
{
    use HasFactory;

    private static $ProductProAuth, $ProductProAuths;

    public static function newProType($pro_types, $productID){
        foreach ($pro_types as $pro_auth_type){
            self::$ProductProAuth = new ProductProAuth();
            self::$ProductProAuth->product_price_id = $productID;
            self::$ProductProAuth->pro_type = $pro_auth_type;
            self::$ProductProAuth->save();
        }
    }

    // public static function updateProductProAuth($pro_types, $productID ){

    //     self::$ProductProAuths = ProductProAuth::where('product_id',$productID)->get();

    //     foreach (self::$ProductProAuths as self::$ProductProAuth){
    //          self::$ProductProAuth->delete();
    //     }
    //     ProductProAuth::newProductProAuth($pro_types, $productID);
    // }


    public function productType(){
        return $this->belongsTo(ProductType::class);
    }
}
