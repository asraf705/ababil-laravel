    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                @foreach ($themeInfos as $themeInfo)
                    <!-- Single Widget Area -->
                    <div class="col-12 col-lg-7">
                        <div class="single_widget_area">
                            <!-- Logo -->
                            <div class="footer-logo mr-50">
                                <a href="{{ route('home') }}"><img
                                        src="{{ asset('/') }}website/assets/img/core-img/logo.png" alt=""></a>
                            </div>
                            <table>
                                <td>
                                    <div class="hover-content">
                                        <hr color="white">
                                        <h4 class="text-white">Message</h4>
                                        <p class="col-md-12" style="text-align: justify;">{{ $themeInfo->biography }}
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div class="hover-content">
                                        <p style="text-align: justify;">
                                            <samp
                                                class="{{ $themeInfo->contact_mobile == 'NULL' ? '' : 'hidden' }}">+{{ $themeInfo->contact_mobile }}</samp><br />
                                            {{-- <samp class="{{ $themeInfo->support_mobile == 'NULL' ? '' : 'hidden'  }}">{{$themeInfo->support_mobile}}</samp><br/> --}}
                                            <i class="fa fa-whatsapp " aria-atomic="true"></i><a class="whatappstage"
                                                href="https://wa.me/+{{ $themeInfo->whapp_mobile }}" target="_blank">
                                                +{{ $themeInfo->whapp_mobile }}</a><br />
                                            {{ $themeInfo->contact_email }}<br />
                                            {{ $themeInfo->address }}
                                        </p>

                                    </div>
                                </td>
                            </table>

                            <!-- Copywrite Text -->
                            <p class="copywrite">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                {{ date('Y', strtotime($themeInfo->updated_at)) }}
                                 All rights <i class="fa fa-heart-o" aria-hidden="true"></i><a
                                    href="{{ route('home') }}">
                                    {{ $themeInfo->name }} </a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                @endforeach

                <!-- Single Widget Area -->
                <div class="col-12 col-lg-5">
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
                                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li class="nav-item @yield('template')">
                                            <a class="nav-link" href="{{ route('template') }}">template</a>
                                        </li>
                                        <li class="nav-item @yield('team')">
                                            <a class="nav-link" href="{{ route('team') }}">Team</a>
                                        </li>
                                        {{-- <li class="nav-item @yield('price')">
                                            <a class="nav-link" href="{{route('price')}}">Price</a>
                                        </li> --}}
                                        <li class="nav-item @yield('userlogin')">
                                            <a class="nav-link" href="{{ route('userlogin') }}">Login</a>
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
