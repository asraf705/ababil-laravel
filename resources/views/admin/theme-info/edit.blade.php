@extends('admin.master')

@section('title')
    Theme Info
@endsection

@section('theme')
    active
@endsection

@section('theme-infos')
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
                                <h4>Theme Info</h4>
                            </div>

                            <p class="text-center text-success">{{ session('Gmessage') }}</p>

                            <form class="form-horizontal" action="{{ route('theme-info.update', $info->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Name<samp class="required">*</samp></div>
                                            <div class="form-group">
                                                <input type="text" name="name" value="{{ $info->name }}"
                                                    class="form-control" enctype="multipart/form-data" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Motto</div>
                                            <div class="form-group">
                                                <input type="text" name="motto" value="{{ $info->motto }}"
                                                    class="form-control" enctype="multipart/form-data">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Biography<samp class="required">*</samp></div>
                                            <div class="form-group">
                                                <input type="text" name="biography" value="{{ $info->biography }}"
                                                    class="form-control" enctype="multipart/form-data">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Contact Mobile<samp class="required">*</samp>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" name="contact_mobile"
                                                    value="{{ $info->contact_mobile }}" class="form-control"
                                                    enctype="multipart/form-data">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Whatapp Mobile<samp class="required">*</samp>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" name="whapp_mobile" value="{{ $info->whapp_mobile }}"
                                                    class="form-control" enctype="multipart/form-data">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="section-title mt-0">Support Mobile</div>
                                            <div class="form-group">
                                                <input type="number" name="support_mobile"
                                                    value="{{ $info->support_mobile }}" class="form-control"
                                                    enctype="multipart/form-data">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-6">
                                            <div class="section-title mt-0">Contact Email<samp class="required">*</samp>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="contact_email"
                                                    value="{{ $info->contact_email }}" class="form-control"
                                                    enctype="multipart/form-data">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="section-title mt-0">Support Email</div>
                                            <div class="form-group">
                                                <input type="email" name="support_email"
                                                    value="{{ $info->support_email }}" class="form-control"
                                                    enctype="multipart/form-data">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Address<samp class="required">*</samp></div>
                                            <div class="form-group">
                                                <input type="text" name="address" value="{{ $info->address }}"
                                                    class="form-control" enctype="multipart/form-data">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Domain Url<samp class="required">*</samp></div>
                                            <div class="form-group">
                                                <div class="input-group mb-2">
                                                    <input type="text" class="form-control text-right"
                                                        id="inlineFormInputGroup2" name="domain_url"
                                                        value="{{ $info->domain_url }}" placeholder="Domain URL">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">.com</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Facebook Url</div>
                                            <div class="form-group">
                                                <div class="input-group mb-2">
                                                    <input type="text" class="form-control text-right"
                                                        id="inlineFormInputGroup2" name="facebook_url"
                                                        value="{{ $info->facebook_url }}" placeholder="Facebook URL">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">.com</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Twitter Url</div>
                                            <div class="form-group">
                                                <div class="input-group mb-2">
                                                    <input type="text" class="form-control text-right"
                                                        id="inlineFormInputGroup2" name="twitter_url"
                                                        value="{{ $info->twitter_url }}" placeholder="Twitter URL">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">.com</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Youtube Url</div>
                                            <div class="form-group">
                                                <div class="input-group mb-2">
                                                    <input type="text" class="form-control text-right"
                                                        id="inlineFormInputGroup2" name="youtube_url"
                                                        value="{{ $info->youtube_url }}" placeholder="Youtube URL">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">.com</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">LinkedIn Url</div>
                                            <div class="form-group">
                                                <div class="input-group mb-2">
                                                    <input type="text" class="form-control text-right"
                                                        id="inlineFormInputGroup2" name="linked_in_url"
                                                        value="{{ $info->linked_in_url }}" placeholder="LinkedIn URL">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">.com</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-12">
                                            <div class="section-title mt-0">Instagram Url</div>
                                            <div class="form-group">
                                                <div class="input-group mb-2">
                                                    <input type="text" class="form-control text-right"
                                                        id="inlineFormInputGroup2" name="instagram_url"
                                                        value="{{ $info->instagram_url }}" placeholder="Instagram URL">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">.com</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-6">
                                            <div class="section-title mt-0">Header Logo (.jpg/.png)<samp
                                                    class="required">*</samp></div>
                                            <div class="form-group custom-file">
                                                <input type="file" name="header_logo" class="custom-file-input"
                                                    id="customFile" accept=".jpg,.jpeg,.png" />
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group custom-file">

                                                <img src="{{ asset($info->header_logo) }}" alt="Image"
                                                    style="height: 100px; width: 180px;">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-6">
                                            <div class="section-title mt-0">Footer Logo (.jpg/.png)<samp
                                                    class="required">*</samp></div>
                                            <div class="form-group custom-file">
                                                <input type="file" name="footer_logo" class="custom-file-input"
                                                    id="customFile" accept=".jpg,.jpeg,.png" />
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group custom-file">

                                                <img src="{{ asset($info->footer_logo) }}" alt="Image"
                                                    style="height: 100px; width: 180px;">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-6">
                                            <div class="section-title mt-0">Favicon(.jpg/.png/.ico)<samp
                                                    class="required">*</samp></div>
                                            <div class="form-group custom-file">
                                                <input type="file" name="favicon" class="custom-file-input"
                                                    id="customFile" accept=".jpg,.jpeg,.png,.ico" />
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group custom-file">
                                                <img src="{{ asset($info->favicon) }}" alt="Image"
                                                    style="height: 100px; width: 100px;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-6">
                                            <div class="section-title mt-0">Trade License</div>
                                            <div class="form-group custom-file">
                                                <input type="file" name="trade_license" class="custom-file-input"
                                                    id="customFile" accept=".pdf" />
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>

                                        <div class="buttons col-md-4" style="padding-top:29px;">
                                            <a class="btn btn-lg btn-success col-md-12"
                                                href="{{ asset($info->trade_license) }}" target="_blank">Trade View</a>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-6">
                                            <div class="section-title mt-0">TIN Certificate</div>
                                            <div class="form-group custom-file">
                                                <input type="file" name="tin_certificate" class="custom-file-input"
                                                    id="customFile" accept=".pdf" />
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>

                                        <div class="buttons col-md-4" style="padding-top:29px;">
                                            <a class="btn btn-lg btn-success col-md-12"
                                                href="{{ asset($info->tin_certificate) }}" target="_blank">TIN View</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-6">
                                            <div class="section-title mt-0">ECAB Certificate</div>
                                            <div class="form-group custom-file">
                                                <input type="file" name="ecab_certificate" class="custom-file-input"
                                                    id="customFile" accept=".pdf" />
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>

                                        <div class="buttons col-md-4" style="padding-top:29px;">
                                            <a class="btn btn-lg btn-success col-md-12"
                                                href="{{ asset($info->ecab_certificate) }}" target="_blank">ECAB View</a>
                                        </div>
                                    </div>

                                    <div class="buttons">
                                        <button type="submit" onclick="return confirm('Are you sure to Update this!!')" class="btn btn-lg btn-info col-md-12">Save</button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
