<!-- ##### testimonial ##### -->

<div class="container section-padding-100-0">
    <div class="row">
        <div class="col-sm-12">
            <div class="container-fluid px-3 px-sm-5 my-5 text-center mt-0">
                <h4>Testimonial.</h4>
                <div class="lines"></div>
            </div>

            <div id="customers-testimonials" class="owl-carousel">
                @foreach ($testimonials->take(7) as $testimonial)
                    @if ($testimonial->status == '1')
                        <!--TESTIMONIAL 1 -->
                        <div class="item shadow-lg">
                            <div class="p-4 bg-white rounded">
                                <div class="d-flex align-items-center">
                                    <div class="author-img mr-3"> <img src="{{ asset($testimonial->image) }}">
                                    </div>
                                    <div>
                                        <h6 class="m-0 float-left font-weight-bold ">{{ $testimonial->name }}</h6><br />
                                        <p class="m-0 small font-medium text-muted">{{ $testimonial->post }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="commo pt-3"><img src="https://annedece.sirv.com/Images/commo6.png"></div>
                                <p class="mb-4 text-muted">{{ $testimonial->description }}</p>
                            </div>
                        </div>
                        <!--END OF TESTIMONIAL 1 -->
                    @endif
                @endforeach

            </div>
        </div>
    </div>
</div>

<!-- ##### testimonial Area End ##### -->
