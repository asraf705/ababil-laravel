@extends('website.master')

@section('title')
    Customer Profile
@endsection

@section('customer')
    active
@endsection

@section('body')
    <style>
        .wrapper {
            display: inline-flex;
            height: 100px;
            width: 400px;
            align-items: center;
            justify-content: space-evenly;
            border-radius: 5px;
            padding: 20px 15px;
        }

        .wrapper .option {
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            margin: 0 10px;
            border-radius: 5px;
            cursor: pointer;
            padding: 0 10px;
            border: 2px solid lightgrey;
            transition: all 0.3s ease;
        }

        .wrapper .option .dot {
            height: 20px;
            width: 20px;
            background: #d9d9d9;
            border-radius: 50%;
            position: relative;
        }

        .wrapper .option .dot::before {
            position: absolute;
            content: "";
            top: 4px;
            left: 4px;
            width: 12px;
            height: 12px;
            background: #22cc9d;
            border-radius: 50%;
            opacity: 0;
            transform: scale(1.5);
            transition: all 0.3s ease;
        }

        input[type="radio"] {
            display: none;
        }

        #option-1:checked:checked~.option-1,
        #option-2:checked:checked~.option-2,
        #option-3:checked:checked~.option-3 {
            border-color: #22cc9d;
            background: #22cc9d;
        }

        #option-1:checked:checked~.option-1 .dot,
        #option-2:checked:checked~.option-2 .dot,
        #option-3:checked:checked~.option-3 .dot {
            background: #fff;

        }

        #option-1:checked:checked~.option-1 .dot::before,
        #option-2:checked:checked~.option-2 .dot::before,
        #option-3:checked:checked~.option-3 .dot::before {
            opacity: 1;
            transform: scale(1);
        }

        .wrapper .option span {
            font-size: 20px;
            color: #302d2d;
        }

        #option-1:checked:checked~.option-1 span,
        #option-2:checked:checked~.option-2 span,
        #option-3:checked:checked~.option-3 span,
        {
        color: #fff;
        }

        *,
        *:before,
        *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 2rem 1.5rem;
            font: 1rem/1.5 "PT Sans", Arial, sans-serif;
            color: #5a5a5a;
        }
    </style>

    <div class="shop_sidebar_area">
        <!-- ##### Single Widget ##### -->
        <div class="widget catagory mb-50">


            <!--  Catagories  -->
            <div class="catagories-menu">
                <ul>
                    <li class="active"><a href="customer.profile">Profile</a></li>
                    <li><a href="">Orders</a></li>
                    <li><a href="">Wishlist</a></li>
                    <li><a href="">Change Password</a></li>
                    <li><a href="">Logout</a></li>

                </ul>


            </div>
        </div>
    </div>


    <div class="amado_product_area section-padding-100">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2>Profile</h2>
                            <hr>
                        </div>

                        <form action="{{ route('customer.update-profile', ['id' => $customerInfo->id]) }}" method="post"
                            class="theme-form" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <input type="text" class="form-control" id="first_name" name="fname"
                                        value="{{ $customerInfo->fname }}" placeholder="First Name" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="text" class="form-control" id="last_name" name="lname"
                                        value="{{ $customerInfo->lname }}" placeholder="Last Name">
                                </div>
                                <div class="col-md-4 mb-3">
                                    @if ($customerInfo->image == null)
                                    <img src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG.png" alt="default-profile" class="d-flex" style=" width: 100px; height: 100px" id='image'>
                                    @else
                                        <img src="{{ asset($customerInfo->image) }}" class="d-flex" alt="profile-image"
                                            style=" width: 100px; height: 100px" id='image'>
                                    @endif
                                    <label class="file">
                                        <input type="file" name="image" for="image" />
                                        <span class="file-custom"></span>
                                    </label>
                                </div>

                                <div class="col-md-7 mb-3">
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ $customerInfo->email }}" placeholder="Email">
                                </div>

                                <div class="col-md-5 mb-3">
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        value="{{ $customerInfo->phone }}" placeholder="Mobile Number">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"
                                        value="{{ $customerInfo->date_of_birth }}" placeholder="Date of Birth">
                                </div>

                                <div class="wrapper col-md-12 mb-3">
                                    <input type="radio" name="gender" id="option-1"
                                        value="Male"{{ $customerInfo->gender == 'Male' ? 'checked' : '' }}>
                                    <input type="radio" name="gender" id="option-2"
                                        value="Female"{{ $customerInfo->gender == 'Female' ? 'checked' : '' }}>
                                    <input type="radio" name="gender" id="option-3"
                                        value="Other"{{ $customerInfo->gender == 'Other' ? 'checked' : '' }}>

                                    <label for="option-1" class="option option-1">
                                        <div class="dot"></div>
                                        <span>Male</span>
                                    </label>
                                    <label for="option-2" class="option option-2">
                                        <div class="dot"></div>
                                        <span>Female</span>
                                    </label>
                                    <label for="option-3" class="option option-3">
                                        <div class="dot"></div>
                                        <span>Others</span>
                                    </label>
                                </div>

                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control" id="address" name="address"
                                        value="{{ $customerInfo->address }}" placeholder="Address" />

                                </div>

                                <div class="cart-btn mt-15 col-12">
                                    <button type="submit" class="btn amado-btn w-100">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
