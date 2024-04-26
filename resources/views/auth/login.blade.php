<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ababil|Admin|Login</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/app.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/bundles/bootstrap-social/bootstrap-social.css">
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
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary">

                            <img class="logo" src="{{ asset('/') }}admin/assets/img/logo.png" style="border-radius: 5%">
                            <div class="card-header">
                                <h4 class="text-center">Login</h4>
                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>

                            <div class="card-body">

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" class="form-control" type="email" name="email"
                                            :value="old('email')" required autofocus autocomplete="username" />
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <div class="float-right">
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}" class="text-small">
                                                        Forgot Password?
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <input id="password" class="form-control" type="password" name="password"
                                            required autocomplete="current-password" />
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input"
                                                tabindex="3" id="remember-me">
                                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>
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
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="{{ asset('/') }}admin/assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('/') }}admin/assets/js/custom.js"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

</html>
