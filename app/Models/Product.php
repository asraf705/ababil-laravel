<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class Product extends Model
{
    use HasFactory;

    private static $product, $image, $imageUrl, $directory, $imageName, $extension, $images, $ba_auth_types, $ba_auth_type, $pro_auth_types, $pro_auth_type, $pre_auth_types, $pre_auth_type, $productprices, $basicPrices, $basicPrice, $proPrices, $proPrice, $prePrices, $prePrice   ;

    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(10000, 500000) . '.' . self::$extension;
        self::$directory = 'upload/product-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }

    public static function newProduct($request)
    {
        if ($request->file('image')) {
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = ' ';
        }
        self::$product = new Product();

        return self::saveBasicInfo(self::$product, $request, self::$imageUrl);
    }


    public static function  updateProduct($request, $id)
    {

        self::$product = Product::find($id);

        if ($request->file('image'))
        {
            if (file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }

            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = self::$product->image;
        }

        return self::saveBasicInfo(self::$product, $request, self::$imageUrl);
    }

    // only Product delete
    public static function  deleteProduct($id)
    {

        self::$product = Product::find($id);

        if (file_exists(self::$product->image))
        {
            unlink(self::$product->image);
        }
        self::$product->delete();
    }



    // Product and Price(basic,pro,pre) Delete
    public static function  deletefullProduct($id)
    {

        self::$product = Product::find($id);

        if (file_exists(self::$product->image))
        {
            unlink(self::$product->image);
        }

        self::$productprices = ProductPrice::where('product_id', self::$product->id)->get();

        self::$basicPrices = ProductBasicAuth::where('product_id', self::$product->id)->get();
        foreach (self::$basicPrices as self::$basicPrice) {
            self::$basicPrice->delete();
        }

        self::$proPrices = ProductProAuth::where('product_id', self::$product->id)->get();
        foreach (self::$proPrices as self::$proPrice) {
            self::$proPrice->delete();
        }

        self::$prePrices = ProductBasicAuth::where('product_id', self::$product->id)->get();
        foreach (self::$prePrices as self::$prePrice) {
            self::$prePrice->delete();
        }

        self::$product->delete();
    }


    private static function saveBasicInfo($product, $request, $imageUrl)
    {
        $product->category_id                    = $request->category_id;
        $product->name                          = $request->name;
        $product->auther_id                      = $request->auther_id;
        $product->code                           = $request->code;
        $product->short_description              = $request->short_description;
        $product->long_description               = $request->long_description;
        $product->web_page                       = $request->web_page;
        $product->view_url                       = $request->view_url;
        $product->download_url                   = $request->download_url;
        $product->image                          = $imageUrl;
        $product->template_delivery              = $request->template_delivery;
        $product->template_regular_price         = $request->template_regular_price;
        // Template
            $product->template_selling_price         = $request->template_selling_price;
            $product->template_discount_type         = $request->template_discount_type;
            $product->template_discount_amount       = $request->template_discount_amount;


        $product->save();
        return $product;
    }






    public static function checkStatus($id){
        self::$product = Product::find($id);
        if (self::$product->status == 1){
            self::$product->status = 0;
        }else{
            self::$product->status = 1;

        }
        self::$product->save();
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }



}
