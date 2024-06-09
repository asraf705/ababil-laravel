<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\ProductPrice;
use Illuminate\Http\Request;
use PDF;

class AdminOrderController extends Controller
{
    public function index()
    {
        return view('admin.order.index', [
            'orders' => Order::latest()->get()
        ]);
    }

    public function processingOrder()
    {
        return view('admin.order.other-order.processingOrder', [
            'orders' => Order::where('order_status', 'Processing')->latest()->get()
        ]);
    }

    public function completeOrder()
    {
        return view('admin.order.other-order.completeOrder', [
            'orders' => Order::where('order_status', 'Complete')->latest()->get()
        ]);
    }


    public function edit($id)
    {
        return view('admin.order.edit', [
            'order' => Order::find($id),
            'themePrice' => ProductPrice::latest()->first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        Order::updateOrder($request, $id);
        return redirect('/admin/all-order')->with('Gmessage', 'Order info update successfully.');
    }


    public function detail($id)
    {
        return view('admin.order.details', ['order' => Order::find($id)]);
    }

    public function invoice($id)
    {
        return view('admin.order.invoice',[
            'order' => Order::find($id),
            'orderDetails' =>OrderDetail::where('order_id',$id)->get(),
        ]);
    }

    public function downloadInvoice($id){

        $pdf = PDF::loadView('admin.order.download-invoice',[
            'order'=> Order::find($id),
            'orderDetails'=>OrderDetail::where('order_id',$id)->get()
        ]);
        return $pdf->stream('invoice.pdf');

    }


    public function delete(Request $request, $id)
    {
        $order = Order::find($id);
        $orderDetails = OrderDetail::where('order_id', $id)->get();
        foreach ($orderDetails as $orderDetail) {
            $orderDetail->delete();
        }
        $order->delete();
        return redirect('/admin/all-order')->with('Rmessage', 'Order info Delete successfully.');
    }
}
