<!-- Mobile Nav (max width 767px)-->
<div class="mobile-nav">
    <!-- Navbar Brand -->
    <div class="amado-navbar-brand">
        <a href="{{ route('home') }}"><img src="{{ asset('/') }}website/assets/img/core-img/logo.png"
                alt=""></a>
    </div>
    <!-- Navbar Toggler -->
    <div class="amado-navbar-toggler">
        <span></span><span></span><span></span>
    </div>
</div>

<!-- Header Area Start -->
<header class="header-area clearfix">
    <!-- Close Icon -->
    <div class="nav-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <!-- Logo -->
    <div class="logo">
        <a href="{{ route('home') }}"><img src="{{ asset('/') }}website/assets/img/core-img/logo.png"
                alt=""></a>
    </div>
    <!-- Amado Nav -->
    <nav class="amado-nav">
        <ul>
            <li class="@yield('home')"><a href="{{ route('home') }}">Home</a></li>
            <li class="@yield('template')"><a href="{{ route('template') }}">Template</a></li>
            <li class="@yield('price')"><a href="{{ route('price') }}">Price</a></li>
            <li class="@yield('team')"><a href="{{ route('team') }}">Team</a></li>
            @if (Session::get('customer_id'))
                <li class="@yield('customer')"><a href="{{ route('customer.profile') }}" data-bs-toggle="dropdown">
                        <div class="d-flex">
                            @if ($customerInfo->image == 0)
                                <img src="{{ asset('/')}}upload/default-images/default-profile.jpg"
                                    alt="default-profile" class="d-flex"
                                    style="width: 50px; height: 50px; border-radius: 50%;" id='image'>
                            @else
                                <img src="{{ asset($customerInfo->image) }}" class="d-flex" alt="profile-image"
                                    style=" width: 50px; height: 50px; border-radius: 50%;" id='image'>
                            @endif
                            <div style="padding:10%">
                            {{ Session::get('customer_name') }}
                            </div>
                        </div>
                    </a>
                </li>
            @else
                <li class="@yield('userlogin')"><a href="{{ route('customer.login') }}">Login</a></li>
            @endif

            {{-- <!-- <li class="active"><a href="{{route('home')}}">Home</a></li> --> --}}

        </ul>
    </nav>
    <!-- Button Group -->
    <br>
    <!-- Cart Menu -->
    <div class="cart-fav-search mb-100">
        <a href="{{ route('carts.index') }}" class="cart-nav @yield('actv-cart')"><img
                src="{{ asset('/') }}website/assets/img/core-img/cart.png" alt=""> Cart
            <span>({{ Cart::count() }})</span></a>
        {{-- <a href="#" class="fav-nav"><img src="{{ asset('/') }}website/assets/img/core-img/favorites.png"
                alt=""> Favourite</a> --}}
        <a href="#" class="search-nav"><img src="{{ asset('/') }}website/assets/img/core-img/search.png"
                alt=""> Search</a>
    </div>

    <!-- Social Button -->
    <div class="social-info d-flex justify-content-between">
        @foreach ($themeInfos as $themeInfo)
            <a href="{{ $themeInfo->facebook_url }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="{{ $themeInfo->instagram_url }}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="{{ $themeInfo->twitter_url }}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="{{ $themeInfo->youtube_url }}"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            <a href="{{ $themeInfo->linked_in_url }}"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
        @endforeach

    </div>
</header>
<!-- Header Area End -->
