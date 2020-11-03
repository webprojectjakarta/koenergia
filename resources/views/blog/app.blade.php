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
    <nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{asset('asset/images/logo.png')}}" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="primary_menu">
                <ul class="nav navbar-nav mainmenu">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/')}}#about_page">About</a></li>
                    <li><a href="{{url('/')}}#solution_page">Solution</a></li>
                    <li class="active"><a href="{{url('blog')}}">Blog</a></li>
                    <li><a href="{{url('project')}}">Project</a></li>
                    <li><a href="{{url('partner')}}">Partnership</a></li>
                    <li><a href="{{url('/')}}#contact_page">Contacts</a></li>
                </ul>
                <div class="right-button hidden-xs">
                    <a href="{{url('login')}}">Sign In</a>
                </div>
            </div>
        </div>
    </nav>
    @show
    <!-- Home Area -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1 class="white-color">Blog</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{'/'}}">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    @include('blog.blog')
    <!-- End Home Area -->
    
    @yield('content')

    @section('footer')
    @include('blog.footer')
    @show
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
