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
                                <thead>
                                  <tr>
                                    <th>Name</th>
                                    <th>Cost</th>
                                    <th>Profit</th>
                                    <th>Fun</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Car</td>
                                    <td>100</td>
                                    <td>200</td>
                                    <td>0</td>
                                  </tr>
                                  <tr>
                                    <td>Bike</td>
                                    <td>330</td>
                                    <td>240</td>
                                    <td>1</td>
                                  </tr>
                                  <tr>
                                    <td>Plane</td>
                                    <td>430</td>
                                    <td>540</td>
                                    <td>3</td>
                                  </tr>
                                  <tr>
                                    <td>Yacht</td>
                                    <td>100</td>
                                    <td>200</td>
                                    <td>0</td>
                                  </tr>
                                  <tr>
                                    <td>Segway</td>
                                    <td>330</td>
                                    <td>240</td>
                                    <td>1</td>
                                  </tr>
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <th>
                                      <strong>TOTAL</strong>
                                    </th>
                                    <th>1290</th>
                                    <th>1420</th>
                                    <th>5</th>
                                  </tr>
                                </tfoot>
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
