<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Sumon Rahman">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Koenergia</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{ asset('asset/images/apple-touch-icon.png') }}">
    <link rel="shortcut icon" type="image/ico" href="{{ asset('asset/images/icon.png') }}">
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/animate.css') }}">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="{{ asset('asset/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/responsive.css') }}">
    <script src="{{ asset('asset/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/9d10450ac7.js" crossorigin="anonymous"></script>
    @section('css')

    @show
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!-- Preloader-content -->
    <div class="preloader">
        <span><i class="lnr lnr-sun"></i></span>
        
    </div>
    <!-- Menu Area -->
    @section('menu')
    @include('layouts.menu')
    @show
    <!-- Home Area -->
    @section('home')
    @include('content.home')
    @show
    <!-- End Home Area -->

    <!-- About-Area -->
    @section('about')
    @include('content.about')
    @show
    <!-- About-Area-End -->
    <!-- Feature-Area -->
    @section('solution')
    @include('content.solution')
    @show
    <!-- Feature-Area-End -->

    <!-- Footer-Area -->
    @section('contact')
    @include('content.contact')
    @show
    @yield('content')
    <!-- Footer-Area-End -->
    <!--Vendor-JS-->
    <script src="{{ asset('asset/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('asset/js/vendor/jquery-ui.js') }}"></script>
    <script src="{{ asset('asset/js/vendor/bootstrap.min.js') }}"></script>
    <!--Plugin-JS-->
    <script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('asset/js/contact-form.js') }}"></script>
    <script src="{{ asset('asset/js/ajaxchimp.js') }}"></script>
    <script src="{{ asset('asset/js/scrollUp.min.js') }}"></script>
    <script src="{{ asset('asset/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('asset/js/wow.min.js') }}"></script>
    <!--Main-active-JS-->
    <script src="{{ asset('asset/js/main.js') }}"></script>
    @section('js')
    @show
</body>

</html>
