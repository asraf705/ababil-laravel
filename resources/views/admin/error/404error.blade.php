<!DOCTYPE html>
<html lang="en">


<!-- errors-404.html  21 Nov 2019 04:05:02 GMT -->

<head>
    @include('admin.includes.meta')

    <!-- Title  -->
    <title>Ababil | 404 Error </title>

    <!-- Style file -->

    @include('admin.includes.style')
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="page-error">
                    <div class="page-inner">
                        <h1>404</h1>
                        <div class="page-description">
                            The page you were looking for could not be found.
                        </div>
                        <div class="page-search">
                            <form>
                                <div class="form-group floating-addon floating-addon-not-append">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-search"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-lg">
                                                Search
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="mt-3">
                                <a href="{{ route('dashboard') }}">Back to Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    @include('admin.includes.scripts')

</html>