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
                            @foreach ($products as $item)
                                <h4>{{ $item->category->name }}</h4>
                            @endforeach

                        </div>

                        <div class="card-body">

                            <div class="single-product-area section-padding-100 clearfix">
                                <div class="container-fluid">

                                    <div class="row">
                                        <div class="col-12">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb mt-50">
                                                    <li class="breadcrumb-item">
                                                        <a href="{{ route('products.index') }}"><i
                                                                class="fas fa-tachometer-alt"></i>Home</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        @foreach ($products as $item)
                                                            {{ $item->category->name }}
                                                        @endforeach
                                                    </li>
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>

                                    <!-- cartegory wise all products -->
                                    <div class="row row-cols-1 row-cols-md-6 g-3">
                                        @foreach ($products as $product)
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <a href="{{ route('products.show', $product->id) }}">
                                                        <img class="card-img-top" src="{{ asset($product->image) }}"
                                                            alt="Card image cap" style="height: 380px;">
                                                    </a>
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $product->title }}</h5>
                                                        <h6 class="d-flex">
                                                            <i class="fas fa-user" style="margin-right: 10px;">
                                                                <samp>
                                                                    @if ($product->auther_id == 0)
                                                                        <b>Admin</b>
                                                                    @else
                                                                        {{ $product->auther_id }}
                                                                    @endif
                                                                </samp>
                                                            </i>
                                                            <i class="fas fa-barcode" style="margin-right: 10px;">
                                                                <samp> {{ $product->code }}</samp>
                                                            </i>
                                                            <i class="far fa-file">
                                                                <samp>
                                                                    @if ($product->web_page <= 1)
                                                                        <b> {{ $product->web_page }} Page</b>
                                                                    @else
                                                                        <b> {{ $product->web_page }} Pages</b>
                                                                    @endif
                                                                </samp>
                                                            </i>
                                                        </h6>
                                                        <div>
                                                            <h6 class="d-flex">Price:{{ $product->template_selling_price }}</h6>

                                                            <a href="{{ route('products.show', $product->id) }}"
                                                                class="btn btn-outline-success float-right"><i
                                                                    class="fa fa-info-circle"></i>
                                                                Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
