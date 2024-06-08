@extends('admin.master')

@section('title')
    Order
@endsection

@section('allOrder')
    active
@endsection

@section('processingOrder')
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
                            <h4>Manage Order</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if (session('Gmessage'))
                                    <p class="text-center text-success">{{ session('Gmessage') }}</p>
                                @else
                                    <p class="text-center text-danger">{{ session('Rmessage') }}</p>
                                @endif

                                <table class="table table-striped table-hover" id="tableExport">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Sl</th>
                                            <th>Customer Info.</th>
                                            <th>Order No</th>
                                            <th>Package Type</th>
                                            <th>Order Date</th>
                                            <th>Order Total</th>
                                            <th>Order Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">

                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{!! $order->customer->fname .
                                                    ' ' .
                                                    $order->customer->lname .
                                                    '<br/>' .
                                                    $order->customer->email .
                                                    '<br/>' .
                                                    $order->customer->phone !!}</td>
                                                <td>#00{{ $order->id }}</td>
                                                <td>{{ $order->package_type }}</td>
                                                <td>{{ date('j M Y', strtotime($order->created_at)) }}</td>
                                                <td>{{ $order->order_total }}<sup>{{ $order->currency }}</sup></td>
                                                <td>{{ $order->order_status }}</td>
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
