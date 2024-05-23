@extends('admin.master')

@section('title')
    Privacy Policy
@endsection

@section('theme')
    active
@endsection

@section('policyInfo')
    active
@endsection

@section('body')

    <!-- css style -->
    <style>
        .required {
            color: red;
        }
    </style>
    <!-- css style -->

    <!-- Main Content -->

    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Privacy Policy Info</h4>
                            </div>
                            <p class="text-center text-success">{{ session('Gmessage') }}</p>

                            <form class="form-horizontal" action="{{ route('privacy-policy.update', $Info->id)  }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="card-body">

                                    <!-- frist policy -->
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Ponicy Name<samp class="required">*</samp></div>
                                            <div class="form-group">
                                                <input type="text" name="one_name" value="{{$Info->one_name}}" class="form-control"
                                                    placeholder="Ponicy Name" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Ponicy Description<samp
                                                    class="required">*</samp></div>
                                            <div class="form-group row mb-4">
                                                <div class="col-sm-12 col-md-12">
                                                    <textarea name="one_policy" class="summernote" required>{{ $Info->one_policy}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- sec policy -->

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Ponicy Name</div>
                                            <div class="form-group">
                                                <input type="text" name="two_name" value="{{$Info->two_name}}" class="form-control"
                                                    placeholder="Ponicy Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Ponicy Description</div>
                                            <div class="form-group row mb-4">
                                                <div class="col-sm-12 col-md-12">
                                                    <textarea name="two_policy" class="summernote">{{ $Info->two_policy }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- therdth policy -->

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Ponicy Name</div>
                                            <div class="form-group">
                                                <input type="text" name="three_name" value="{{$Info->three_name}}" class="form-control"
                                                    placeholder="Ponicy Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Ponicy Description</div>
                                            <div class="form-group row mb-4">
                                                <div class="col-sm-12 col-md-12">
                                                    <textarea name="three_policy" class="summernote">{{ $Info->three_policy}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- forth policy -->

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Ponicy Name</div>
                                            <div class="form-group">
                                                <input type="text" name="four_name" value="{{$Info->four_name}}" class="form-control"
                                                    placeholder="Ponicy Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Ponicy Description</div>
                                            <div class="form-group row mb-4">
                                                <div class="col-sm-12 col-md-12">
                                                    <textarea name="four_policy" class="summernote">{{ $Info->four_policy}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="buttons">
                                        <button type="submit" class="btn btn-lg btn-info col-md-12" onclick="return confirm('Are you sure to Update this!!')">Update</button>
                                    </div>

                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
