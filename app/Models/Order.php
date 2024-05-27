<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    private static $order;
    public static function newOrder($request, $customer){
        self::$order = new Order();
        self::$order->customer_id          = $customer->id;
        self::$order->company_name         = $request->company_name;
        self::$order->comment              = $request->comment;
        self::$order->package_type         = $request->package_type;
        self::$order->subtotel_price       = $request->subtotel_price;
        self::$order->tax_ammount          = $request->tax_ammount;
        self::$order->package_price        = $request->package_price;
        self::$order->order_total          = $request->order_total;
        self::$order->order_date           = date('y-m-d');
        self::$order->order_timestamp      = strtotime(date('y-m-d'));
        self::$order->address              = $request->address;
        self::$order->payment_method       = $request->payment_method;
        self::$order->save();
        return self::$order;
    }





    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function orderDetails(){
        return $this->hasMany(OrderDetail::class);
    }


}
