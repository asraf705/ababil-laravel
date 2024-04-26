@extends('website.master')

@section('title')
    Cart
@endsection

@section('actv-cart')
    active
@endsection

@section('body')
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="cart-title mt-50">
                        <h2>Shopping Cart</h2>
                    </div>

                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Package</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cart_product_img">
                                        <a href="#"><img src="{{asset('/')}}website/assets/img/bg-img/cart1.jpg" alt="Product"></a>
                                    </td>
                                    <td class="cart_product_desc">
                                        <h5>White Modern Chair</h5>
                                    </td>
                                    <td class="package">
                                        <samp> <b> Base </b></samp>
                                    </td>
                                    <td class="price">
                                        <span>$130</span>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-summary">
                        <h5>Cart Total</h5>
                        <ul class="summary-table">
                            <li><span>subtotal:</span> <span>$140.00</span></li>
                            <li><span>discount:</span> <span>5%</span></li>
                            <li><span>total:</span> <span>$140.00</span></li>
                        </ul>
                        <div class="cart-btn mt-100">
                            <a href="{{route('checkout')}}" class="btn amado-btn w-100">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
