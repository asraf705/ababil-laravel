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
                                        {{ $order->id }}
                                    </td>
                                  </tr>
                                  <tr>
                                    <th>
                                        <strong>Package</strong>
                                    </th>
                                    <td>
                                        {{ $order->id }}
                                    </td>
                                  </tr>
                                  <tr>
                                    <th>
                                        <strong>Package Price</strong>
                                    </th>
                                    <td>
                                        {{ $order->id }}
                                    </td>
                                  </tr>
                                  <tr>
                                    <th>
                                        <strong>Name</strong>
                                    </th>
                                    <td>
                                        {{ $order->id }}
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
