    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="{{route('home')}}"><img src="{{asset('/')}}website/assets/img/core-img/logo2.png" alt=""></a>
                        </div>
                        <div class="hover-content">
                            <hr>
                            <h4 class="text-white">Message</h4>
                            <p>pagrap</p>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights <i
                                class="fa fa-heart-o" aria-hidden="true"></i><a href="{{route('home')}}" target="_blank">
                                Ababil </a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#footerNavContent" aria-controls="footerNavContent"
                                    aria-expanded="false" aria-label="Toggle navigation"><i
                                        class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item @yield('home')">
                                            <a class="nav-link" href="{{route('home')}}">Home</a>
                                        </li>
                                        <li class="nav-item @yield('template')">
                                            <a class="nav-link" href="{{route('template')}}">template</a>
                                        </li>
                                        <li class="nav-item @yield('team')">
                                            <a class="nav-link" href="{{route('team')}}">Team</a>
                                        </li>
                                        {{-- <li class="nav-item @yield('price')">
                                            <a class="nav-link" href="{{route('price')}}">Price</a>
                                        </li> --}}
                                        <li class="nav-item @yield('userlogin')">
                                            <a class="nav-link" href="{{route('userlogin')}}">Login</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->
