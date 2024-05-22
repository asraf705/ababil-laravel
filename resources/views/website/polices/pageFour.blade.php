@extends('website.master')

@section('title')
    Oder Info
@endsection

@section('customer')
    active
@endsection

@section('customerOder')
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
                            <h2>Oder Informetion</h2>
                            <hr>
                        </div>

                        <div class="cart-table clearfix col-md-12">
                            <table class="table text-center col-lg-12">
                                <thead>
                                    <tr style="background: #7c7b7b59">
                                        <th>Sl</th>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                        <th>Oder Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding-top: 5%">
                                            1
                                        </td>
                                        <td>
                                            <img src="{{ asset('/') }}upload/default-images/default-profile.jpg"
                                                alt="Image" style="height: 100px; width: 100px; border-radius: 10%;"
                                                id='image'>
                                        </td>
                                        <td style="padding-top: 5%;width: 40%;">
                                            khubul he khubul he khubul he
                                        </td>
                                        <td style="padding-top: 5%">
                                            4
                                        </td>
                                        <td style="padding-top: 5%">
                                            01101001
                                        </td>
                                        <td style="padding-top: 5%">
                                            31/05/2001
                                        </td>
                                        <td style="padding-top: 5%">
                                            pandding
                                        </td>
                                    </tr>
                                    <hr>
                                    <tr>
                                        <td style="padding-top: 5%">
                                            1
                                        </td>
                                        <td>
                                            <img src="{{ asset('/') }}upload/default-images/default-profile.jpg"
                                                alt="Image" style="height: 100px; width: 100px; border-radius: 10%;"
                                                id='image'>
                                        </td>
                                        <td style="padding-top: 5%;width: 40%;">
                                            khubul he khubul he khubul he
                                        </td>
                                        <td style="padding-top: 5%">
                                            4
                                        </td>
                                        <td style="padding-top: 5%">
                                            01101001
                                        </td>
                                        <td style="padding-top: 5%">
                                            31/05/2001
                                        </td>
                                        <td style="padding-top: 5%">
                                            pandding
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
