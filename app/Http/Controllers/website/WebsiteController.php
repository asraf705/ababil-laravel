<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    // home
    public static function home(){
        return view('website.home.index');
    }

    // template
    public static function template(){
        return view('website.template.index');
    }

    // single-template
    public static function singleTemplate(){
        return view('website.template.single-template');
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
