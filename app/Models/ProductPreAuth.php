<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPreAuth extends Model
{
    use HasFactory;

    private static $ProductPreAuth, $ProductPreAuths;

    public static function newPreType($pre_types, $productID){
        foreach ($pre_types as $pre_auth_type){
            self::$ProductPreAuth = new ProductPreAuth();
            self::$ProductPreAuth->product_price_id = $productID;
            self::$ProductPreAuth->pre_type = $pre_auth_type;
            self::$ProductPreAuth->save();
        }
    }


    public function productType(){
        return $this->belongsTo(ProductType::class);
    }
}
