<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index(){
        return view('admin.order.index',[
            'orders' => Order::latest()->get()
        ]);
    }

    public function detail($id){
        return view('admin.order.details',['order' => Order::find($id)]);
    }







}
