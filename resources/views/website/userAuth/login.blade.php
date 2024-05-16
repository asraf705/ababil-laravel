@extends('website.master')

@section('title')
    Login
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
                            <h2 class="text-center">Login</h2>
                            <hr>
                        </div>

                        <form action="" method="post">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="Phone Number or Email">
                                </div>

                                <div class="col-12 mb-3">
                                    <input type="password" class="form-control" id="company" placeholder="Password"
                                        >
                                </div>

                                <div class="cart-btn mt-15 col-12">
                                    <button href="#" class="btn amado-btn w-100">Login</button>
                                </div>
                            </div>
                        </form>
                        <div class="col-12 mb-3 mb-4">
                            <!-- <h6 class="widget-title mb-30">Catagories</h6> -->
                            <p>Cteate an Account <samp style="font: 3em sans-serif;"><a href="{{route('customer.register')}}"
                                        style="color: #22cc9d;"><b> Register </b></a></samp></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
