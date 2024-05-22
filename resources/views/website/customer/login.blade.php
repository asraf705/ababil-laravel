@extends('website.master')

@section('title')
    Login
@endsection

@section('userlogin')
    active
@endsection

@section('body')
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2 class="text-center">Login</h2>
                            <hr>
                        </div>

                        <?php
                        if (session('nameMessage') == 'nameMessage') {
                            $nameError = "<p style='color: red; font: 16px sans-serif; f'>Please use valid email or phone number <i class=' fa fa-info-circle'></i></p>";
                        } else {
                            $nameError = '';
                        }

                        if (session('passwordMessage') == 'passwordMessage') {
                            $passwordError = "<p style='color: red; font: 16px sans-serif;'>Please use valid password <i class=' fa fa-info-circle'></i></p>";
                        } else {
                            $passwordError = '';
                        }
                        ?>

                        <form action="{{ route('customer.login') }}" method="post" class="theme-form">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control" id="email" name="user_name"
                                        placeholder="Phone Number or Email" required />
                                </div>

                                <div class="col-md-12 text-right">
                                    <?php echo $nameError; ?>
                                </div>

                                <div class="col-12 mb-3">
                                    <input type="password" class="form-control" name="password" id=""
                                        placeholder="Password" required />

                                </div>

                                <div class="col-md-12 text-right">
                                    <?php echo $passwordError; ?>
                                </div>

                                <div class="cart-btn mt-15 col-12">
                                    <button type="submit" class="btn amado-btn w-100">Login</button>
                                </div>
                            </div>
                        </form>
                        <div class="row mt-2">
                            <div class="col-md-8">
                                <p>Create an Account<a href="{{ route('customer.register') }}"
                                        style="color: #fbb710; font: 16px sans-serif;"> Register</a></p>
                            </div>
                            <div class="col-md-4 text-right">
                                <a href="" style="color: #fbb710; font: 16px sans-serif;">Forgot your
                                    password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const inputField = document.getElementById('email');

        inputField.addEventListener('input', (e) => {
            const inputValue = e.target.value;
            if (isValidEmail(inputValue)) {
                // input is an email
            } else if (isValidPhoneNumber(inputValue)) {
                // input is a phone number
            } else {
                // input is neither an email nor a phone number
            }
        });

        function isValidEmail(email) {
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return emailRegex.test(email);
        }

        function isValidPhoneNumber(phoneNumber) {
            const phoneRegex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
            return phoneRegex.test(phoneNumber);
        }
    </script>
@endsection
