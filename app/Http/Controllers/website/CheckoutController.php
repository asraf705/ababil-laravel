<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Cart;
use App\Models\ProductPrice;
use App\Models\Customer;
use Session;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    private $price, $customer, $order, $orderDetail;

    public function index()
    {
        if (Session::get('customer_id')) {
            $this->customer = Customer::find(Session::get("customer_id"));
        } else {
            $this->customer = '';
        }
        return view('website.checkout.index', [
            'products' => Cart::content(),
            'customer' => $this->customer,
            'cartsProduct' => Cart::content(),
        ]);
    }


}
