<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductPrice;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    // home
    public static function home(){
        return view('website.home.index',[
            'categories' => Category::where('status',1)->get(),
        ]);
    }

    // template
    public static function template(){
        return view('website.template.index',[
            'categories' => Category::where('status',1)->get(),
            'themes' => Product::where('status',1)->latest()->get(),
        ]);
    }

    // single-template
    public static function singleTemplate($title){
        return view('website.template.single-template',[
            'theme'=> Product::where('title',$title)->first(),
            'prices' => ProductPrice::all(),
        ]);
    }


     // Category Wise Template
     private $category;
     public function categoryWiseTemplate($id){
        $this->category =Category::find($id);
        return view('website.template.category-template',[
            'categories' => Category::where('status',1)->get(),
            'themes' => Product::where('category_id',$this->category->id)->latest()->get(),
        ]);
    }

     // Contact
     public static function about(){
        return view('website.team.index');
    }

    // team
    public static function team(){
        return view('website.team.index');
    }

    // price
    public static function price(){
        return view('website.price.index');
    }

    // login
    public static function customerLogin(){
        return view('website.userAuth.login');
    }

    // UserRegister
    public static function userRegister(){
        return view('website.userAuth.register');
    }

    // cart
    public static function cart(){
        return view('website.cart.index');
    }

    // checkout
    public static function checkout(){
        return view('website.checkout.index');
    }

}
