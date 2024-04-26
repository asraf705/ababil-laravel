@extends('admin.master')

@section('title')
    Category
@endsection

@section('category')
    active
@endsection

@section('body')
    <!-- Main Content -->

    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">

                            <div class="card-header">
                                <h4>Edit Category</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('categories.index') }}" class="btn btn-danger">Back</a>
                                </div>
                            </div>

                            <p class="text-center text-success">{{ session('Gmessage') }}</p>

                            <form class="form-horizontal" action="{{ route('categories.update', $item->id) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Category Name</div>
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control"
                                                    value="{{ $item->name }}" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-9">
                                            <div class="section-title mt-0">Image</div>
                                            <div class="form-group custom-file">
                                                <input type="file" name="image" class="custom-file-input"
                                                    id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>

                                        <div class="col-md-3 mt-0">
                                            <div class="form-group custom-file">
                                            <img src="{{ asset($item->image) }}" alt="" height="100" width="120">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="buttons">
                                        <button type="submit" class="btn btn-lg btn-info col-md-12">Update</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
