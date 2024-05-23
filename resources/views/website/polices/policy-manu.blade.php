<div class="catagories-menu">
    <ul>
        <li class="@yield('policy-One')"><a href="{{ route('policyOne') }}">{{$policy->one_name}}</a></li>
        <li class="@yield('policy-Two')"   {{$policy->two_name == Null ? 'hidden' : ' ' }}>  <a href="{{ route('policyTwo') }}">{{$policy->two_name}}</a></li>
        <li class="@yield('policy-Three')" {{$policy->three_name == Null ? 'hidden' : ' ' }}><a href="{{ route('policyThree') }}">{{$policy->three_name}}</a></li>
        <li class="@yield('policy-Four')"  {{$policy->four_name == Null ? 'hidden' : ' ' }}> <a href="{{ route('policyFour') }}">{{$policy->four_name}}</a></li>
    </ul>
</div>
