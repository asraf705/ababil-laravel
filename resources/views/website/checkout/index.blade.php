@extends('website.master')

@section('title')
    Checkout
@endsection

@section('body')
    <style>
        input[type="radio"].btn-check {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        input[type="radio"].btn-check+label.btn {
            padding-left: 10px;
            cursor: pointer;
        }

        input[type="radio"].btn-check:checked+label.btn {
            color: black;
            background: #22cc9d;
        }

        input[type="radio"].btn-check:not(:checked)+label.btn {
            color: #666;
        }
    </style>





    @foreach ($prices as $price)
        @foreach ($currencys as $currency)
            <div class="cart-table-area section-padding-100">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-12 col-lg-10">

                            <!-- price tabele -->
                            <div class="cart-title">
                                <h2>Our Package</h2>
                            </div>
                            <div class="cart-table clearfix">
                                <table class="table table-responsive text-center">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Basic</th>
                                            <th>Pro</th>
                                            <th>Premium</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Page
                                            </td>
                                            <td>
                                                {{ ' 0 to ' . $price->basic_page }} Pages
                                            </td>
                                            <td>
                                                {{ ' 0 to ' . $price->pro_page }} Pages
                                            </td>
                                            <td>
                                                {{ ' 0 to ' . $price->pre_page }} Pages
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Our offer
                                            </td>
                                            <td>
                                                @foreach ($price->basicTypes as $basicType)
                                                    <button type="button"
                                                        class="btn btn-outline-dark disabled">{{ $basicType->basic_type_id }}</button>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($price->proTypes as $proType)
                                                    <button type="button"
                                                        class="btn btn-outline-dark disabled">{{ $proType->pro_type }}</button>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($price->preTypes as $preType)
                                                    <button type="button"
                                                        class="btn btn-outline-dark disabled">{{ $preType->pre_type }}</button>
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Delivery
                                            </td>
                                            <td>
                                                {{ $price->basic_delivery }} Days
                                            </td>
                                            <td>
                                                {{ $price->pro_delivery }} Days
                                            </td>
                                            <td>
                                                {{ $price->pre_delivery }} Days
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Price
                                            </td>
                                            <td>
                                                {{ $price->basic_regular_price }}<sup>{{ $currency->currency_type }}</sup>
                                                <sup class="text-danger">
                                                    {{ $price->basic_discount_amount }}<sup>{{ $price->basic_discount_type == 'fixed' ? $price->basic_discount . $currency->currency_type : $price->basic_discount . '%' }}</sup>
                                                    OFF
                                                </sup>
                                            </td>
                                            <td>
                                                {{ $price->pro_regular_price }}<sup>{{ $currency->currency_type }}</sup>
                                                <sup class="text-danger">
                                                    {{ $price->pro_discount_amount }}<sup>{{ $price->pro_discount_type == 'fixed' ? $price->pro_discount . $currency->currency_type : $price->pro_discount . '%' }}</sup>
                                                    OFF
                                                </sup>
                                            </td>
                                            <td>
                                                {{ $price->pre_regular_price }}<sup>{{ $currency->currency_type }}</sup>
                                                <sup class="text-danger">
                                                    {{ $price->pre_discount_amount }}<sup>{{ $price->pre_discount_type == 'fixed' ? $price->pre_discount . $currency->currency_type : $price->pre_discount . '%' }}</sup>
                                                    OFF
                                                </sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

                                            </td>
                                            <td>
                                                <input type="radio" class="btn-check" name="options-outlined"
                                                    id="basic" autocomplete="off" checked>
                                                <label class="btn" for="basic">Basic</label>
                                            </td>
                                            <td>
                                                <input type="radio" class="btn-check" name="options-outlined"
                                                    id="pro" autocomplete="off">
                                                <label class="btn " for="pro">Pro</label>
                                            </td>
                                            <td>
                                                <input type="radio" class="btn-check" name="options-outlined"
                                                    id="pre" autocomplete="off">
                                                <label class="btn" for="pre">Pre</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="checkout_details_area mt-50 clearfix">

                                <!-- checkout body -->

                                <div class="cart-title">
                                    <h2>Checkout</h2>
                                </div>
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control" id="first_name"
                                                placeholder="First Name" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control" id="last_name"
                                                placeholder="Last Name">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <input type="text" class="form-control" id="company"
                                                placeholder="Company Name">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <input type="email" class="form-control" id="email" placeholder="Email">
                                        </div>

                                        <div class="col-12 mb-3">
                                            <input type="text" class="form-control mb-3" id="street_address"
                                                placeholder="Address" required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <input type="text" class="form-control" id="city" placeholder="Town"
                                                required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control" id="zipCode" placeholder="Zip Code"
                                                required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="number" class="form-control" id="phone_number" min="0"
                                                placeholder="Phone" required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <textarea name="comment" class="form-control w-100" id="comment" cols="30" rows="10"
                                                placeholder="Leave a comment about your order" required></textarea>
                                        </div>

                                        <div class="col-12">
                                            <div class="custom-control custom-checkbox d-block mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2"
                                                    checked>
                                                <label class="custom-control-label" for="customCheck2">Create an
                                                    accout</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="cart-summary">
                                <h5>Cart Total</h5>
                                <ul class="summary-table">
                                    <li><span>subtotal:</span>
                                        <span>{{ Cart::subtotal() }}<sup>{{ $currency->currency_type }}</sup>
                                    </li>
                                    <li>
                                        <span>Package:</span><input type="text" class="form-control" required readonly
                                            style="width: 75px;"><span><input type="number" class="form-control"
                                                readonly style="width: 75px;"></span>
                                    </li>
                                    <li>
                                        <span>tax:</span> <span>{{ $currency->tex }}%</span>
                                    </li>
                                    <li>
                                        <span>total:</span> <span>$140.00</span>
                                    </li>
                                </ul>
                                <div class="payment-method">
                                    <!-- Paypal -->
                                    <div class="custom-control custom-radio mr-sm-2">
                                        <input type="radio" class="custom-control-input" id="paypal" checked>
                                        <label class="custom-control-label" for="paypal">Online Payment<img
                                                class="ml-15"
                                                src="{{ asset('/') }}website/assets/img/core-img/paypal.png"
                                                alt=""></label>
                                    </div>
                                </div>
                                <div class="cart-btn mt-100">
                                    <a href="#" class="btn amado-btn w-100">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach
@endsection
