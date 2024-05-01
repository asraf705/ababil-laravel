@extends('admin.master')

@section('title')
    product
@endsection

@section('products')
    active
@endsection

@section('theme')
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
                                <h4>Edit Theme</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('products.index') }}" class="btn btn-danger">Back</a>
                                </div>
                            </div>

                            <p class="text-center text-success">{{ session('Gmessage') }}</p>

                            <form class="form-horizontal" action=""
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Category Name</div>
                                            <div class="form-group">
                                                <select name="category_id" class="form-control">
                                                    <option value=" ">Select Category</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Title</div>
                                            <div class="form-group">
                                                <input type="text" value=" {{ $product->title }}" name="title"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-6">
                                            <div class="section-title mt-0">Auther Name</div>
                                            <div class="form-group">
                                                <select name="auther_id" value="{{ $product->auther_id }}"
                                                    class="form-control select2">
                                                    <option value="0">Seclect Auther</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="section-title mt-0">Product Code</div>
                                            <div class="form-group">
                                                <input type="text" name="code" value="{{ $product->code }}"
                                                    class="form-control" enctype="multipart/form-data">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Short Description</div>
                                            <div class="form-group row mb-4">
                                                <div class="col-sm-12 col-md-12">
                                                    <input type="text" name="short_description" value="{{ $product->short_description }}" class="form-control" enctype="multipart/form-data">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Long Description</div>
                                            <div class="form-group row mb-4">
                                                <div class="col-sm-12 col-md-12">
                                                    <textarea name="long_description" class="summernote">{{ $product->long_description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Font-End Page</div>
                                            <div class="form-group">
                                                <input type="number" name="web_page" value="{{ $product->web_page }}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Template View Url</div>
                                            <div class="form-group">
                                                <div class="input-group mb-2">
                                                    <input type="text" class="form-control text-right"
                                                        id="inlineFormInputGroup2" name="view_url"
                                                        value="{{ $product->view_url }}" placeholder="View URL">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">.com</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Download Url</div>
                                            <div class="form-group">
                                                <div class="input-group mb-2">
                                                    <input type="text" class="form-control text-right"
                                                        id="inlineFormInputGroup2" name="download_url"
                                                        value="{{ $product->download_url }}" placeholder="Download URL">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">.com</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
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

                                                <img src="{{ asset($product->image) }}"
                                                    alt="{{ $product->category->name }}"
                                                    style="height: 100px; width: 100px;">

                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Delivery Day</div>
                                            <div class="form-group">
                                                <input type="number" name="template_delivery"
                                                    value="{{ $product->template_delivery }}" class="form-control"
                                                    placeholder="(exmple:10)" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Product Price($)</div>
                                            <div class="form-group">
                                                <input type="number" name="template_regular_price" id="tempprice"
                                                    value="{{ $product->template_regular_price }}" class="form-control"
                                                    placeholder="(exmple:Price in USD)" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Discount Amount</div>
                                            <div class="form-group">
                                                <input type="number" name="template_discount_amount"
                                                    value="{{ $product->template_discount_amount }}"
                                                    id="tempdiscountAmount" class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Discount Type</div>

                                            <div class="pretty p-icon p-curve p-jelly">
                                                <input type="radio" name="template_discount_type"
                                                    class="tempfree custom-control-input" value="free"
                                                    {{ $product->template_discount_type == 'free' ? 'checked' : '' }} />
                                                <div class="state p-primary">
                                                    <i class="icon material-icons">done</i>
                                                    <label>Free</label>
                                                </div>
                                            </div>

                                            <div class="pretty p-icon p-curve p-jelly">
                                                <input type="radio" id="tempaletfixed" name="template_discount_type"
                                                    class="fixed tempfixed custom-control-input" value="fixed"
                                                    {{ $product->template_discount_type == 'fixed' ? 'checked' : '' }} />
                                                    <div class="state p-primary">
                                                        <i class="icon material-icons">done</i>
                                                        <label>Fixed</label>
                                                    </div>
                                            </div>
                                            <div class="pretty p-icon p-curve p-jelly">
                                                <input type="radio" id="tempaletpercent" name="template_discount_type"
                                                    class="percent temppercent custom-control-input" value="percent"
                                                    {{ $product->template_discount_type == 'percent' ? 'checked' : ' ' }} />

                                                    <div class="state p-primary">
                                                        <i class="icon material-icons">done</i>
                                                        <label>Percent</label>
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Selling Price</div>
                                            <div class="form-group">
                                                <input type="number" id="tempdiscountPrice"
                                                    name="template_selling_price"
                                                    value="{{ $product->template_selling_price }}" class="form-control"
                                                    readonly>
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
