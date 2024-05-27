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

    public function newOder(Request $request){
        if (Session::get('customer_id')) {
            $this->customer = Customer::find(Session::get('customer_id'));
        }
        else{

            $this->customer = Customer::where('phone', $request->phone)->orWhere('email', $request->email)->first();
            if (!$this->customer){
                $this->customer = Customer::saveInfo(($request));
            }
            Session::put('customer_id', $this->customer->id);
            Session::put('customer_name', $this->customer->name);
        }

        return $request;

        // if ($request->payment_method == 'Online')
        // {
        //     $sslCommerzePayment = new SslCommerzPaymentController();
        //     $sslCommerzePayment->index($request, $this->customer);
        // }
        // else
        // {
        //     $this->order = Order::newOrder($request, $this->customer);
        //     OrderDetail::newOrderDetail($this->order);
        //     return redirect('/complete-order')->with('message', 'Congratulations your order info post succesfully. Please Wait Until We Contact With you');
        // }
    }

}
