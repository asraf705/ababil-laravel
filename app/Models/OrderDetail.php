<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cart;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    private static $orderDetail;

    public static function newOrderDetail($order){
        foreach (Cart::content() as $item){
            self::$orderDetail = new OrderDetail();
            self::$orderDetail->order_id        = $order->id;
            self::$orderDetail->customer_id     = $order->customer_id;
            self::$orderDetail->product_id      = $item->id;
            self::$orderDetail->product_qty     = $item->qty;
            self::$orderDetail->product_price   = $item->price;
            self::$orderDetail->save();
            Cart::remove($item->rowId);
        }
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
