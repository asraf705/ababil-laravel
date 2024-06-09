<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Policy;
use App\Models\ProductBasicAuth;
use App\Models\ProductPreAuth;
use App\Models\ProductPrice;
use App\Models\ProductProAuth;
use App\Models\ProductType;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    // home
    public static function home()
    {
        return view('website.home.index', [
            'categories' => Category::where('status', 1)->get(),
        ]);
    }

    // template
    public static function template()
    {

        return view('website.template.index', [
            'categories' => Category::where('status', 1)->get(),
            'themes' => Product::where('status', 1)->latest()->get(),
        ]);
    }

    // single-template
    public static function singleTemplate($name)
    {
        $theme = Product::where('name', $name)->first();
        $theme->hit_count = $theme->hit_count + 1;
        $theme->save();
        return view('website.template.single-template', [
            'theme' => $theme,
            'prices' => ProductPrice::all(),
        ]);
    }


    // Category Wise Template

    public function categoryWiseTemplate($id)
    {
        $category = Category::find($id);
        $categories = Category::where('status', 1)->get();
        $themes = Product::where('category_id', $category->id)->latest()->get();
        return view('website.template.category-template', compact('categories', 'themes', 'category'));
    }


    // Contact
    public static function about()
    {
        return view('website.team.index');
    }

    // team
    public static function team()
    {
        return view('website.team.index');
    }

    // price
    public static function price()
    {
        return view('website.price.index',[
            'prices'      => ProductPrice::where('id', 1)->get(),
            'productTypes' => ProductType::where('status', 1)->get(),
            'basicPrices'  => ProductBasicAuth::where('product_price_id', 1)->get(),
            'proPrices'    => ProductProAuth::where('product_price_id', 1)->get(),
            'prePrices'    => ProductPreAuth::where('product_price_id', 1)->get(),
        ]);
    }

    // policyOne
    public static function policyOne()
    {
        return view('website.polices.pageOne', [
            'policy' => Policy::latest()->first(),
        ]);
    }

    // policyTwo
    public static function policyTwo()
    {
        return view('website.polices.pageTwo', [
            'policy' => Policy::latest()->first(),
        ]);
    }

    // policyThree
    public static function policyThree()
    {
        return view('website.polices.pageThree', [
            'policy' => Policy::latest()->first(),
        ]);
    }

    // policyFour
    public static function policyFour()
    {
        return view('website.polices.pageFour', [
            'policy' => Policy::latest()->first(),
        ]);
    }
}
