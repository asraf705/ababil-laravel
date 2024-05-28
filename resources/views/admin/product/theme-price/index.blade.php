@extends('admin.master')

@section('title')
    Product Price
@endsection

@section('products')
    active
@endsection

@section('themePrice')
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
                                <h4>Manage Theme Price</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('theme-price.edit', 1) }}" class="btn btn-info">
                                        <i class="fa fa-plus"></i> Edit Price</a>
                                </div>
                            </div>
                            <div class="card-body">

                                @foreach ($prices as $price)
                                    <div class="cart-table-area padding-10 col-md-12">
                                        <div class="container-fluid">
                                            <div class="row g-3">
                                                <div class="col-12 col-lg-12">
                                                    <h2 style="text-align:center">Pricing Tables</h2>
                                                    <div class="columns col-md-4">
                                                        <ul class="price">
                                                            <li class="header">Basic</li>

                                                            <li style="font-size: 20px">
                                                                {{ ' 0 to ' . $price->basic_page }} Pages
                                                            </li>

                                                            <li class="grey">
                                                                @foreach ($basicPrice as $basicType)
                                                                    {{ $basicType->basic_type_id }}<br>
                                                                @endforeach
                                                            </li>

                                                            <li style="font-size: 20px">
                                                                {{ $price->basic_delivery }} Days
                                                            </li>

                                                            <li class="grey">

                                                                @if ($price->basic_discount_amount > 0)
                                                                    Price:
                                                                    {{ $price->basic_selling_price }}<sup>{{ $currency->currency_type }}</sup>
                                                                    <samp>
                                                                        <strike>{{ $price->basic_regular_price }}<sup>{{ $currency->currency_type }}</sup></strike>
                                                                        <sup class="text-danger">
                                                                            {{ $price->basic_discount_amount }}<sup>{{ $price->basic_discount_type == 'fixed' ? $currency->currency_type . $price->basic_discount : $price->basic_discount . '%' }}</sup>
                                                                            OFF
                                                                        </sup>
                                                                    </samp>
                                                                @else
                                                                    Price:
                                                                    {{ $price->basic_selling_price }}<sup>{{ $currency->currency_type }}</sup>
                                                                @endif

                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="columns col-md-4">
                                                        <ul class="price">
                                                            <li class="header" style="background-color:#CBA070">Pro</li>
                                                            <li style="font-size: 20px">{{ ' 0 to ' . $price->pro_page }}
                                                                Pages</li>
                                                            <li class="grey">
                                                                @foreach ($price->proTypes as $proType)
                                                                    {{ $proType->pro_type }}<br>
                                                                @endforeach
                                                            </li>
                                                            <li style="font-size: 20px">{{ $price->pro_delivery }} Days
                                                            </li>
                                                            <li class="grey">

                                                                @if ($price->pro_discount_amount > 0)
                                                                    Price:
                                                                    {{ $price->pro_selling_price }}<sup>{{ $currency->currency_type }}</sup>
                                                                    <samp><strike>{{ $price->pro_regular_price }}<sup>{{ $currency->currency_type }}</sup></strike>
                                                                        <sup class="text-danger">
                                                                            {{ $price->pro_discount_amount }}<sup>{{ $price->pro_discount_type == 'fixed' ? $currency->currency_type . $price->pro_discount : $price->pro_discount . '%' }}</sup>
                                                                            OFF
                                                                        </sup>
                                                                    </samp>
                                                                @else
                                                                    Price:
                                                                    {{ $price->pro_selling_price }}<sup>{{ $currency->currency_type }}</sup>
                                                                @endif

                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="columns col-md-4">
                                                        <ul class="price">
                                                            <li class="header">Premium</li>
                                                            <li style="font-size: 20px">{{ ' 0 to ' . $price->pre_page }}
                                                                Pages</li>
                                                            <li class="grey">
                                                                @foreach ($price->preTypes as $preType)
                                                                    <button type="button"
                                                                        class="btn btn-outline-dark disabled">{{ $preType->pre_type }}</button>
                                                                @endforeach
                                                            </li>
                                                            <li style="font-size: 20px">{{ $price->pre_delivery }} Days
                                                            </li>
                                                            <li class="grey">
                                                                @if ($price->pre_discount_amount > 0)
                                                                    Price:
                                                                    {{ $price->pre_selling_price }}<sup>{{ $currency->currency_type }}</sup>
                                                                    <samp>
                                                                        <strike>{{ $price->pre_regular_price }}<sup>{{ $currency->currency_type }}</sup></strike>
                                                                        <sup class="text-danger">
                                                                            {{ $price->pre_discount_amount }}<sup>{{ $price->pre_discount_type == 'fixed' ? $currency->currency_type . $price->pre_discount : $price->pre_discount . '%' }}</sup>
                                                                            OFF
                                                                        </sup>
                                                                    </samp>
                                                                @else
                                                                    Price:
                                                                    {{ $price->pre_selling_price }}<sup>{{ $currency->currency_type }}</sup>
                                                                @endif
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
