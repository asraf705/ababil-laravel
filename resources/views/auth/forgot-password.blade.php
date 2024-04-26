<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ababil|Admin|Login</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/app.min.css">
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
                                <h4>Forgot Password</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">We will send a link to reset your password</p>

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Forgot Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="mb-4 text-muted text-center">
                                Create an Account <a href="{{ route('register') }}">Register</a>
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


</html>
