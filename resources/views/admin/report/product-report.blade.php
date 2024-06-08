@extends('admin.master')

@section('title')
    Product Report
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
                                <h4>Product Report</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">

                                    <table class="table table-striped table-hover" id="tableExport">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Sl</th>
                                                <th>Product Category</th>
                                                <th>Product Name</th>
                                                <th>Product Code</th>
                                                <th>Product Price</th>
                                                <th>Auther name</th>
                                                <th>Hit Count</th>
                                                <th></th>
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
                                                    <td>
                                                        @if ($product->auther_id == 0)
                                                            Admin
                                                        @else
                                                            {{ $product->auther_id }}
                                                        @endif

                                                    </td>
                                                    <td>{{ $product->hit_count }}</td>
                                                    <td>
                                                        <a title="Order Detail"
                                                            href="{{ route('products.show', $product->id) }}"
                                                            class="btn btn-dark" style="margin-right: 10px;"><i
                                                                class="fa fa-info-circle"></i>
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
    @endforeach
@endsection
