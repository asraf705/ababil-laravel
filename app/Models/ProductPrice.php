<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\ProductBasicAuth;
use App\Models\ProductProAuth;
use App\Models\ProductPreAuth;
use App\Models\ProductType;


class ProductPrice extends Model
{
    use HasFactory;

    private static $price, $ba_types, $ba_type, $pro_types, $pro_type, $pre_types, $pre_type;


    private static function saveBasicInfo($price, $request)
    {
        $price->basic_page               = $request->basic_page;
        $price->basic_delivery           = $request->basic_delivery;
        $price->basic_regular_price      = $request->basic_regular_price;
        $price->basic_discount_amount    = $request->basic_discount_amount;
        $price->basic_discount_type      = $request->basic_discount_type;
        $price->basic_selling_price      = $request->basic_selling_price;
        $price->pro_page                 = $request->pro_page;
        $price->pro_delivery             = $request->pro_delivery;
        $price->pro_regular_price        = $request->pro_regular_price;
        $price->pro_discount_amount      = $request->pro_discount_amount;
        $price->pro_discount_type        = $request->pro_discount_type;
        $price->pro_selling_price        = $request->pro_selling_price;
        $price->pre_page                 = $request->pre_page;
        $price->pre_delivery             = $request->pre_delivery;
        $price->pre_regular_price        = $request->pre_regular_price;
        $price->pre_discount_amount      = $request->pre_discount_amount;
        $price->pre_discount_type        = $request->pre_discount_type;
        $price->pre_selling_price        = $request->pre_selling_price;
        $price->save();
        return $price;
    }


    public static function newPrice($request)
    {
        self::$price = new ProductPrice();
        return self::saveBasicInfo(self::$price, $request);
    }



    public static function checkStatus($id){
        self::$price = ProductPrice::find($id);
        if (self::$price->status == 1){
            self::$price->status = 0;
        }else{
            self::$price->status = 1;

        }
        self::$price->save();
    }


    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function themeType(){
        return $this->belongsTo(ProductType::class);
    }

    //    //  Input all Modell and connect table

   public function basicTypes()
   {
       return $this->hasMany(ProductBasicAuth::class);
   }

   public function proTypes()
   {
       return $this->hasMany(ProductProAuth::class);
   }

   public function preTypes()
   {
       return $this->hasMany(ProductPreAuth::class);
   }

}
