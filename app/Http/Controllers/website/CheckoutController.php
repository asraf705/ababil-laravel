<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Cart;
use App\Models\ProductPrice;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        return view('website.checkout.index',[
            'products' => Cart::content(),
        ]);
    }

    public function getPriceByPackage($basic_regular_price, $pro_regular_price, $pre_regular_price) {
        $db = new PDO('mysql:host=127.0.0.1;dbname=ababil_app', 'root', '');
        $packageModel = new ProductPrice($db);
        $prices = $packageModel->getPriceByPackage($basic_regular_price, $pro_regular_price, $pre_regular_price);
        return $prices;
      }
}
