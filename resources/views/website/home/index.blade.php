@extends('website.master')

@section('title')
    Home
@endsection

@section('home')
    active
@endsection

@section('body')
    <div class="products-catagories-area clearfix">
        <div class="container-fluid clearfix">

            {{-- @foreach ($categories as $category)
                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="{{ route('category.wise.template', $category->id) }}">
                        <img src="{{ asset($category->image) }}" style="height: 550px;width:1000px" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <h4>{{ $category->name }}</h4>
                        </div>
                    </a>
                </div>
            @endforeach --}}

            <div class="row">

                @foreach ($categories as $item)
                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">

                        <div class="single-product-wrapper">
                            <a href="{{ route('category.wise.template', $item->id) }}">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="{{ asset($item->image) }}" style="height: 484px;" alt="">
                                </div>

                                <!-- Product Description -->
                                <div class="product-description d-flex align-items-center justify-content-between">
                                    <!-- Product Meta Data -->
                                    <div class="product-meta-data">
                                        <div class="line"></div>
                                        <h6>{{ $item->name }}</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>

    @include('website.testimonial.slider-testimonial')
    @include('website.team.slider-team')
    @include('website.partner.partneres')
@endsection
