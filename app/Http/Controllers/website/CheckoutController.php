<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        return view('website.checkout.index',[
            'products' => Cart::content(),
        ]);
    }
}
