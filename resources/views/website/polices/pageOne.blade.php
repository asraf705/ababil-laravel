@extends('website.master')

@section('title')
    {{ $policy->one_name }}
@endsection

@section('policy')
    active
@endsection

@section('policy-One')
    active
@endsection

@section('body')
    <div class="shop_sidebar_area">
        <!-- ##### Single Widget ##### -->
        <div class="widget catagory mb-50">
            <!--  Catagories  -->
            @include('website.polices.policy-manu')

        </div>
    </div>


    <div class="amado_product_area section-padding-100">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2>{{ $policy->one_name }}</h2>
                            <hr>
                        </div>
                        <!-- body code -->
                        {!! $policy->one_policy !!}
                        <!-- body code -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
