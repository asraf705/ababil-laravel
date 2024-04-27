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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Manage Testimonial</h4>

                            <div class="card-header-action">
                                <a href="{{ route('testimonial.create') }}" class="btn btn-info">
                                    <i class="fa fa-plus"></i> Add Testimonial</a>
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
                                            <th>Post</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($testimonials as $testimonial)
                                            <tr>

                                                <td>{{ $testimonial->name }}</td>
                                                <td>{{ $testimonial->post }}</td>
                                                <td>{{ $testimonial->description }}</td>
                                                <td>
                                                    <img src="{{ asset($testimonial->image) }}" alt="Categry"
                                                        style="height: 50px; width: 50px;"></td>
                                                <td>
                                                    @if ($testimonial->status == 1)
                                                        <a href="{{ route('testimonial.show', $testimonial->id) }}"
                                                            class="btn btn-success"><i class="fa fa-eye"></i>
                                                            Publish</a>
                                                    @else
                                                        <a href="{{ route('testimonial.show', $testimonial->id) }}"
                                                            class="btn btn-warning"><i class="fa fa-eye-slash"></i>
                                                            Unpublish</a>
                                                    @endif


                                                </td>
                                                <td class="justify-content-center d-flex">

                                                    <a href="{{ route('testimonial.edit', $testimonial->id) }}"
                                                        class="btn btn-primary" style="margin-right: 10px;">
                                                        <i class="fa fa-edit"></i></a>

                                                    <form action="{{ route('testimonial.destroy', $testimonial->id) }}"
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
