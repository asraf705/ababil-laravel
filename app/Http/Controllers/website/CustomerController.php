<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // customer Register
    public function index()
    {
        return view('website.userAuth.register');
    }

    public function saveCustomerInfo(Request $request)
    {
        Customer::saveInfo($request);
        return back();
    }
}
