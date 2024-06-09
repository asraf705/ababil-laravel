<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}"> <img alt="image" src="{{ asset('/') }}admin/assets/img/logo.png"
                    class="header-logo" /> <span class="logo-name"></span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown @yield('dashboard')">
                <a href="{{ route('dashboard') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Module Settings</li>
            <li class="dropdown @yield('module')">
                <a href="#" class="menu-toggle nav-link has-dropdown "><i data-feather="command"></i><span>Module
                        Settings</span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown @yield('category')"><a class="nav-link"
                            href="{{ route('categories.index') }}">Category</a></li>
                    <li class="dropdown @yield('product-type')"><a class="nav-link"
                            href="{{ route('product-type.index') }}">Product Type</a></li>
                    <li class="dropdown @yield('tex')"><a class="nav-link"
                            href="{{ route('texInfo.edit', 1) }}">Manage Tax & Currency</a></li>
                    <li class="dropdown @yield('post')"><a class="nav-link" href="{{ route('post.index') }}">Post</a>
                    </li>
                    <li class="dropdown @yield('skill')"><a class="nav-link"
                            href="{{ route('skill.index') }}">Skill(Lang.)</a></li>
                </ul>
            </li>

            <li class="menu-header">Product</li>

            {{-- <li class="dropdown @yield('discount')">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="box"></i><span>Discount</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('discountes.index') }}">Manage Discount</a></li>
                </ul>
            </li> --}}

            <li class="dropdown @yield('products')">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="box"></i><span>Product</span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown @yield('themes')"><a class="nav-link"
                            href="{{ route('products.index') }}">Manage Theme</a></li>
                    <li class="dropdown @yield('themePrice')"><a class="nav-link"
                            href="{{ route('theme-price.index') }}">Manage Price</a></li>
                </ul>
            </li>

            <li class="menu-header">Order</li>
            <li class="dropdown @yield('allOrder')">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="copy"></i><span>Order</span></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown @yield('manageOrder')" href="{{ route('admin-order.manage') }}">Manage Order</a></li>
                    <li><a class="dropdown @yield('processingOrder')" href="{{ route('admin-order.processingOrder') }}">Order Processing</a></li>
                    <li><a class="dropdown @yield('completeOrder')" href="{{ route('admin-order.completeOrder') }}">Order Complete</a></li>

                </ul>
            </li>

            <li class="menu-header">Report</li>
            <li class="dropdown @yield('allReport')">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="copy"></i><span>Report</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link @yield('sellesReport')" href="{{ route('admin.sellesReport') }}">Selles Report</a></li>
                    <li><a class="nav-link @yield('productReport')" href="{{ route('admin.productReport') }}">Product Report</a></li>
                </ul>
            </li>

            <li class="menu-header">Account</li>
            <li class="dropdown @yield('allaccount')">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Members</span></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown @yield('')" href="#">Team Members</a></li>
                    <li><a class="dropdown @yield('customerUser')" href="{{ route('customer.account') }}">Customer Account</a></li>
                </ul>
            </li>

            <li class="menu-header">Testimonial</li>
            <li class="dropdown @yield('testimonials')">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="copy"></i><span>Testimonial</span></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown @yield('testimonial')" href="{{ route('testimonial.index') }}">Manage
                            Testimonial</a></li>
                </ul>
            </li>

            <!-- theime -->
            <li class="menu-header">Theme</li>
            <li class="dropdown @yield('themes')">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="copy"></i><span>Theme</span></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown @yield('theme-infos')" href="{{ route('theme-info.edit', 1) }}">Theme Info</a>
                    </li>
                    <li><a class="dropdown @yield('policyInfo')" href="{{ route('privacy-policy.edit', 1) }} ">Privacy
                            Policy</a></li>
                </ul>
            </li>

        </ul>
    </aside>
</div>
