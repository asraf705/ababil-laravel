<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBasicAuth extends Model
{
    use HasFactory;

    private static $ProductBasicAuth, $ProductBasicAuths;

    public static function newBasicType($basicTypes, $priceID){
        foreach ($basicTypes as $basicType){
            self::$ProductBasicAuth = new ProductBasicAuth();
            self::$ProductBasicAuth->product_price_id = $priceID;
            self::$ProductBasicAuth->basic_type_id = $basicType;
            self::$ProductBasicAuth->save();
        }
    }

    public static function updateBasic($basicTypes, $priceID){
        self::$ProductBasicAuths = ProductBasicAuth::where('product_price_id',$priceID)->get();
        foreach (self::$ProductBasicAuths as self::$ProductBasicAuth){
            self::$ProductBasicAuth->delete();
        }
        ProductBasicAuth::newBasicType($basicTypes, $priceID);
    }

    public function productType(){
        return $this->belongsTo(ProductType::class);
    }
}
