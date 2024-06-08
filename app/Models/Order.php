<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Order extends Model
{
    use HasFactory;

    private static $order, $product;
    public static function newOrder($request, $customer)
    {
        self::$order = new Order();
        self::$order->customer_id          = $customer->id;
        self::$order->company_name         = $request->company_name;
        self::$order->comment              = $request->comment;
        self::$order->package_type         = $request->package_type;
        self::$order->subtotel_price       = $request->subtotel_price;
        self::$order->tax_ammount          = $request->tax_ammount;
        self::$order->package_price        = $request->package_price;
        self::$order->order_total          = $request->order_total;
        self::$order->order_date           = date('dd-mm-yy');
        self::$order->order_timestamp      = strtotime(date('dd-mm-yy'));
        self::$order->address              = $request->address;
        self::$order->payment_method       = $request->payment_method;
        self::$order->save();
        return self::$order;
    }

    public static function updateOrder($request, $id)
    {
        self::$order = Order::find($id);
        if (self::$order->order_status == 'Pending') {
            self::$order->order_status      = $request->order_status;
        } elseif (self::$order->order_status == 'Processing') {
            self::$order->order_status      = $request->order_status;
            self::$order->delivery_date     = Carbon::now()->addDays($request->delivery_date);

            // product sales_count edit
            $orderDetails = OrderDetail::where('order_id', $id)->get();

            foreach ($orderDetails as $orderDetail) {
                // Get the product associated with the order
                $product = Product::find($orderDetail->product_id);

                // Check if the product exists
                if ($product) {
                    // Increment the sales_count by 1
                    $product->sales_count = $product->sales_count + 1;
                    $product->save();
                } else {
                    // Log an error or throw an exception if the product doesn't exist
                    Log::error("Product with id " . $orderDetail->product_id . " doesn't exist");
                }
            }
            // product sales_count edit end

        } elseif (self::$order->order_status == 'Complete') {
            self::$order->order_status      = $request->order_status;
            self::$order->payment_status    = $request->order_status;
            self::$order->payment_amount    = self::$order->order_total;
            self::$order->payment_timestamp = strtotime(date('dd-mm-yyyy'));
        } elseif (self::$order->order_status == 'Cancel') {
            self::$order->order_status      = $request->order_status;
            self::$order->delivery_status   = $request->order_status;
            self::$order->payment_status    = $request->order_status;
        }
        self::$order->save();
    }



    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
