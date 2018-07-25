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

        <!-- Start Switcher -->
        <div class="switcher-wrapper">
            <div class="demo_changer">
                <div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
                <div class="form_holder">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="predefined_styles">
                                <div class="skin-theme-switcher">
                                    <h4>Color</h4>
                                    <a href="#" data-switchcolor="color1" class="styleswitch" style="background-color:#f76d2b;"> </a>
                                    <a href="#" data-switchcolor="color2" class="styleswitch" style="background-color:#de483d;"> </a>
                                    <a href="#" data-switchcolor="color3" class="styleswitch" style="background-color:#228dcb;"> </a>
                                    <a href="#" data-switchcolor="color4" class="styleswitch" style="background-color:#00bff3;"> </a>
                                    <a href="#" data-switchcolor="color5" class="styleswitch" style="background-color:#2dcc70;"> </a>
                                    <a href="#" data-switchcolor="color6" class="styleswitch" style="background-color:#6054c2;"> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Switcher -->

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
                    <div class="col-md-4 col-xs-6">
                        <nav class="b-topBar__nav">
                            <ul>
                                <li><a href="#">Cart</a></li>
                                <li><a href="#">Register</a></li>
                                <li><a href="#">Sign in</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <div class="b-topBar__lang">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle='dropdown'>Language</a>
                                <a class="m-langLink dropdown-toggle" data-toggle='dropdown' href="#"><span class="b-topBar__lang-flag m-en"></span>EN<span class="fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu h-lang">
                                    <li><a class="m-langLink dropdown-toggle" data-toggle='dropdown' href="#"><span class="b-topBar__lang-flag m-en"></span>EN</a></li>
                                    <li><a class="m-langLink dropdown-toggle" data-toggle='dropdown' href="#"><span class="b-topBar__lang-flag m-es"></span>ES</a></li>
                                    <li><a class="m-langLink dropdown-toggle" data-toggle='dropdown' href="#"><span class="b-topBar__lang-flag m-de"></span>DE</a></li>
                                    <li><a class="m-langLink dropdown-toggle" data-toggle='dropdown' href="#"><span class="b-topBar__lang-flag m-fr"></span>FR</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--b-topBar-->

        <nav class="b-nav">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-4">
                        <div class="b-nav__logo wow slideInLeft" data-wow-delay="0.3s">
                            <h3><a href="home.html">Auto<span>Club</span></a></h3>
                            <h2><a href="home.html">AUTO DEALER TEMPLATE</a></h2>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-8">
                        <div class="b-nav__list wow slideInRight" data-wow-delay="0.3s">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse navbar-main-slide" id="nav">
                                <ul class="navbar-nav-menu">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle='dropdown' href="home.html">Home <span class="fa fa-caret-down"></span></a>
                                        <ul class="dropdown-menu h-nav">
                                            <li><a href="home.html">Home Page 1</a></li>
                                            <li><a href="home-2.html">Home Page 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle='dropdown' href="#">Grid <span class="fa fa-caret-down"></span></a>
                                        <ul class="dropdown-menu h-nav">
                                            <li><a href="listings.html">listing 1</a></li>
                                            <li><a href="listingsTwo.html">listing 2</a></li>
                                            <li><a href="listTable.html">listing 3</a></li>
                                            <li><a href="listTableTwo.html">listing 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="compare.html">compare</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="article.html">Services</a></li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle='dropdown' href="#">Blog <span class="fa fa-caret-down"></span></a>
                                        <ul class="dropdown-menu h-nav">
                                            <li><a href="blog.html">Blog 1</a></li>
                                            <li><a href="blogTwo.html">Blog 2</a></li>
                                            <li><a href="404.html">Page 404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="submit1.html">Shop</a></li>
                                    <li><a href="contacts.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav><!--b-nav-->

















                <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Auto Club') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

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
