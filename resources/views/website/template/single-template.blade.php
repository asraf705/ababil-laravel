@extends('website.master')

@section('title')
    {{ $theme->name }}
@endsection

@section('template')
    active
@endsection

@section('body')
    @foreach ($currencys as $currency)
        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mt-50">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a
                                        href="{{ route('category.wise.template', $theme->category_id) }}">{{ $theme->category->name }}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $theme->name }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-7 col-lg-5">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="{{ asset($theme->image) }}">
                                            <img class="d-block w-100" src="{{ asset($theme->image) }}" alt="First slide">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="single_product_desc">
                            <form action="{{ route('carts.store') }}" method="post">
                                @csrf

                                <!-- hidden input start -->
                                <input type="hidden" name="id" value="{{ $theme->id }}" />
                                <input type="hidden" name="name" value="{{ $theme->name }}" />
                                <input type="hidden" name="code" value="{{ $theme->code }}" />
                                <input type="hidden" name="qty" value="1" />
                                <input type="hidden" name="price" value="{{ $theme->template_selling_price }}" />

                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <h4><b>{{ $theme->name }}</b></h4>
                                    <div class="line"></div>
                                    <p class="product-price">
                                        @if ($theme->template_discount_amount > 0)
                                            <h5 class="product-price">
                                                {{ number_format($theme->template_selling_price, 2) }}<sup>{{ $currency->currency_type }}</sup>
                                                <samp>
                                                    <strike> {{ $theme->template_regular_price }}</strike><sup>{{ $currency->currency_type }}</sup>
                                                </samp>
                                                @if ($theme->template_discount_type == 'fixed')
                                                    <sup class="text-danger">{{ $theme->template_discount_amount }}<sup>{{ $currency->currency_type }}</sup>
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
                                    <!-- Ratings & Review -->
                                    <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                        <div class="ratings">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>

                                    </div>
                                </div>

                                <div class="short_overview my-5">
                                    <p>
                                        {{ $theme->short_description }}
                                    </p>

                                </div>

                                <!-- Add to Cart Form -->
                                <div class="cart">
                                    <div class="mb-2 d-flex">
                                        <a href="{{ $theme->view_url }}" class="btn live-btn" style="margin-right: 10px;"
                                            target="_blank">
                                            Live View
                                        </a>
                                        @if ($theme->template_discount_type == 'free')
                                            <a href="{{ $theme->download_url }}" class="btn amado-btn"
                                                style="margin-right: 10px;">
                                                Download
                                            </a>
                                        @endif
                                        <button type="submit" class="btn dowld-btn">Add to cart</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-0">
                <div class="card-header">
                    <h4><b>Details</b></h4>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <div class="short_overview my-5">
                            {!! $theme->long_description !!}
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>


        @foreach ($prices as $price)
            @if ($price->product_id == $theme->id)
                <div class="container section-padding-100-0">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="container-fluid col-12 col-lg-12 col-md-12">
                                <h2 style="text-align:center">Pricing Tables</h2>
                                <div class="lines"></div>
                                <div class="col-md-12  text-center">
                                    <div class="columns col-sm-4" style="width: 350px">
                                        <ul class="price">
                                            <li class="header">Basic</li>

                                            <li style="font-size: 20px">
                                                {{ ' 0 to ' . $price->basic_page }} Pages
                                            </li>

                                            <li class="grey">
                                                @foreach ($price->basicTypes as $basicType)
                                                    <button type="button"
                                                        class="btn btn-outline-dark disabled">{{ $basicType->basic_type_id }}</button>
                                                @endforeach
                                            </li>

                                            <li style="font-size: 20px">
                                                {{ $price->basic_delivery }} Days
                                            </li>

                                            <li class="grey">
                                                @php
                                                    $totalBasicPrice =
                                                        $price->basic_selling_price + $theme->template_selling_price;
                                                @endphp
                                                {{ $totalBasicPrice }}<sup>{{ $currency->currency_type }}</sup>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="columns col-sm-4" style="width: 350px">
                                        <ul class="price">
                                            <li class="header" style="background-color:#CBA070">Pro</li>
                                            <li style="font-size: 20px">{{ ' 0 to ' . $price->pro_page }}
                                                Pages</li>
                                            <li class="grey">
                                                @foreach ($price->proTypes as $proType)
                                                    <button type="button"
                                                        class="btn btn-outline-dark disabled">{{ $proType->pro_type }}</button>
                                                @endforeach
                                            </li>
                                            <li style="font-size: 20px">{{ $price->pro_delivery }} Days
                                            </li>
                                            <li class="grey">

                                                {{ $price->pro_selling_price + $theme->template_selling_price }}<sup>{{ $currency->currency_type }}</sup>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="columns col-sm-4" style="width: 350px">
                                        <ul class="price">
                                            <li class="header">Premium</li>
                                            <li style="font-size: 20px">{{ ' 0 to ' . $price->pre_page }}
                                                Pages</li>
                                            <li class="grey">
                                                @foreach ($price->preTypes as $preType)
                                                    <button type="button"
                                                        class="btn btn-outline-dark disabled">{{ $preType->pre_type }}</button>
                                                @endforeach
                                            </li>
                                            <li style="font-size: 20px">{{ $price->pre_delivery }} Days
                                            </li>
                                            <li class="grey">
                                                @php
                                                    $totalPrePrice =
                                                        $price->pre_selling_price + $theme->template_selling_price;
                                                @endphp
                                                {{ $totalPrePrice }}<sup>{{ $currency->currency_type }}</sup>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @endforeach

    @include('website.testimonial.slider-testimonial')
@endsection
