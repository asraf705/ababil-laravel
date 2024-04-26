@extends('admin.master')

@section('title')
    Product Type
@endsection

@section('module')
    active
@endsection

@section('product-type')
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
                            <h4>Product Type</h4>

                            <div class="card-header-action">
                                <a href="{{ route('product-type.create') }}" class="btn btn-info">
                                    <i class="fa fa-plus"></i> Add</a>
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
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Create Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($productTypes as $item)
                                            <tr>

                                                <td>{{ $item->name }}</td>

                                                <td>{{ $item->description }}</td>

                                                <td>{{ date('j M Y', strtotime($item->updated_at)) }}</td>
                                                <td>
                                                    @if ($item->status == 1)
                                                        <a href="{{ route('product-type.show', $item->id) }}"
                                                            class="btn btn-success"><i class="fa fa-eye"></i>
                                                            Publish</a>
                                                    @else
                                                        <a href="{{ route('product-type.show', $item->id) }}"
                                                            class="btn btn-warning"><i class="fa fa-eye-slash"></i>
                                                            Unpublish</a>
                                                    @endif


                                                </td>
                                                <td class="justify-content-center d-flex">

                                                    <a href="{{ route('product-type.edit', $item->id) }}"
                                                        class="btn btn-primary" style="margin-right: 10px;">
                                                        <i class="fa fa-edit"></i></a>

                                                    <form action="{{ route('product-type.destroy', $item->id) }}"
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
