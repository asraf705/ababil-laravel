@extends('admin.master')

@section('title')
    Selles Report
@endsection

@section('allReport')
    active
@endsection

@section('productReport')
    active
@endsection

@section('body')
    @foreach ($currencys as $currency)
        <!-- Main Content -->
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Selles Report</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">

                                    <table class="table table-striped table-hover" id="tableExport">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Sl</th>
                                                <th>Category</th>
                                                <th>Name</th>
                                                <th>Code</th>
                                                <th>Price</th>
                                                <th>Selles Count</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">

                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $product->category->name }}</td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{ $product->code }}</td>
                                                    <td>
                                                        @if ($product->template_selling_price == 0)
                                                            Free
                                                        @else
                                                            {{ $product->template_selling_price }}<sup>{{ $currency->currency_type }}</sup>
                                                        @endif
                                                    </td>
                                                    <td>{{ $product->sales_count }}</td>
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
    @endforeach
@endsection
