@extends('admin.master')

@section('title')
    Testimonial
@endsection

@section('testimonials')
    active
@endsection

@section('testimonial')
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
                                <h4>Add Testimonial</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('testimonial.index') }}" class="btn btn-danger">Back</a>
                                </div>
                            </div>

                            <p class="text-center text-success">{{ session('Gmessage') }}</p>

                            <form class="form-horizontal" action="{{ route('testimonial.update', $testimonial->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Name</div>
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Name" value="{{ $testimonial->name }}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Post</div>
                                            <div class="form-group">
                                                <input type="text" name="post" class="form-control"
                                                    placeholder="Post" value="{{ $testimonial->post }}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Description</div>
                                            <div class="form-group">
                                                <textarea type="text" name="description" class="form-control"
                                                    placeholder="Description" required>{{ $testimonial->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex mt-5">
                                        <div class="col-md-8">
                                            <div class="section-title mt-0">Image</div>
                                            <div class="form-group custom-file">
                                                <input type="file" name="image" class="custom-file-input"
                                                    id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group custom-file">

                                                <img src="{{ asset($testimonial->image) }}"
                                                    alt="{{ $testimonial->name }}"
                                                    style="height: 100px; width: 100px;">

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
