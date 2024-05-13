@extends('admin.master')

@section('title')
    Product Detail
@endsection

@section('products')
    active
@endsection

@section('theme')
    active
@endsection

@section('body')
    @foreach ($currencys as $currency)
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Theme Details</h4>
                                <div class="card-header-action d-flex">

                                    <form action="{{ route('delete.product-and-price', ['id' => $product->id]) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger " title="Delete"
                                            onclick="return confirm('Are you sure delete this!!')"><i
                                                class="fa fa-trash"></i></button>
                                    </form>

                                </div>
                            </div>

                            <div class="card-body">

                                <div class="single-product-area section-padding-100 clearfix">
                                    <div class="container-fluid">

                                        <div class="row">
                                            <div class="col-12">
                                                <nav aria-label="breadcrumb">
                                                    <ol class="breadcrumb mt-50">
                                                        <li class="breadcrumb-item"><a
                                                                href="{{ route('products.index') }}"><i
                                                                    class="fas fa-tachometer-alt"></i>Home</a></li>
                                                        <li class="breadcrumb-item"><a
                                                                href="{{ route('category.wise.product', ['categoryId' => $product->category_id]) }}"><i
                                                                    class="far fa-file"></i>{{ $product->category->name }}</a>
                                                        </li>
                                                        <li class="breadcrumb-item">{{ $product->title }}</li>
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-7 col-lg-4">

                                                <div class="single_product_thumb">
                                                    <div id="product_details_slider" class="carousel slide"
                                                        data-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <a class="gallery_img" href="{{ asset($product->image) }}">
                                                                    <img class="d-block w-100"
                                                                        src="{{ asset($product->image) }}"
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
                                                        <h4><b>{{ $product->title }}</b></h4>
                                                        <h6>Auther Name: <b>
                                                                @if ($product->auther_id == 0)
                                                                    Admin
                                                                @else
                                                                    {{ $product->auther_id }}
                                                                @endif
                                                            </b></h6>
                                                        <h6>Template Code:<b> {{ $product->code }}</b></h6>
                                                        <div class="line"></div>
                                                        @if ($product->template_discount_amount > 0)
                                                            <h5 class="product-price">
                                                                {{ $product->template_selling_price }}<sup>{{ $currency->currency_type }}</sup>
                                                                <samp>
                                                                    <strike>{{ $product->template_regular_price }}</strike><sup>{{ $currency->currency_type }}</sup>
                                                                </samp>
                                                                @if ($product->template_discount_type == 'fixed')
                                                                    <sup class="text-danger">{{ $product->template_discount_amount }}$
                                                                        OFF</sup>
                                                                @else
                                                                    <sup class="text-danger">{{ $product->template_discount_amount }}%
                                                                        OFF</sup>
                                                                @endif
                                                            </h5>
                                                        @else
                                                            <h4 class="text-success">FREE</h4>
                                                        @endif

                                                    </div>

                                                    <div class="short_overview my-5">
                                                        {!! $product->short_description !!}

                                                    </div>

                                                    <!-- Add to view Form -->
                                                    <div class="cart mt-5">
                                                        <div class="mb-2 padding-100 d-flex">
                                                            <a href="{{ $product->view_url }}" class="btn btn-info"
                                                                style="margin-right: 10px;" target="_blank">Live View</a>
                                                            <a href="{{ $product->download_url }}" class="btn btn-success"
                                                                style="margin-right: 10px;" target="_blank">Download</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mt-3">
                                        <div class="card-header">
                                            <h4><b>Details</b></h4>
                                        </div>
                                        <div class="card-body">
                                            <blockquote class="blockquote mb-0">
                                                <div class="short_overview my-5">
                                                    {!! $product->long_description !!}
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
