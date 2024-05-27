@extends('website.master')

@section('title')
    Oder Info
@endsection

@section('customer')
    active
@endsection

@section('customerOder')
    active
@endsection

@section('body')
    <div class="shop_sidebar_area">
        <!-- ##### Single Widget ##### -->
        <div class="widget catagory mb-50">
            <!--  Catagories  -->
            @include('website.customer.customer-info.customer-menu')

        </div>
    </div>


    <div class="amado_product_area section-padding-100">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2>Oder Informetion</h2>
                            <hr>
                        </div>

                        <div class="cart-table clearfix col-md-12">
                            <table class="table text-center col-lg-12">
                                <thead>
                                    <tr style="background: #7c7b7b59">
                                        <th>Sl</th>
                                        <th>Name</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                        <th>Oder Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td style="padding-top: 3%; padding-bottom: 3%;vertical-align: middle;">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td style="padding-top: 3%; padding-bottom: 3%;vertical-align: middle;;width: 40%;color: black;">
                                                @foreach ($orderDetail as $orderDetails)
                                                    @if ($order->id == $orderDetails->order_id)
                                                        {{ $orderDetails->product->title }}<br>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td style="padding-top: 3%; padding-bottom: 3%;vertical-align: middle;">
                                                @php
                                                    $totalQty = 0;
                                                @endphp

                                                @foreach ($orderDetail as $orderDetails)
                                                    @if ($order->id == $orderDetails->order_id)
                                                        @php
                                                            $totalQty += $orderDetails->product_qty;
                                                        @endphp
                                                    @endif
                                                @endforeach

                                                @if ($totalQty >= 2)
                                                    {{ $totalQty }}
                                                @else
                                                    {{ $orderDetails->product_qty }}
                                                @endif
                                            </td>
                                            <td style="padding-top: 3%; padding-bottom: 3%;vertical-align: middle;">
                                                {{ $order->order_total }}<sup>{{ $order->currency }}</sup>
                                            </td>
                                            <td style="padding-top: 3%; padding-bottom: 3%;vertical-align: middle;">
                                                {{ $order->order_date }}
                                            </td>
                                            <td style="padding-top: 3%; padding-bottom: 3%;vertical-align: middle;">
                                                {{ $order->order_status }}
                                            </td>
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
@endsection
