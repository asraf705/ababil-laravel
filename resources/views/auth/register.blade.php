<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ababil|Admin|Register</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/app.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/bundles/jquery-selectric/selectric.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/custom.css">
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="card card-primary">
                            <img class="logo" src="{{ asset('/') }}admin/assets/img/logo.png" style="border-radius: 5%">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>
                            <div class="card-body">

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input id="name" class="form-control" type="text" name="name"
                                            :value="old('name')" required autofocus autocomplete="name" />
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" class="form-control" type="email" name="email"
                                            :value="old('email')" required autocomplete="username" />
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="password" class="d-block">Password</label>
                                            <input id="password" class="form-control pwstrength" type="password"
                                                name="password" required autocomplete="new-password" />

                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                        </div>

                                        <div class="form-group col-6">
                                            <label for="password_confirmation" class="d-block">Password
                                                Confirmation</label>
                                            <input id="password_confirmation" class="form-control" type="password"
                                                name="password_confirmation" required autocomplete="new-password" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="agree" class="custom-control-input"
                                                id="agree">
                                            <label class="custom-control-label" for="agree">I agree with the terms
                                                and conditions</label>
                                        </div>
                                    </div>

                                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                        <div class="mt-4">
                                            <x-label for="terms">
                                                <div class="flex items-center">
                                                    <x-checkbox name="terms" id="terms" required />

                                                    <div class="ml-2">
                                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                            'terms_of_service' =>
                                                                '<a target="_blank" href="' .
                                                                route('terms.show') .
                                                                '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                                __('Terms of Service') .
                                                                '</a>',
                                                            'privacy_policy' =>
                                                                '<a target="_blank" href="' .
                                                                route('policy.show') .
                                                                '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                                __('Privacy Policy') .
                                                                '</a>',
                                                        ]) !!}
                                                    </div>
                                                </div>
                                            </x-label>
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <button class="btn btn-primary btn-lg btn-block">
                                            {{ __('Register') }}
                                        </button>
                                    </div>

                                </form>
                            </div>
                            <div class="mb-4 text-muted text-center">
                                Already Registered? <a href="{{ route('login') }}">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('/') }}admin/assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('/') }}admin/assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('/') }}admin/assets/js/page/auth-register.js"></script>
    <!-- Template JS File -->
    <script src="{{ asset('/') }}admin/assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('/') }}admin/assets/js/custom.js"></script>
</body>


</html>
