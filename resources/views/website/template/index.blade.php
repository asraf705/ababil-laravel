@extends('website.master')

@section('title')
    Template
@endsection

@section('template')
    active
@endsection

@section('body')
    <div class="shop_sidebar_area">
        <!-- ##### Single Widget ##### -->
        <div class="widget catagory mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Catagories</h6>

            <!--  Catagories  -->
            <div class="catagories-menu">

                <ul class="@if (Request::route()->getName() == 'home') show @else hide @endif">
                    <li class="active"><a href=" ">All Theme</a></li>
                    @foreach ($categories as $category)
                        <li>
                            <a href="{{ route('category.wise.template', $category->id) }}">{{ $category->name }}</a>
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
                    <div class="product-topbar d-xl-flex align-items-end float-right justify-content-between">
                        <!-- Sorting -->
                        <div class="product-sorting d-flex">
                            <div class="sort-by-date d-flex align-items-center mr-15">
                                <p>Sort by</p>
                                <form action="#" method="get">
                                    <select name="select" id="sortBydate">
                                        <option value="value">All</option>
                                        <option value="value">Free</option>
                                        <option value="value">Premium</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                @foreach ($themes as $theme)
                    @foreach ($currencys as $currency)
                        <!-- Single Product Area -->
                        <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                            <div class="single-product-wrapper">

                                <a href="{{ route('single.template', ['name' => $theme->name]) }}">
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
                                        @if ($theme->template_discount_amount > 0)
                                            <p class="product-price">
                                                {{ number_format($theme->template_regular_price) }}<sup>{{ $currency->currency_type }}</sup>
                                                @if ($theme->template_discount_type == 'fixed')
                                                    <sup class="text-danger">${{ $theme->template_discount_amount }}
                                                        OFF</sup>
                                                @else
                                                    <sup class="text-danger">{{ $theme->template_discount_amount }}%
                                                        OFF</sup>
                                                @endif
                                            </p>
                                        @else
                                            <h4 class="text-success">FREE</h4>
                                        @endif
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
                    @endforeach
                @endforeach

            </div>

        </div>

        @include('website.testimonial.slider-testimonial')
        @include('website.team.slider-team')
    </div>
@endsection
