@extends('admin.master')

@section('title')
    Product Price
@endsection

@section('products')
    active
@endsection

@section('themePrice')
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
                                <h4>Add Theme Price</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('theme-price.index') }}" class="btn btn-danger">Back</a>
                                </div>
                            </div>

                            <p class="text-center text-success">{{ session('Gmessage') }}</p>

                            <form class="form-horizontal" action="{{ route('theme-price.store') }}" method="POST">
                                @csrf

                                <div class="card-body">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Title</div>
                                            <div class="form-group">
                                                <select class="form-control select2" onchange="setProductInfo(this.value)"
                                                    id="" name="product_id" required>
                                                    <option value=" ">Seclect Title</option>
                                                    @foreach ($products as $product)
                                                        <option value="{{ $product->id }}">
                                                            {{ $product->title }} ({{ $product->category->name }})
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Category</div>
                                            <div class="form-group">
                                                <input type="text" value="" id="CategoryId" class="form-control"
                                                    readonly>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Auther Name</div>
                                            <div class="form-group">
                                                <input type="text" value="{{ $product->auther_id }}" id="auther_id"
                                                    class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Theme Code</div>
                                            <div class="form-group">
                                                <input type="text" value="{{ $product->code }}" id="code"
                                                    class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Font-End Page</div>
                                            <div class="form-group">
                                                <input type="text" value="{{ $product->web_page }}" id="web_page"
                                                    class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Selling Price</div>
                                            <div class="form-group">
                                                <input type="text" value="{{ $product->template_selling_price }}"
                                                    id="price" class="form-control" readonly>
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
                                                <input type="number" name="basic_page" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="section-title mt-0">Template Type</div>
                                            <div class="form-group">
                                                <select name="basic_types[]" class="form-control select2" multiple=""
                                                    required>
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
                                                <input type="number" name="basic_delivery" class="form-control"
                                                    placeholder="(exmple:10)" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Product Price($)</div>
                                            <div class="form-group">
                                                <input type="number" name="basic_regular_price" id="bprice"
                                                    class="form-control" placeholder="(exmple:Price in USD)" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Discount Amount</div>
                                            <div class="form-group">
                                                <input type="number" name="basic_discount_amount" id="bdiscountAmount"
                                                    class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Discount Type</div>

                                            <div class="pretty p-icon p-curve p-jelly">
                                                <input type="radio" name="basic_discount_type"
                                                    class="bfixed custom-control-input" value="fixed">
                                                <div class="state p-primary">
                                                    <i class="icon material-icons">done</i>
                                                    <label>Fixed</label>
                                                </div>
                                            </div>

                                            <div class="pretty p-icon p-curve p-jelly">
                                                <input type="radio" name="basic_discount_type"
                                                    class="bpercent custom-control-input" value="percent">
                                                <div class="state p-primary">
                                                    <i class="icon material-icons">done</i>
                                                    <label>Percent</label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Selling Price</div>
                                            <div class="form-group">
                                                <input type="number" id="bdiscountPrice" name="basic_selling_price"
                                                    class="form-control" readonly>
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
                                                <input type="number" name="pro_page" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="section-title mt-0">Template Type</div>
                                            <div class="form-group">
                                                <select name="pro_types[]" class="form-control select2" multiple="">
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
                                                <input type="number" name="pro_delivery" class="form-control"
                                                    placeholder="(exmple:10 Days)">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Product Price($)</div>
                                            <div class="form-group">
                                                <input type="number" name="pro_regular_price" id="proprice"
                                                    class="form-control" placeholder="(exmple:Price in USD)">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Discount Amount</div>
                                            <div class="form-group">
                                                <input type="number" name="pro_discount_amount" id="prodiscountAmount"
                                                    class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Discount Type</div>

                                            <div class="pretty p-icon p-curve p-jelly">
                                                <input type="radio" name="pro_discount_type"
                                                    class="profixed custom-control-input" value="fixed">
                                                <div class="state p-primary">
                                                    <i class="icon material-icons">done</i>
                                                    <label>Fixed</label>
                                                </div>
                                            </div>

                                            <div class="pretty p-icon p-curve p-jelly">
                                                <input type="radio" name="pro_discount_type"
                                                    class="propercent custom-control-input" value="percent">
                                                <div class="state p-primary">
                                                    <i class="icon material-icons">done</i>
                                                    <label>Percent</label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Selling Price</div>
                                            <div class="form-group">
                                                <input type="number" id="prodiscountPrice" name="pro_selling_price"
                                                    class="form-control" readonly>
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
                                                <input type="number" name="pre_page" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="section-title mt-0">Template Type</div>
                                            <div class="form-group">
                                                <select name="pre_types[]" class="form-control select2" multiple="">
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
                                                <input type="number" name="pre_delivery" class="form-control"
                                                    placeholder="(exmple:10 Days)">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Product Price($)</div>
                                            <div class="form-group">
                                                <input type="number" name="pre_regular_price" id="preprice"
                                                    class="form-control" placeholder="(exmple:Price in USD)">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Discount Amount</div>
                                            <div class="form-group">
                                                <input type="number" name="pre_discount_amount" id="prediscountAmount"
                                                    class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Discount Type</div>

                                            <div class="pretty p-icon p-curve p-jelly">
                                                <input type="radio" name="pre_discount_type"
                                                    class="prefixed custom-control-input" value="fixed">
                                                <div class="state p-primary">
                                                    <i class="icon material-icons">done</i>
                                                    <label>Fixed</label>
                                                </div>
                                            </div>

                                            <div class="pretty p-icon p-curve p-jelly">
                                                <input type="radio" name="pre_discount_type"
                                                    class="prepercent custom-control-input" value="percent">
                                                <div class="state p-primary">
                                                    <i class="icon material-icons">done</i>
                                                    <label>Percent</label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Selling Price</div>
                                            <div class="form-group">
                                                <input type="number" id="prediscountPrice" name="pre_selling_price"
                                                    class="form-control" readonly>
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
