<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images\favicon.png') }}" type="image/ico" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Auto Club') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">

    <!-- SWITCHER -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="{{ asset('assets/switcher/css/switcher.css') }}" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/css/color1.css') }}" title="color1" media="all"  />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/css/color2.css') }}" title="color2" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/css/color3.css') }}" title="color3" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/css/color4.css') }}" title="color4" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/css/color5.css') }}" title="color5" media="all" data-default-color="true"/>
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/css/color6.css') }}" title="color6" media="all" />

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="m-home" data-scrolling-animations="true" data-equal-height=".b-auto__main-item">

        <!-- Loader -->
        <div id="page-preloader"><span class="spinner"></span></div>
        <!-- Loader end -->


        <header class="b-topBar">
            <div class="container wow slideInDown" data-wow-delay="0.7s">
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="b-topBar__addr">
                            <span class="fa fa-map-marker"></span>
                            202 W 7TH ST, LOS ANGELES, CA 90014
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <div class="b-topBar__tel">
                            <span class="fa fa-phone"></span>
                            1-800- 624-5462
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <nav class="b-topBar__nav">
                            <ul>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                <li><a href="{{ route('login') }}">Sign in</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </header><!--b-topBar-->

        <nav class="b-nav">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-4">
                        <div class="b-nav__logo wow slideInLeft" data-wow-delay="0.3s">
                            <h3><a href="/">Auto<span>Club</span></a></h3>
                            <h2><a href="/">AUTO DEALER</a></h2>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-8">
                        <div class="b-nav__list wow slideInRight" data-wow-delay="0.3s">
                            @include('includes.menu')


                        </div>
                    </div>
                </div>
            </div>
        </nav><!--b-nav-->

















                {{--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">--}}
            {{--<div class="container">--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--{{ config('app.name', 'Auto Club') }}--}}
                {{--</a>--}}
                {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
                    {{--<span class="navbar-toggler-icon"></span>--}}
                {{--</button>--}}

                {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav mr-auto">--}}

                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav ml-auto">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                            {{--</li>--}}
                        {{--@else--}}
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--{{ __('Logout') }}--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                        {{--@csrf--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="b-footer">
        <a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <div class="b-footer__company wow slideInLeft" data-wow-delay="0.3s">
                        <div class="b-nav__logo">
                            <h3><a href="/">Auto<span>Club</span></a></h3>
                        </div>
                        <p>&copy; 2018 Designed by Mixal.</p>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="b-footer__content wow slideInRight" data-wow-delay="0.3s">
                        <div class="b-footer__content-social">
                            <a href="#"><span class="fa fa-facebook-square"></span></a>
                            <a href="#"><span class="fa fa-twitter-square"></span></a>
                            <a href="#"><span class="fa fa-google-plus-square"></span></a>
                            <a href="#"><span class="fa fa-instagram"></span></a>
                            <a href="#"><span class="fa fa-youtube-square"></span></a>
                            <a href="#"><span class="fa fa-skype"></span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer><!--b-footer-->

    <!--Main-->
    <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>

    <script src="{{ asset('assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('js/classie.js') }}"></script>

    <!--Switcher-->
    <script src="{{ asset('assets/switcher/js/switcher.js') }}"></script>
    <!--Owl Carousel-->
    <script src="{{ asset('assets/owl-carousel/owl.carousel.min.js') }}"></script>
    <!--bxSlider-->
    <script src="{{ asset('assets/bxslider/jquery.bxslider.js') }}"></script>
    <!-- jQuery UI Slider -->
    <script src="{{ asset('assets/slider/jquery.ui-slider.js') }}"></script>

    <!--Theme-->
    <script src="{{ asset('js/jquery.smooth-scroll.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
</body>
</html>
