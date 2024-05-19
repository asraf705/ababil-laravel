<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerController extends Controller
{

    private $customer, $orders, $customer_id, $wishlist;

    // customer Register
    public function index()
    {
        return view('website.userAuth.register');
    }

    public function loginFrom()
    {
        return view('website.userAuth.login');
    }

    public function saveCustomerInfo(Request $request)
    {
        Customer::saveInfo($request);
        // Session::put('customer_id', $this->customer->id);
        // Session::put('customer_name', $this->customer->fname);
        return back();
    }

    public function customerLoginCheck(Request $request){
        Customer::loginCheck($request);
        // if (Session::get('product_id'))
        // {
        //     $productId = Session::get('product_id');
        //     Session::forget(Session::get('product_id'));
        //     return  redirect('/template/single-template/'.$productId);
        // }
        return redirect(route('home'));
    }


}
