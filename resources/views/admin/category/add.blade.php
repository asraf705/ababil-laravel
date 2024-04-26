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
                <div class="col-12 col-md-12 col-lg-12">

                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">

                            <div class="card-header">
                                <h4>Add Category</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('categories.index') }}" class="btn btn-danger">Back</a>
                                </div>
                            </div>

                            <p class="text-center text-success">{{ session('Gmessage') }}</p>

                            <form class="form-horizontal" action="{{ route('categories.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Category Name</div>
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Category Name" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Image</div>
                                            <div class="form-group custom-file">
                                                <input type="file" name="image" class="custom-file-input"
                                                    id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="buttons">
                                        <button type="submit" class="btn btn-lg btn-info col-md-12">Save</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
