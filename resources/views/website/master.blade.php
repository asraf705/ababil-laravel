<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    @include('website.includes.meta')

    @foreach ($themeInfos as $themeInfo)
        <!-- Title  -->
        <title>{{ $themeInfo->name }} | @yield('title')</title>
        <link rel='shortcut icon' type='image/x-icon' href='{{ asset($themeInfo->favicon) }}' />
    @endforeach

    <!-- Core Style CSS -->
    @include('website.includes.style')

</head>

<body>
    <div class="loader"></div>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="{{ asset('/') }}website/assets/img/core-img/search.png"
                                    alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">


        <!-- left Area Start -->
        @include('website.includes.left-sidebar')
        <!-- left Area End -->

        <!-- Body Area Start -->
        @yield('body')
        <!--  Area End -->

    </div>
    <!-- ##### Main Content Wrapper End ##### -->


    <!-- ##### Footer Area Start ##### -->
    @include('website.includes.footer')
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    @include('website.includes.script')

</body>

</html>
