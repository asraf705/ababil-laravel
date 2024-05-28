@extends('admin.master')

@section('title')
    Order
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
                            <h4>Manage Order</h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if (session('Gmessage'))
                                    <p class="text-center text-success">{{ session('Gmessage') }}</p>
                                @else
                                    <p class="text-center text-danger">{{ session('Rmessage') }}</p>
                                @endif

                                <table class="table table-striped table-hover" id="tableExport" >
                                    <thead>
                                        <tr class="text-center">
                                            <th>Sl</th>
                                            <th>Customer Info.</th>
                                            <th>Order No</th>
                                            <th>Package Type</th>
                                            <th>Order Date</th>
                                            <th>Order Total</th>
                                            <th>Order Status</th>
                                            <th>Action</th>
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
                                                <td class="justify-content-center d-flex">
                                                    <a title="Order Detail" href="{{ route('admin-order.detail', ['id' => $order->id]) }}" class="btn btn-dark"
                                                        style="margin-right: 10px;"><i class="fa fa-info-circle"></i>
                                                    </a>
                                                    <a href="" title="Order Edit"
                                                        class="btn btn-primary" style="margin-right: 10px;">
                                                        <i class="fa fa-edit"></i></a>

                                                    <form action=""
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger "
                                                            onclick="return confirm('Are you sure delete this!!')"><i
                                                                class="fa fa-trash"></i></button>
                                                    </form>

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
    </section>
@endsection
