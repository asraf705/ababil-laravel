@extends('admin.master')

@section('title')
    Product Price
@endsection

@section('products')
    active
@endsection

@section('themePrice')
    active
@endsection

@section('body')
    <!-- Main Content -->

    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Manage Theme Price</h4>
                            <div class="card-header-action">
                                <a href="{{ route('theme-price.create') }}" class="btn btn-info">
                                    <i class="fa fa-plus"></i> Add Theme Price</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                @if (session('Gmessage'))
                                    <p class="text-center text-success">{{ session('Gmessage') }}</p>
                                @else
                                    <p class="text-center text-danger">{{ session('Rmessage') }}</p>
                                @endif

                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Code</th>
                                            <th>Theme Price(Font-End)</th>
                                            <th>Basic Price</th>
                                            <th>Pro Price</th>
                                            <th>Premium Price</th>
                                            <th>Image</th>
                                            <th>Create Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($productPrices as $productPrice)
                                            <tr>

                                                <td>
                                                    <a href="{{ route('products.show', $productPrice->product->id) }}">
                                                        {{ $productPrice->product->title }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a
                                                        href="{{ route('category.wise.product', ['categoryId' => $productPrice->product->category_id]) }}">
                                                        {{ $productPrice->product->category->name }}
                                                    </a>
                                                </td>
                                                <td>{{ $productPrice->product->code }}</td>
                                                <td>{{ $productPrice->product->template_selling_price }}</td>
                                                <td>{{ $productPrice->basic_selling_price }}</td>
                                                <td>{{ $productPrice->pro_selling_price }}</td>
                                                <td>{{ $productPrice->pre_selling_price }}</td>
                                                <td>
                                                    <img src="{{ asset($productPrice->product->image) }}" alt="Image"
                                                        style="height: 50px; width: 50px;">
                                                </td>
                                                <td>{{ date('j M Y', strtotime($productPrice->updated_at)) }}</td>
                                                <td>
                                                    @if ($productPrice->status == 1)
                                                        <a href="{{ route('products.status', $productPrice->id) }}"
                                                            class="btn btn-success"><i class="fa fa-eye"></i>
                                                            Publish</a>
                                                    @else
                                                        <a href="{{ route('products.status', $productPrice->id) }}"
                                                            class="btn btn-warning"><i class="fa fa-eye-slash"></i>
                                                            Unpublish</a>
                                                    @endif


                                                </td>
                                                <td class="justify-content-center d-flex">

                                                    <a href="{{ route('products.show', $productPrice->product->id) }}"
                                                        class="btn btn-dark" style="margin-right: 10px;"><i
                                                            class="fa fa-info-circle"></i>
                                                        Details</a>


                                                    <a href="{{ route('products.edit', $productPrice->id) }}"
                                                        class="btn btn-primary" style="margin-right: 10px;">
                                                        <i class="fa fa-edit"></i></a>

                                                    <form action="{{ route('products.destroy', $productPrice->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger "
                                                            onclick="return confirm('Are you sure delete this!!')"><i
                                                                class="fa fa-trash"></i></button>
                                                    </form>

                                                    <!-- <a href="#" class="btn btn-dark"><i class="fa fa-info-circle"></i> Details</a> -->
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
