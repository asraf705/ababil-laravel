@extends('admin.master')

@section('title')
    Order Detail
@endsection

@section('allOrder')
    active
@endsection

@section('manageOrder')
    active
@endsection

@section('body')
    <!-- Main Content -->
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Manage Detail</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="mainTable" class="table table-striped">

                                    <tr>
                                        <th>
                                            <strong>Order ID</strong>
                                        </th>
                                        <td>
                                            #00{{ $order->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <strong>Order Date</strong>
                                        </th>
                                        <td>
                                            {{ date('j M Y', strtotime($order->created_at)) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <strong>Order Status</strong>
                                        </th>
                                        <td>
                                            {{ $order->order_status }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <strong>Package Type</strong>
                                        </th>
                                        <td>
                                            {{ $order->package_type }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <strong>Payment Method</strong>
                                        </th>
                                        <td>
                                            {{ $order->payment_method }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <strong>Payment Status</strong>
                                        </th>
                                        <td>
                                            {{ $order->payment_status }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <strong>Payment Date</strong>
                                        </th>
                                        <td>
                                            {{ $order->payment_date }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <strong>Transaction ID</strong>
                                        </th>
                                        <td>
                                            {{ $order->transaction_id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <strong>Customer Name</strong>
                                        </th>
                                        <td>
                                            {!! $order->customer->fname . ' ' . $order->customer->lname !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <strong>Customer Contact</strong>
                                        </th>
                                        <td>
                                            {{ $order->customer->email }}<br>{{ $order->customer->phone }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <strong>Customer criteria</strong>
                                        </th>
                                        <td>
                                            {!! $order->comment !!}
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Sl</th>
                                            <th>Product Name</th>
                                            <th>Product Code</th>
                                            <th>Quantity</th>
                                            <th>Product Price</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">

                                        @foreach ($order->orderDetails as $orderDetail)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $orderDetail->product_name }}</td>
                                                <td>{{ $orderDetail->product->code }}</td>
                                                <td>{{ $orderDetail->product_qty }}</td>
                                                <td>{{ $orderDetail->product_price }}<sup>{{$order->currency}}</sup></td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
