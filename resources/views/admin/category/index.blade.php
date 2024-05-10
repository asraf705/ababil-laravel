@extends('admin.master')

@section('title')
    Category
@endsection

@section('module')
    active
@endsection

@section('category')
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
                            <h4>Manage Category</h4>

                            <div class="card-header-action">
                                <a href="{{ route('categories.create') }}" class="btn btn-info">
                                    <i class="fa fa-plus"></i> Add Category</a>
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
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Create Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($categories as $item)
                                            <tr>

                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>
                                                    <img src="{{ asset($item->image) }}" alt="Categry"
                                                        style="height: 50px; width: 50px;"></td>
                                                <td>{{ date('j M Y', strtotime($item->updated_at)) }}</td>
                                                <td>
                                                    @if ($item->status == 1)
                                                        <a href="{{ route('categories.show', $item->id) }}"
                                                            class="btn btn-success"><i class="fa fa-eye"></i>
                                                            Publish</a>
                                                    @else
                                                        <a href="{{ route('categories.show', $item->id) }}"
                                                            class="btn btn-warning"><i class="fa fa-eye-slash"></i>
                                                            Unpublish</a>
                                                    @endif


                                                </td>
                                                <td class="justify-content-center d-flex">

                                                    <a href="{{ route('categories.edit', $item->id) }}"
                                                        class="btn btn-primary" style="margin-right: 10px;">
                                                        <i class="fa fa-edit"></i></a>

                                                    <form action="{{ route('categories.destroy', $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger "
                                                            onclick="return confirm('Are you sure delete this!!')"><i
                                                                class="fa fa-trash"></i></button>
                                                    </form>

                                                    {{-- <a href="#" class="btn btn-dark"><i class="fa fa-info-circle"></i> Details</a> --}}
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
