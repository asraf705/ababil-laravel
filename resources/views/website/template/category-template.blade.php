@extends('website.master')

@section('title')
    {{ $category->name }}
@endsection

@section('template')
    active
@endsection

@section('body')

@foreach ($currencys as $currency)

    <div class="shop_sidebar_area">

        <!-- ##### Single Widget ##### -->
        <div class="widget catagory mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Catagories</h6>

            <!--  Catagories  -->
            <div class="catagories-menu">
                <ul class="@if (Request::route()->getName() == 'home') show @else hide @endif">
                    <li><a href="{{ route('template') }}">All Theme</a></li>
                    @foreach ($categories as $category)
                        <li class="{{ $category->id == $themes->first()->category_id ? 'active' : '' }}">
                            <a href="{{ route('category.wise.template', $category->id) }}">
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="amado_product_area section-padding-100">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                        <!-- Total Products -->
                        <div class="total-products">
                            <p>Showing 1-8 0f 25</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">

                @foreach ($themes as $theme)
                    @if ($theme->status == '1')
                        <!-- Single Product Area -->
                        <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                            <div class="single-product-wrapper">
                                <a href="{{ route('single.template', ['name' => $theme->name]) }}">
                                    <!-- Product Image -->
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="{{ asset($theme->image) }}" style="height: 484px;" alt="">
                                    </div>
                                </a>

                                <!-- Product Description -->
                                <div class="product-description d-flex align-items-center justify-content-between">
                                    <!-- Product Meta Data -->
                                    <div class="product-meta-data">
                                        <div class="line"></div>
                                        <p class="product-price">
                                            @if ($theme->template_discount_amount > 0)
                                                <h5 class="product-price">
                                                    {{ number_format($theme->template_selling_price) }}<sup>{{ $currency->currency_type }}</sup>
                                                    @if ($theme->template_discount_type == 'fixed')
                                                        <sup class="text-danger">${{ $theme->template_discount_amount }}
                                                            OFF</sup>
                                                    @else
                                                        <sup class="text-danger">{{ $theme->template_discount_amount }}%
                                                            OFF</sup>
                                                    @endif
                                                </h5>
                                            @else
                                                <h4 class="text-success">FREE</h4>
                                            @endif
                                        </p>
                                        <a href="{{ route('single.template', ['name' => $theme->name]) }}">
                                            <h6>{{ $theme->name }}</h6>
                                        </a>
                                    </div>
                                    <!-- Ratings & Cart -->
                                    <div class="ratings-cart text-right">
                                        <div class="ratings">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>

            @include('website.testimonial.slider-testimonial')
            @include('website.team.slider-team')
        </div>
    </div>
    @endforeach
@endsection
