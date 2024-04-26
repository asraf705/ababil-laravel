@extends('website.master')

@section('title')
    Template
@endsection

@section('template')
    active
@endsection

@section('body')
    <div class="single-product-area section-padding-100 clearfix">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-50">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Template Name</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-7 col-lg-4">
                    <div class="single_product_thumb">
                        <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a class="gallery_img"
                                        href="{{ asset('/') }}website/assets/img/product-img/pro-big-1.jpg">
                                        <img class="d-block w-100"
                                            src="{{ asset('/') }}website/assets/img/product-img/pro-big-1.jpg"
                                            alt="First slide">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="single_product_desc">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <h4><b>White Modern Chair</b></h4>
                            <div class="line"></div>
                            <p class="product-price">$180</p>
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
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et eum rerum culpa amet eius
                                harum ab porro, neque blanditiis natus quia repellendus id itaque expedita non
                                aspernatur quidem, molestias eligendi!</p>

                        </div>

                        <!-- Add to Cart Form -->
                        <div class="cart">
                            <div class="mb-2 d-flex">
                                <a href="" class="btn live-btn" style="margin-right: 10px;" target="_blank">Live View</a>
                                <a href="cart.html" class="btn amado-btn">Add to cart</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-5">
            <div class="card-header">
                <h4><b>Details</b></h4>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <div class="short_overview my-5">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et eum rerum culpa amet eius
                            harum ab porro, neque blanditiis natus quia repellendus id itaque expedita non
                            aspernatur quidem, molestias eligendi!</p>
                    </div>
                    <footer class="blockquote-footer">All Informetion Can be change.</footer>
                </blockquote>
            </div>
        </div>

    </div>

    @include('website.testimonial.slider-testimonial')
@endsection
