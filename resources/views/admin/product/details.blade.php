@extends('admin.master')

@section('title')
    product
@endsection

@section('products')
    active
@endsection

@section('theme')
    active
@endsection

@section('body')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Theme Details</h4>
                            <div class="card-header-action d-flex">

                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary"
                                    style="margin-right: 10px;">
                                    <i class="fas fa-edit"></i></a>

                                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger "
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
                                                    <li class="breadcrumb-item"><a href="{{ route('products.index') }}"><i
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

                                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                        class="active"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <a class="gallery_img" href="{{ asset($product->image) }}">
                                                            <img src="{{ asset($product->image) }}" class="d-block w-100">
                                                        </a>
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
                                                            ${{ $product->template_selling_price }}
                                                            <samp>
                                                                <strike> ${{ $product->template_regular_price }}</strike>
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
                                                <div class="cart">
                                                    <div class="mb-2 d-flex">
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

                                <div class="card">
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

                            @foreach ($prices as $price)
                                @if ($price->product_id == $product->id)
                                    <div class="cart-table-area col-md-12">
                                        <div class="container-fluid">
                                            <div class="row g-3">
                                                <div class="col-12 col-lg-12">
                                                    <h2 style="text-align:center">Pricing Tables</h2>
                                                    <div class="columns col-md-4">
                                                        <ul class="price">
                                                            <li class="header">Basic</li>
                                                            <li style="font-size: 20px">{{ $price->basic_page }} Pages</li>
                                                            <li class="grey">
                                                                @foreach ($price->basicTypes as $basicType)
                                                                    {{ $basicType->basic_type_id }}<br>
                                                                @endforeach
                                                            </li>
                                                            <li style="font-size: 20px">{{ $price->basic_delivery }} Days
                                                            </li>
                                                            <li class="grey">
                                                                @php
                                                                    $totalBasicPrice =
                                                                        $price->basic_selling_price +
                                                                        $product->template_selling_price;
                                                                @endphp
                                                                ${{ $totalBasicPrice }}
                                                            </li>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="columns col-md-4">
                                                        <ul class="price">
                                                            <li class="header" style="background-color:#CBA070">Pro</li>
                                                            <li>25GB Storage</li>
                                                            <li class="grey">25 Emails</li>
                                                            <li>25 Domains</li>
                                                            <li class="grey">2GB Bandwidth</li>
                                                            <li>$ 24.99</li>
                                                            <li class="grey"><a href="#" class="button">Sign Up</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="columns col-md-4">
                                                        <ul class="price">
                                                            <li class="header">Premium</li>
                                                            <li>50GB Storage</li>
                                                            <li class="grey">50 Emails</li>
                                                            <li>50 Domains</li>
                                                            <li class="grey">5GB Bandwidth</li>
                                                            <li>$ 49.99</li>
                                                            <li class="grey"><a href="#" class="button">Sign
                                                                    Up</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
