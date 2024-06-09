<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Models\ProductBasicAuth;
use App\Models\ProductPreAuth;
use App\Models\ProductProAuth;
use App\Models\ProductType;
use Cart;
use App\Models\ProductPrice;
use App\Models\Customer;
use Session;
use App\Models\Order;
use App\Models\OrderDetail;
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
            'prices'      => ProductPrice::where('id', 1)->get(),
            'productTypes' => ProductType::where('status', 1)->get(),
            'basicPrices'  => ProductBasicAuth::where('product_price_id', 1)->get(),
            'proPrices'    => ProductProAuth::where('product_price_id', 1)->get(),
            'prePrices'    => ProductPreAuth::where('product_price_id', 1)->get(),
        ]);
    }

    public function newOrder(Request $request)
    {

        // return $request;
        if (Session::get('customer_id')) {
            $this->customer = Customer::find(Session::get('customer_id'));
        } else {

            $this->customer = Customer::where('phone', $request->phone)->orWhere('email', $request->email)->first();
            if (!$this->customer) {
                $this->customer = Customer::saveInfo(($request));
            }
            Session::put('customer_id', $this->customer->id);
            Session::put('customer_name', $this->customer->name);
        }

        if ($request->payment_method == 'Online') {
            $sslCommerzePayment = new SslCommerzPaymentController();
            $sslCommerzePayment->index($request, $this->customer);
        }
    }

    public function completeOrder()
    {
        return view('website.checkout.complete-order');
    }
}
