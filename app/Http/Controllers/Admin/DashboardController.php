<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Dashboard

    public static function dashboard()
    {
        return view('admin.dashboard.index',[
            'newOrders' => Order::all(),
            'countCustomers' => Customer::all(),
        ]);
    }

    public static function customerAccount()
    {
        return view('admin.team-members.customer.index', [
            'allcustomers' => Customer::all(),
        ]);
    }

    public static function customerStatus($id)
    {
        Customer::checkStatus($id);
        return back()->with('Gmessage', 'Product Status Updated Successfully');
    }

    public function productReport()
    {
        return view('admin.report.product-report', [
            'products' => Product::all(),
        ]);
    }

    public function sellesReport()
    {
        return view('admin.report.selles-report', [
            'products' => Product::all(),
        ]);
    }
}
