@extends('admin.master')

@section('title')
    Product Price
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

                            <form class="form-horizontal" action="{{ route('products.update', $product->id) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Category Name</div>
                                            <div class="form-group">
                                                <select name="category_id" class="form-control">
                                                    <option value=" ">Select Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            {{ $product->category_id == $category->id ? ' selected' : ' ' }}>
                                                            {{ $category->name }}</option>
                                                    @endforeach
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
                                                    <textarea name="short_description" class="summernote">{{ $product->short_description }}</textarea>
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
                                        <div class="col-md-6">
                                            <div class="section-title mt-0">Image</div>
                                            <div class="form-group custom-file">
                                                <input type="file" name="image" class="custom-file-input"
                                                    id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="section-title mt-0">Other Image(Max 3 Image)</div>
                                            <div class="form-group custom-file">
                                                <input type="file" name="other_image[]" class="custom-file-input"
                                                    id="customFile" multiple max="3">
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
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
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="tempaletfixed" name="template_discount_type"
                                                    class="tempfixed custom-control-input" value="fixed"
                                                    {{ $product->template_discount_type == 'fixed' ? 'checked' : ' ' }}>
                                                <label class="custom-control-label" for="tempaletfixed">Fixed</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="tempaletpercent" name="template_discount_type"
                                                    class="temppercent custom-control-input" value="percent"
                                                    {{ $product->template_discount_type == 'percent' ? 'checked' : ' ' }}>
                                                <label class="custom-control-label" for="tempaletpercent"
                                                    value="percent">Percent</label>
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

                                    <!-- Basic-->
                                    <div class="section-title mt-0">Basic Price</div>
                                    <hr>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Admin Page</div>
                                            <div class="form-group">
                                                <input type="number" name="basic_auth_page"
                                                    value="{{ $product->basic_auth_page }}" class="form-control"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="section-title mt-0">Template Type</div>
                                            <div class="form-group">
                                                <select name="basic_type[]" class="form-control select2" multiple=""
                                                    required>
                                                    @foreach ($productTypes as $basic_type)
                                                        <option value="{{ $basic_type->id }}"
                                                            @foreach ($productBasices as $productBasic)
                                                                @selected($productBasic->basic_type_id == $basicAuth->id) @endforeach>
                                                            {{ $basicAuth->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Delivery Day</div>
                                            <div class="form-group">
                                                <input type="number" name="basic_delivery"
                                                    value="{{ $product->basic_delivery }}" class="form-control"
                                                    placeholder="(exmple:10)" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Product Price($)</div>
                                            <div class="form-group">
                                                <input type="number" name="basic_regular_price"
                                                    value="{{ $product->basic_regular_price }}" id="bprice"
                                                    class="form-control" placeholder="(exmple:Price in USD)" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Discount Amount</div>
                                            <div class="form-group">
                                                <input type="number" name="basic_discount_amount"
                                                    value="{{ $product->basic_discount_amount }}" id="bdiscountAmount"
                                                    class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Discount Type</div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="basicfixed" name="basic_discount_type"
                                                    class="bfixed custom-control-input" value="fixed"
                                                    {{ $product->basic_discount_type == 'fixed' ? 'checked' : ' ' }}>
                                                <label class="custom-control-label" for="basicfixed">fixed</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="basicpercent" name="basic_discount_type"
                                                    class="bpercent custom-control-input" value="percent"
                                                    {{ $product->basic_discount_type == 'percent' ? 'checked' : ' ' }}>
                                                <label class="custom-control-label" for="basicpercent"
                                                    value="percent">percent</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Selling Price</div>
                                            <div class="form-group">
                                                <input type="number" id="bdiscountPrice" name="basic_selling_price"
                                                    value="{{ $product->basic_selling_price }}" class="form-control"
                                                    readonly>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Pro-->
                                    <div class="section-title mt-0">Pro Price</div>
                                    <hr>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-6">
                                            <div class="section-title mt-0">Admin Page</div>
                                            <div class="form-group">
                                                <input type="number" name="pro_auth_page"
                                                    value="{{ $product->pro_auth_page }}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="section-title mt-0">Template Type</div>
                                            <div class="form-group">
                                                <select name="pro_type[]" class="form-control select2" multiple="">
                                                    @foreach ($productTypes as $type)
                                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Delivery Day</div>
                                            <div class="form-group">
                                                <input type="number" name="pro_delivery"
                                                    value="{{ $product->pro_delivery }}" class="form-control"
                                                    placeholder="(exmple:10 Days)">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Product Price($)</div>
                                            <div class="form-group">
                                                <input type="number" name="pro_regular_price" id="proprice"
                                                    value="{{ $product->pro_regular_price }}" class="form-control"
                                                    placeholder="(exmple:Price in USD)">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Discount Amount</div>
                                            <div class="form-group">
                                                <input type="number" name="pro_discount_amount"
                                                    value="{{ $product->pro_discount_amount }}" id="prodiscountAmount"
                                                    class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Discount Type</div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="profixed1" name="pro_discount_type"
                                                    class="profixed custom-control-input" value="fixed"
                                                    {{ $product->pro_discount_type == 'fixed' ? 'checked' : ' ' }}>
                                                <label class="custom-control-label" for="profixed1">fixed</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="propercent1" name="pro_discount_type"
                                                    class="propercent custom-control-input" value="percent"
                                                    {{ $product->pro_discount_type == 'percent' ? 'checked' : ' ' }}>
                                                <label class="custom-control-label" for="propercent1"
                                                    value="percent">percent</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Selling Price</div>
                                            <div class="form-group">
                                                <input type="number" id="prodiscountPrice" name="pro_selling_price"
                                                    value="{{ $product->pro_selling_price }}" class="form-control"
                                                    readonly>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Premium-->
                                    <div class="section-title mt-0">Premium Price</div>
                                    <hr>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-6">
                                            <div class="section-title mt-0">Admin Page</div>
                                            <div class="form-group">
                                                <input type="number" name="pre_auth_page"
                                                    value="{{ $product->pre_auth_page }}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="section-title mt-0">Template Type</div>
                                            <div class="form-group">
                                                <select name="pre_type[]" class="form-control select2" multiple="">
                                                    @foreach ($productTypes as $productType)
                                                        <option value="{{ $productType->id }}">{{ $type->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Delivery Day</div>
                                            <div class="form-group">
                                                <input type="number" name="pre_delivery"
                                                    value="{{ $product->pre_delivery }}" class="form-control"
                                                    placeholder="(exmple:10 Days)">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Product Price($)</div>
                                            <div class="form-group">
                                                <input type="number" name="pre_regular_price"
                                                    value="{{ $product->pre_regular_price }}" id="preprice"
                                                    class="form-control" placeholder="(exmple:Price in USD)">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Discount Amount</div>
                                            <div class="form-group">
                                                <input type="number" name="pre_discount_amount"
                                                    value="{{ $product->pre_discount_amount }}" id="prediscountAmount"
                                                    class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Discount Type</div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="prefixed1" name="pre_discount_type"
                                                    class="prefixed custom-control-input" value="fixed"
                                                    {{ $product->pre_discount_type == 'fixed' ? 'checked' : ' ' }}>
                                                <label class="custom-control-label" for="prefixed1">fixed</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="prepercent1" name="pre_discount_type"
                                                    class="prepercent custom-control-input" value="percent"
                                                    {{ $product->pre_discount_type == 'percent' ? 'checked' : ' ' }}>
                                                <label class="custom-control-label" for="prepercent1"
                                                    value="percent">percent</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Selling Price</div>
                                            <div class="form-group">
                                                <input type="number" id="prediscountPrice" name="pre_selling_price"
                                                    value="{{ $product->pre_selling_price }}" class="form-control"
                                                    readonly>
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
