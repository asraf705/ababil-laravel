@extends('website.master')

@section('title')
    Cart
@endsection

@section('actv-cart')
    active
@endsection

@section('body')
    @foreach ($currencys as $currency)
        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
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
                                                <img src="{{ asset($cart->options->image) }}" alt="Product">
                                            </td>

                                            <td class="cart_product_desc">
                                                <h5>{{ $cart->name }}</h5>
                                            </td>

                                            <td class="qty">
                                                <div class="qty-box">
                                                    <form action="{{ route('carts.update', $cart->rowId) }}" method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="input-group">
                                                            <input type="number" name="quantity" min="1"
                                                                class="form-control input-number"
                                                                value="{{ $cart->qty }}" style="margin-right: 2px;">
                                                            <input type="submit" class="btn btn-success btn-sm"
                                                                value="Update" />
                                                        </div>
                                                    </form>

                                                </div>
                                            </td>

                                            <td class="price">
                                                <span>{{ number_format($cart->price * $cart->qty, 2) }}<sup>{{ $currency->currency_type }}</sup></span>
                                            </td>
                                            <td class="delete">
                                                <span>
                                                    <form action="{{ route('carts.destroy', $cart->rowId) }}"
                                                        method="post">
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

                            <table class="table  text-center">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Basic</th>
                                        <th>Pro</th>
                                        <th>Premium</th>
                                    </tr>
                                </thead>
                                @foreach ($prices as $price)
                                    <tbody>
                                        <tr>
                                            <td>Page</td>
                                            <td>{{ ' 0 to ' . $price->basic_page }}</td>
                                            <td>{{ ' 0 to ' . $price->pro_page }}</td>
                                            <td>{{ ' 0 to ' . $price->pre_page }}</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td>Our Offer</td>
                                            <td>
                                                <ul>
                                                @foreach ($price->basicTypes as $basicType)
                                                    <li>{{ $basicType->basic_type_id }}</li>
                                                @endforeach
                                                </ul>
                                            </td>
                                            <td>
                                                <ul>
                                                @foreach ($price->proTypes as $proType)
                                                    <li>{{ $proType->pro_type }}</li>
                                                @endforeach
                                                </ul>
                                            </td>
                                            <td>
                                                <ul>
                                                @foreach ($price->preTypes as $preType)
                                                    <li>{{ $preType->pre_type }}</li>
                                                @endforeach
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td>Delivery</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <td>Price</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>btn</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 card-header-action">
                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                                <li> <span> subtotal:</span>
                                    <span>{{ Cart::subtotal() }}<sup>{{ $currency->currency_type }}</sup></span>
                                </li>
                                {{-- <li hidden> <span>  discount:</span> <span>{{ $currency->tex }}%</span></li> --}}
                                <li> <span> tex: </span> <span>{{ $currency->tex }}%</span></li>
                                <li> <span> total: </span>
                                    <span>{{ Cart::total() }}<sup>{{ $currency->currency_type }}</sup></span>
                                </li>
                            </ul>
                            <div class="cart-btn mt-100">
                                <a href="{{ route('checkout') }}" class="btn amado-btn w-100">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
