@extends('admin.master')

@section('title')
    Skill
@endsection

@section('module')
    active
@endsection

@section('skill')
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
                                <h4>Edit Skill</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('skill.index') }}" class="btn btn-danger">Back</a>
                                </div>
                            </div>

                            <p class="text-center text-success">{{ session('Gmessage') }}</p>

                            <form class="form-horizontal" action="{{ route('skill.update', $item->id) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Name</div>
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control"
                                                    value="{{ $item->name }}" placeholder="Name">
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
