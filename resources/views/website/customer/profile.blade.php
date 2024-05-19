@extends('website.master')

@section('title')
    Customer Profile
@endsection

@section('customer')
    active
@endsection

@section('body')
    <div class="shop_sidebar_area">
        <!-- ##### Single Widget ##### -->
        <div class="widget catagory mb-50">


            <!--  Catagories  -->
            <div class="catagories-menu">
                <ul>
                    <li class="active"><a href="customer.profile">Profile</a></li>
                    <li ><a href="">Orders</a></li>
                    <li ><a href="">Wishlist</a></li>
                    <li ><a href="">Change Password</a></li>
                    <li ><a href="">Logout</a></li>

                </ul>


            </div>
        </div>
    </div>


    <div class="amado_product_area section-padding-100">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                        <!-- Total Products -->
                        <div class="total-products">
                            <p>Showing 1-8 0f 25</p>
                            <div class="view d-flex">
                                <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Sorting -->
                        <div class="product-sorting d-flex">
                            <div class="sort-by-date d-flex align-items-center mr-15">
                                <p>Sort by</p>
                                <form action="#" method="get">
                                    <select name="select" id="sortBydate">
                                        <option value="value">All</option>
                                        <option value="value">Free</option>
                                        <option value="value">Premium</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">


            </div>

        </div>

        @include('website.testimonial.slider-testimonial')
        @include('website.team.slider-team')
    </div>
@endsection
