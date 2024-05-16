@extends('website.master')

@section('title')
    Register
@endsection

@section('userlogin')
    active
@endsection

@section('body')
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2 class="text-center">Register</h2>
                            <hr>
                        </div>

                        <form class="form-horizontal" action="{{ route('customer.register') }}" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" id="first_name" name="fname"
                                        placeholder="First Name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" id="last_name" name="lname"
                                        placeholder="Last Name">
                                </div>

                                <div class="col-12 mb-3">
                                    <input type="number" class="form-control" id="phone" placeholder="Phone Number"
                                        name="phone" required>
                                </div>

                                <div class="col-12 mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="Email"
                                        name="email" required>
                                </div>

                                <div class="col-12 mb-3">
                                    <input type="password" class="form-control" id="company" placeholder="Password"
                                        name="password" required>
                                </div>

                                <div class="cart-btn mt-15 col">
                                    <button type="submit" class="btn amado-btn w-100">Register</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-12 mb-3 mt-15">
                    <!-- <h6 class="widget-title mb-30">Catagories</h6> -->
                    <p>I have an Account <samp><a href="{{ route('userlogin') }}"
                                style="color: #fbb710; font: 16px sans-serif;"><b> Login
                                </b></a></samp></p>
                </div>

            </div>
        </div>
    </div>
@endsection
