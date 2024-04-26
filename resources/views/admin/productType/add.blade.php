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
                <div class="col-12 col-md-12 col-lg-12">

                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">

                            <div class="card-header">
                                <h4>Add Product Type</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('product-type.index') }}" class="btn btn-danger">Back</a>
                                </div>
                            </div>

                            <p class="text-center text-success">{{ session('Gmessage') }}</p>

                            <form class="form-horizontal" action="{{ route('product-type.store') }}" method="POST">
                                @csrf
                                <div class="card-body">

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Name</div>
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Name"
                                                    required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Description(optional)</div>
                                            <div class="form-group">
                                                <textarea type="text" name="description" class="form-control" placeholder="Description"></textarea>
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
