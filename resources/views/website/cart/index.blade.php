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
                <div class="col-md-12 col-lg-12">
                    <div class="cart-title mt-50">
                        <h2>Shopping Cart</h2>
                    </div>

                    <div class="cart-table clearfix">
                        <table class="table table-responsive text-center">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($carts as $cart)
                                    <tr>

                                        <td class="cart_product_img">
                                            <a href="#"><img src="{{ asset($cart->options->image) }}"
                                                    alt="Product"></a>
                                        </td>

                                        <td class="cart_product_desc">
                                            <h5>{{ $cart->name }}</h5>
                                        </td>

                                        <td class="qty" style="text-align: center;">
                                            <div class="qty-btn d-flex">
                                                <p>Qty</p>
                                                <div class="quantity">
                                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="3" name="quantity" value="1">
                                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="price">
                                            <span>{{  number_format($cart->price, 2) }}<sup>$</sup></span>
                                        </td>
                                        <td class="delete">
                                            <span>
                                                <form action="{{ route('carts.destroy', $cart->rowId) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn"><i
                                                            class="fa fa-close"></i></button>
                                                </form>
                                            </span>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-summary">
                        <h5>Cart Total</h5>
                        <ul class="summary-table">
                            <li><span>subtotal:</span> <span>{{ Cart::subtotal() }}<sup>$</sup></span></li>
                            <li><span>discount:</span> <span>5%</span></li>
                            <li><span>total:</span> <span>$140.00</span></li>
                        </ul>
                        <div class="cart-btn mt-100">
                            <a href="{{ route('checkout') }}" class="btn amado-btn w-100">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
