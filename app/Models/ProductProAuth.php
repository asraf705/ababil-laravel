<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductType;

class ProductProAuth extends Model
{
    use HasFactory;

    private static $ProductProAuth, $ProductProAuths;

    public static function newProType($proTypes, $priceID){
        foreach ($proTypes as $pro_auth_type){
            self::$ProductProAuth = new ProductProAuth();
            self::$ProductProAuth->product_price_id = $priceID;
            self::$ProductProAuth->pro_type = $pro_auth_type;
            self::$ProductProAuth->save();
        }
    }

    public static function updatePro($proTypes, $priceID){
        self::$ProductProAuths = ProductProAuth::where('product_price_id',$priceID)->get();
        foreach (self::$ProductProAuths as self::$ProductProAuth){
            self::$ProductProAuth->delete();
        }
        ProductProAuth::newProType($proTypes, $priceID);
    }


    public function productType(){
        return $this->belongsTo(ProductType::class);
    }
}
