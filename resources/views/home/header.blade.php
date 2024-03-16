<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>@yield('pageTitle') - Art Trade Hub</title>

    <!--=== Favicon ===-->

    <!--== Google Fonts ==-->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700"/>
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i"/>

    <!--=== Bootstrap CSS ===-->
    <link href="assets2/css/vendor/bootstrap.min.css" rel="stylesheet">
    <!--=== Font-Awesome CSS ===-->
    <link href="assets2/css/vendor/font-awesome.css" rel="stylesheet">
    <!--=== Plugins CSS ===-->
    <link href="assets2/css/plugins.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="assets2/css/style.css" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="assets2/js/vendor/modernizr-2.8.3.min.js"></script>



</head>
<body>

<!--== Header Area Start ==-->
<header id="header-area">
    <div class="ruby-container">
        <div class="row">
            <!-- Logo Area Start -->
            <div class="col-3 col-lg-1 col-xl-2 m-auto">
                <a href="{{url('/')}}" class="logo-area">
                    <img src="assets2/img/logo.png" alt="Logo" class="img-fluid2"/>
                </a>
            </div>
            <!-- Logo Area End -->

            <!-- Navigation Area Start -->
            <div class="col-3 col-lg-9 col-xl-8 m-auto">
                <div class="main-menu-wrap">
                    <nav id="mainmenu">
                        <ul>
                            <li ><a href="{{url('/')}}">Home</a>

                            </li>

                            <li ><a href="{{route('shop')}}">Shop</a>

                            </li>
                            <li ><a href="#">About</a>

                            </li>
                            <li ><a href="#">Contact</a>

                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Navigation Area End -->

            <!-- Header Right Meta Start -->
            <div class="col-6 col-lg-2 m-auto">
                <div class="header-right-meta text-right">
                    <ul>
                        <li><a href="#" class="modal-active"><i class="fa fa-search"></i></a></li>
                        <li class="settings"><a ><i class="fa fa-user"></i></a>
                            <div class="site-settings d-block d-sm-flex">


                                <dl class="my-account">
                                    <dt>My Account</dt>

                                    @if (Route::has('login'))
                                        @auth
                                        @if (Auth::user()->role == 'admin')
                                            <dd><a href="{{ url('/admin/dashboard') }}">Dashboard</a></dd>
                                            <dd><a href="{{ route('admin.logout') }}">Logout</a></dd>
                                        @elseif(Auth::user()->role == 'seller')
                                            <dd><a href="{{ url('/seller/dashboard') }}">Dashboard</a></dd>
                                            <dd><a href="{{ route('seller.logout') }}">Logout</a></dd>
                                        @elseif(Auth::user()->role == 'client')
                                            <dd><a href="{{ url('/client/dashboard') }}">Dashboard</a></dd>
                                            <dd><a href="{{ route('client.logout') }}">Logout</a></dd>
                                        @endif
                                    @else
                                        <dd><a href="{{route('login')}}">Sign In</a></dd>
                                @endauth
                            @endif



                                </dl>

                            </div>

                        </li>
                        @if (Auth::check() && Auth::user()->role == 'client')
                        <li class="shop-cart"><a href="{{route('cart')}}"><i class="fa fa-shopping-bag"></i> </a>

                    </li>
                    @endif

                    </ul>
                </div>
            </div>
            <!-- Header Right Meta End -->
        </div>
    </div>
</header>
<!--== Header Area End ==-->

<!--== Search Box Area Start ==-->
<div class="body-popup-modal-area">
    <span class="modal-close"><img src="assets2/img/cancel.png" alt="Close" class="img-fluid"/></span>
    <div class="modal-container d-flex">
        <div class="search-box-area">
            <div class="search-box-form">
                <form action="#" method="post">
                    <input type="search" placeholder="type keyword and hit enter"/>
                    <button class="btn" type="button"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--== Search Box Area End ==-->
<!--== Banner // Slider Area Start ==-->

<!--== Banner Slider End ==-->

@yield('bodypart')

@include('home.footer')

<!-- Scroll to Top Start -->
<a href="#" class="scrolltotop"><i class="fa fa-angle-up"></i></a>
<!-- Scroll to Top End -->


<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src="{{ asset('../assets2/js/vendor/jquery-3.3.1.min.js') }}"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src="{{ asset('../assets2/js/vendor/jquery-migrate-1.4.1.min.js') }}"></script>
<!--=== Popper Min Js ===-->
<script src="{{ asset('../assets2/js/vendor/popper.min.js') }}"></script>
<!--=== Bootstrap Min Js ===-->
<script src="{{ asset('../assets2/js/vendor/bootstrap.min.js') }}"></script>
<!--=== Plugins Min Js ===-->
<script src="{{ asset('../assets2/js/plugins.js') }}"></script>

<!--=== Active Js ===-->
<script src="{{ asset('../assets2/js/active.js') }}"></script>
</body>
