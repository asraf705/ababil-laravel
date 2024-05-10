@extends('admin.master')

@section('title')
    Product
@endsection

@section('products')
    active
@endsection

@section('themes')
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
                            <h4>Manage Theme</h4>
                            <div class="card-header-action">
                                <a href="{{ route('products.create') }}" class="btn btn-info">
                                    <i class="fa fa-plus"></i> Add Theme</a>
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
                                            <th>Sl</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Auther</th>
                                            <th>Code</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Create Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($products as $product)
                                            <tr>

                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $product->title }}</td>
                                                <td><a
                                                        href="{{ route('category.wise.product', ['categoryId' => $product->category_id]) }}">
                                                        {{ $product->category->name }} </a></td>
                                                <td>
                                                    @if ($product->auther_id == 0)
                                                        Admin
                                                    @else
                                                        {{ $product->auther_id }}
                                                    @endif
                                                </td>
                                                <td>{{ $product->code }}</td>
                                                <td>
                                                    @if ($product->template_selling_price == 0)
                                                        Free
                                                    @else
                                                        {{ number_format($product->template_selling_price, 2) }}<sup>$</sup>
                                                        {{-- {{ $product->template_selling_price }} --}}
                                                    @endif
                                                </td>
                                                <td>
                                                    <img src="{{ asset($product->image) }}"
                                                        alt="{{ $product->category->name }}"
                                                        style="height: 50px; width: 50px;">
                                                </td>
                                                </td>
                                                <td>{{ date('j M Y', strtotime($product->updated_at)) }}</td>
                                                <td>
                                                    @if ($product->status == 1)
                                                        <a href="{{ route('products.status', $product->id) }}"
                                                            class="btn btn-success"><i class="fa fa-eye"></i>
                                                            Publish</a>
                                                    @else
                                                        <a href="{{ route('products.status', $product->id) }}"
                                                            class="btn btn-warning"><i class="fa fa-eye-slash"></i>
                                                            Unpublish</a>
                                                    @endif


                                                </td>
                                                <td class="justify-content-center d-flex">

                                                    <a href="{{ route('products.show', $product->id) }}"
                                                        class="btn btn-dark" style="margin-right: 10px;"><i
                                                            class="fa fa-info-circle"></i>
                                                        Details</a>


                                                    <a href="{{ route('products.edit', $product->id) }}"
                                                        class="btn btn-primary" style="margin-right: 10px;">
                                                        <i class="fa fa-edit"></i></a>

                                                    <form action="{{ route('products.destroy', $product->id) }}"
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
