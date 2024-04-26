@extends('website.master')

@section('title')
    About
@endsection

@section('about')
    active
@endsection

@section('body')
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="{{ route('template') }}">
                    <img src="{{ asset('/') }}website/assets/img/bg-img/1.jpg" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <h4>Category</h4>
                    </div>
                </a>
            </div>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="{{ route('template') }}">
                    <img src="{{ asset('/') }}website/assets/img/bg-img/2.jpg" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <h4>Category</h4>
                    </div>
                </a>
            </div>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="{{ route('template') }}">
                    <img src="{{ asset('/') }}website/assets/img/bg-img/3.jpg" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <h4>Category</h4>
                    </div>
                </a>
            </div>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="{{ route('template') }}">
                    <img src="{{ asset('/') }}website/assets/img/bg-img/4.jpg" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <h4>Category</h4>
                    </div>
                </a>
            </div>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="{{ route('template') }}">
                    <img src="{{ asset('/') }}website/assets/img/bg-img/5.jpg" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <h4>Category</h4>
                    </div>
                </a>
            </div>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="{{ route('template') }}">
                    <img src="{{ asset('/') }}website/assets/img/bg-img/6.jpg" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <h4>Category</h4>
                    </div>
                </a>
            </div>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="{{ route('template') }}">
                    <img src="{{ asset('/') }}website/assets/img/bg-img/7.jpg" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <h4>Category</h4>
                    </div>
                </a>
            </div>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="{{ route('template') }}">
                    <img src="{{ asset('/') }}website/assets/img/bg-img/8.jpg" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <h4>Category</h4>
                    </div>
                </a>
            </div>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="{{ route('template') }}">
                    <img src="{{ asset('/') }}website/assets/img/bg-img/9.jpg" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <h4>Category</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>

    @include('website.testimonial.slider-testimonial')

    @include('website.team.slider-team')

@endsection
