@extends('website.master')

@section('title')
    Price
@endsection

@section('price')
    active
@endsection

@section('body')
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row g-3">
                <div class="col-12 col-lg-12">
                    <h2 style="text-align:center">Responsive Pricing Tables</h2>
                    <p style="text-align:center">Resize the browser window to see the effect.</p>

                    <div class="columns">
                        <ul class="price">
                            <li class="header">Basic</li>
                            <li>10GB Storage</li>
                            <li class="grey">10 Emails</li>
                            <li>10 Domains</li>
                            <li class="grey">1GB Bandwidth</li>
                            <li>$ 9.99</li>
                            <li class="grey"><a href="#" class="button">Sign Up</a></li>
                        </ul>
                    </div>

                    <div class="columns">
                        <ul class="price">
                            <li class="header" style="background-color:#CBA070">Pro</li>
                            <li>25GB Storage</li>
                            <li class="grey">25 Emails</li>
                            <li>25 Domains</li>
                            <li class="grey">2GB Bandwidth</li>
                            <li>$ 24.99</li>
                            <li class="grey"><a href="#" class="button">Sign Up</a></li>
                        </ul>
                    </div>

                    <div class="columns">
                        <ul class="price">
                            <li class="header">Premium</li>
                            <li>50GB Storage</li>
                            <li class="grey">50 Emails</li>
                            <li>50 Domains</li>
                            <li class="grey">5GB Bandwidth</li>
                            <li>$ 49.99</li>
                            <li class="grey"><a href="#" class="button">Sign Up</a></li>
                        </ul>
                    </div>

                    <div class="columns">
                        <ul class="price">
                            <li class="header" style="background-color:#CBA070">Custome</li>
                            <li>25GB Storage</li>
                            <li class="grey">25 Emails</li>
                            <li>25 Domains</li>
                            <li class="grey">2GB Bandwidth</li>
                            <li>$ 24.99</li>
                            <li class="grey"><a href="#" class="button">Sign Up</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
