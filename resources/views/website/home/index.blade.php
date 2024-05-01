@extends('website.master')

@section('title')
    Home
@endsection

@section('home')
    active
@endsection

@section('body')
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">

            @foreach ($categories as $category)
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
            @endforeach

        </div>
    </div>

    @include('website.testimonial.slider-testimonial')
    @include('website.team.slider-team')
    @include('website.partner.partneres')
@endsection
