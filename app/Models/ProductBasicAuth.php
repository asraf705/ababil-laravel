<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductType;

class ProductBasicAuth extends Model
{
    use HasFactory;

    private static $ProductBasicAuth, $ProductBasicAuths;

    public static function newBasicType($basicTypes, $priceID, $productID){
        foreach ($basicTypes as $basicType){
            self::$ProductBasicAuth = new ProductBasicAuth();
            self::$ProductBasicAuth->product_price_id = $priceID;
            self::$ProductBasicAuth->product_id = $productID;
            self::$ProductBasicAuth->basic_type_id = $basicType;
            self::$ProductBasicAuth->save();
        }
    }

    public function themeType(){
        return $this->belongsTo(ProductType::class);
    }
}
