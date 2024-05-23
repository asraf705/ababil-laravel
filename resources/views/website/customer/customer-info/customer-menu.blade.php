<div class="catagories-menu">
    <ul>
        <li class="@yield('customerProfile')"><a href="{{route('customer.profile')}}">Profile</a></li>
        <li class="@yield('customerOder')"><a href="{{route('customer.order')}}">Orders</a></li>
        <li class="@yield('ordertracking')"><a href="{{route('customer.order')}}">Order Tracking</a></li>
        <li class="@yield('customerNewPassword')"><a href="">Change Password</a></li>
        <li><a href="{{route('customer.logout')}}">Logout</a></li>
    </ul>
</div>
