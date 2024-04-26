@extends('admin.master')

@section('title')
    @extends('admin.master')

@section('title')
    Member Post
@endsection

@section('module')
    active
@endsection

@section('post')
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
                                <h4>Add Member Post</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('post.index') }}" class="btn btn-danger">Back</a>
                                </div>
                            </div>

                            <p class="text-center text-success">{{ session('Gmessage') }}</p>

                            <form class="form-horizontal" action="{{ route('post.store') }}" method="POST">
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

                                    <div class="buttons col-md-12">
                                        <button type="submit" class="btn btn-lg btn-info col-md-12">Save</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
