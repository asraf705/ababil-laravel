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

                            <div class="card-header-action d-flex">

                                <a href="{{ route('admin-order.edit', ['id' => $order->id]) }}" title="Order Edit"
                                    class="btn btn-primary" style="margin-right: 10px;">
                                    <i class="fa fa-edit"></i></a>

                                <a href="{{ route('admin-order.invoice') }}" title="Order Invoice" class="btn btn-warning" {{$order->order_status == 'Pending' || $order->order_status =='Cancel' ? 'hidden' : ''}}
                                    style="margin-right: 10px;">
                                    <i class="fa fa-file"></i></a>

                                @if ($order->order_status == 'Cancel')
                                    <form action="{{ route('admin-order.delete', ['id' => $order->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger " title="Delete" style="margin-right: 10px;"
                                            onclick="return confirm('Are you sure delete this!!')"><i
                                                class="fa fa-trash"></i></button>
                                    </form>

                                    <a href="{{ route('admin-order.manage') }}" title="Order Back" class="btn btn-danger">Back</a>
                                @else
                                    <a href="{{ route('admin-order.manage') }}" title="Order Back" class="btn btn-danger">Back</a>
                                @endif

                            </div>

                            @if (session('Gmessage'))
                                <p class="text-center text-success">{{ session('Gmessage') }}</p>
                            @else
                                <p class="text-center text-danger">{{ session('Rmessage') }}</p>
                            @endif

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

                        <div class="card-header">
                            <h4>Order Info</h4>
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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">

                                        @foreach ($order->orderDetails as $orderDetail)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $orderDetail->product_name }}</td>
                                                <td>{{ $orderDetail->product->code }}</td>
                                                <td>{{ $orderDetail->product_qty }}</td>
                                                <td>
                                                    {{ $orderDetail->product_price }}<sup>{{ $order->currency }}</sup>
                                                </td>
                                                <td>
                                                    <a href="{{ route('products.show', $orderDetail->id) }}"
                                                        title="Product Details" class="btn btn-dark"
                                                        style="margin-right: 10px;"><i class="fa fa-info-circle"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3"> </td>
                                            <td style="text-align: center;">Package:</td>
                                            <td style="text-align: center;">
                                                {{ $order->package_price }}<sup>{{ $order->currency }}</sup>
                                            </td>
                                        </tr>
                                        <tr style="border-bottom-color: black;">
                                            <td colspan="3"> </td>
                                            <td style="text-align: center;">Tax:</td>
                                            <td style="text-align: center;">
                                                {{ $order->tax_ammount }}%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"> </td>
                                            <td style="text-align: center;font-weight: bold;">Total:</td>
                                            <td style="text-align: center;">
                                                {{ $order->order_total }}<sup>{{ $order->currency }}</sup>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
