@extends('website.master')

@section('title')
    Price
@endsection

@section('price')
    active
@endsection

@section('body')
    @foreach ($currencys as $currency)
        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row g-3">
                    <div class="col-12 col-lg-12">
                        <h2 style="text-align:center">Pricing Tables</h2>
                        <p style="text-align:center">Resize the browser window to see the effect.</p>
                        <div class="columns">
                            <ul class="price">
                                <li class="header" style="background-color:#CBA070">Info</li>
                                <li class="grey">Page</li>
                                <li>Our offer</li>
                                <li class="grey">Delivery</li>
                                <li>Price</li>
                            </ul>
                        </div>

                        @foreach ($prices as $price)
                            <div class="columns">
                                <ul class="price">
                                    <li class="header">Basic</li>
                                    <li class="grey">{{ ' 0 to ' . $price->basic_page }}</li>
                                    <li>
                                        @foreach ($price->basicTypes as $basicType)
                                            <button type="button"
                                                class="btn btn-outline-dark disabled">{{ $basicType->basic_type_id }}</button>
                                        @endforeach
                                    </li>
                                    <li class="grey">{{ $price->basic_delivery }} Days</li>
                                    <li>
                                        {{ $price->basic_regular_price }}<sup>{{ $currency->currency_type }}</sup>
                                        <sup class="text-danger">
                                            {{ $price->basic_discount_amount }}<sup>{{ $price->basic_discount_type == 'fixed' ? $price->basic_discount . $currency->currency_type : $price->basic_discount . '%' }}</sup>
                                            OFF
                                        </sup>
                                    </li>
                                    <li class="grey"><a href="#" class="button">Sign Up</a></li>
                                </ul>
                            </div>

                            <div class="columns">
                                <ul class="price">
                                    <li class="header" style="background-color:#CBA070">Pro</li>
                                    <li class="grey">{{ ' 0 to ' . $price->pro_page }}</li>
                                    <li>
                                        @foreach ($price->proTypes as $proType)
                                            <button type="button"
                                                class="btn btn-outline-dark disabled">{{ $proType->pro_type }}</button>
                                        @endforeach
                                    </li>
                                    <li class="grey">{{ $price->pro_delivery }} Days</li>
                                    <li>
                                        {{ $price->pro_regular_price }}<sup>{{ $currency->currency_type }}</sup>
                                        <sup class="text-danger">
                                            {{ $price->pro_discount_amount }}<sup>{{ $price->pro_discount_type == 'fixed' ? $price->pro_discount . $currency->currency_type : $price->pro_discount . '%' }}</sup>
                                            OFF
                                        </sup>
                                    </li>
                                    <li class="grey"><a href="#" class="button">Sign Up</a></li>
                                </ul>
                            </div>

                            <div class="columns">
                                <ul class="price">
                                    <li class="header">Premium</li>
                                    <li class="grey">{{ ' 0 to ' . $price->pre_page }}</li>
                                    <li>
                                        @foreach ($price->preTypes as $preType)
                                            <button type="button"
                                                class="btn btn-outline-dark disabled">{{ $preType->pre_type }}</button>
                                        @endforeach
                                    </li>
                                    <li class="grey">{{ $price->pre_delivery }} Days</li>
                                    <li>
                                        {{ $price->pre_regular_price }}<sup>{{ $currency->currency_type }}</sup>
                                        <sup class="text-danger">
                                            {{ $price->pre_discount_amount }}<sup>{{ $price->pre_discount_type == 'fixed' ? $price->pre_discount . $currency->currency_type : $price->pre_discount . '%' }}</sup>
                                            OFF
                                        </sup>
                                    </li>
                                    <li class="grey"><a href="#" class="button">Sign Up</a></li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
