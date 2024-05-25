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
                                                <input type="radio" class="btn-check" name="options-outlined"
                                                    id="basic" autocomplete="off" onchange="getPrice(this.value)"
                                                    checked>
                                                <label class="btn" for="basic">
                                                    {{ $price->basic_regular_price }}<sup>{{ $currency->currency_type }}</sup>
                                                    <sup class="text-danger">
                                                        {{ $price->basic_discount_amount }}<sup>{{ $price->basic_discount_type == 'fixed' ? $price->basic_discount . $currency->currency_type : $price->basic_discount . '%' }}</sup>
                                                        OFF
                                                    </sup>
                                                </label>

                                            </td>
                                            <td>
                                                <input type="radio" class="btn-check" name="options-outlined"
                                                    id="pro" autocomplete="off" onchange="getPrice(this.value)">
                                                <label class="btn " for="pro">
                                                    {{ $price->pro_regular_price }}<sup>{{ $currency->currency_type }}</sup>
                                                    <sup class="text-danger">
                                                        {{ $price->pro_discount_amount }}<sup>{{ $price->pro_discount_type == 'fixed' ? $price->pro_discount . $currency->currency_type : $price->pro_discount . '%' }}</sup>
                                                        OFF
                                                    </sup>
                                                </label>
                                            </td>
                                            <td>
                                                <input type="radio" class="btn-check" name="options-outlined"
                                                    id="pre" autocomplete="off" onchange="getPrice(this.value)">
                                                <label class="btn" for="pre">
                                                    {{ $price->pre_regular_price }}<sup>{{ $currency->currency_type }}</sup>
                                                    <sup class="text-danger">
                                                        {{ $price->pre_discount_amount }}<sup>{{ $price->pre_discount_type == 'fixed' ? $price->pre_discount . $currency->currency_type : $price->pre_discount . '%' }}</sup>
                                                        OFF
                                                    </sup>
                                                </label>
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
                                            @if (isset($customer->fname))
                                                <input type="text" class="form-control" id="first_name"
                                                    placeholder="First Name" name="fname" value="{{ $customer->fname }}"
                                                    readonly required>
                                            @else
                                                <input type="text" class="form-control" id="first_name"
                                                    placeholder="First Name" name="fname" required>
                                            @endif

                                        </div>
                                        <div class="col-md-6 mb-3">
                                            @if (isset($customer->lname))
                                                <input type="text" class="form-control" name="lname" id="last_name"
                                                    value="{{ $customer->lname }}" readonly placeholder="Last Name">
                                            @else
                                                <input type="text" class="form-control" name="lname" id="last_name"
                                                    placeholder="Last Name">
                                            @endif

                                        </div>
                                        <div class="col-12 mb-3">
                                            <input type="text" class="form-control" id="company"
                                                placeholder="Company Name">
                                        </div>

                                        <div class="col-12 mb-3">
                                            @if (isset($customer->phone))
                                                <input type="number" class="form-control" name="phone" id="phone"
                                                    value="{{ $customer->phone }}" readonly required placeholder="Mobile">
                                            @else
                                                <input type="number" class="form-control" name="phone " id="phone"
                                                    required placeholder="Mobile">
                                            @endif

                                        </div>

                                        <div class="col-12 mb-3">
                                            @if (isset($customer->email))
                                                <input type="email" class="form-control" name="email " id="email"
                                                    value="{{ $customer->email }}" readonly required placeholder="Email">
                                            @else
                                                <input type="email" class="form-control" name="email " id="email"
                                                    placeholder="Email">
                                            @endif

                                        </div>

                                        <div class="col-12 mb-3">
                                            @if (isset($customer->address))
                                                <input type="text" class="form-control mb-3" id="street_address"
                                                    name="address" placeholder="Address"
                                                    value="{{ $customer->address }}" readonly required>
                                            @else
                                                <input type="text" class="form-control mb-3" id="street_address"
                                                    name="address" placeholder="Address" required>
                                            @endif

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
                                        @if ()

                                        @endif
                                        <span>Package:</span>
                                        <input type="text" class="form-control" required readonly
                                            style="width: 75px;">
                                        <span>
                                            @php($shipping = 0)
                                            <input type="number" class="form-control" readonly style="width: 75px;">
                                        </span>
                                    </li>
                                    <li>
                                        <span>tax:</span> <span>{{ $currency->tex }}%</span>
                                    </li>
                                    <li>
                                        <span>total:</span>
                                        <span>{{ number_format((Cart::subtotal() + 0 +(Cart::subtotal() + 0) * ($currency->tex/100)), 2) }}<sup>{{ $currency->currency_type }}</sup></span>
                                        {{-- <span>{{ Cart::total() }}</span> --}}
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


    <script>
        $(document).ready(function() {
            $.ajax({
                type: "POST",
                url: "your-php-file.php",
                data: {
                    basic_regular_price: $("#basic_regular_price").val(),
                    pro_regular_price: $("#pro_regular_price").val(),
                    pre_regular_price: $("#pre_regular_price").val()
                },
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.basic_regular_price == data.basic_regular_price) {
                        $("#input_name").val("Basic");
                        $("#input_price").val(data.pro_selling_price);
                    } else if (data.pro_regular_price == data.pro_regular_price) {
                        $("#input_name").val("Pro");
                        $("#input_price").val(data.pro_selling_price);
                    } else if (data.pre_regular_price == data.pre_regular_price) {
                        $("#input_name").val("Pre");
                        $("#input_price").val(data.pre_selling_price);
                    }
                }
            });
        });
    </script>
@endsection
