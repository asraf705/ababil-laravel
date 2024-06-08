@extends('admin.master')

@section('title')
    Order Edit
@endsection

@section('allOrder')
    active
@endsection

@section('manageOrder')
    active
@endsection

@section('body')
    <!-- css style -->
    <style>
        .required {
            color: red;
        }
    </style>
    <!-- css style -->
    <!-- Main Content -->

    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">

                            <div class="card-header">
                                <h4>Edit Order</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('admin-order.detail', ['id' => $order->id]) }}"
                                        class="btn btn-danger">Back</a>
                                </div>
                            </div>

                            <form class="form-horizontal" action="{{ route('admin-order.update', ['id' => $order->id]) }}"
                                method="POST">
                                @csrf

                                <div class="card-body">

                                    <!-- frist policy -->
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Order ID</div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="#00{{ $order->id }}"
                                                    placeholder="Ponicy Name" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Customer Name<samp class="required">*</samp>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="{!! $order->customer->fname . ' ' . $order->customer->lname !!}"
                                                    placeholder="Customer Name" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Customer Info<samp class="required">*</samp>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                    value="{{ $order->customer->email }}" placeholder="Customer Info"
                                                    readonly>
                                                <input type="text" class="form-control mt-2"
                                                    value="{{ $order->customer->phone }}" placeholder="Customer Info"
                                                    readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Order Total</div>
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                    value="{{ $order->order_total }} USD" placeholder="USD" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Delivery Date</div>
                                            <div class="form-group">
                                                @if ($order->delivery_date == null)
                                                    @if ($order->package_type = 'Basic')
                                                        <input type="number" class="form-control" name="delivery_date"
                                                            value="{{ $themePrice->basic_delivery }}"
                                                            placeholder="Delivery Date">
                                                    @elseif($order->package_type = 'Pro')
                                                        <input type="number" class="form-control" name="delivery_date"
                                                            value="{{ $themePrice->pro_delivery }}"
                                                            placeholder="Delivery Date">
                                                    @else
                                                        <input type="number" class="form-control" name="delivery_date"
                                                            value="{{ $themePrice->pro_delivery }}"
                                                            placeholder="Delivery Date">
                                                    @endif
                                                @else
                                                    <input type="date" class="form-control" name="delivery_date"
                                                        value="{{ $order->delivery_date }}"
                                                        placeholder="Delivery Date"/>
                                                @endif

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Order Total</div>
                                            <div class="form-group">
                                                <select class="form-control" name="order_status" required>
                                                    <option value="" disabled selected>
                                                        -- Select Order Status --
                                                    </option>
                                                    <option value="Pending" @selected($order->order_status == 'Pending')>Pending</option>
                                                    <option value="Processing" @selected($order->order_status == 'Processing')>Processing
                                                    </option>
                                                    <option value="Complete" @selected($order->order_status == 'Complete')>Complete</option>
                                                    <option value="Cancel" @selected($order->order_status == 'Cancel')>Cancel</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="buttons">
                                        <button type="submit" class="btn btn-lg btn-info col-md-12">Save</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
