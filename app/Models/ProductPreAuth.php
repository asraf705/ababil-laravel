<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPreAuth extends Model
{
    use HasFactory;

    private static $ProductPreAuth, $ProductPreAuths;

    public static function newPreType($preTypes, $priceID){
        foreach ($preTypes as $pre_auth_type){
            self::$ProductPreAuth = new ProductPreAuth();
            self::$ProductPreAuth->product_price_id = $priceID;
            self::$ProductPreAuth->pre_type = $pre_auth_type;
            self::$ProductPreAuth->save();
        }
    }

    public static function updatePre($preTypes, $priceID){
        self::$ProductPreAuths = ProductPreAuth::where('product_price_id',$priceID)->get();
        foreach (self::$ProductPreAuths as self::$ProductPreAuth){
            self::$ProductPreAuth->delete();
        }
        ProductPreAuth::newPreType($preTypes, $priceID);
    }

    public function productType(){
        return $this->belongsTo(ProductType::class);
    }
}
