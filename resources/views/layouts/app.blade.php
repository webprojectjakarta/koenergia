<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-189300368-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-189300368-1');
    </script>
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

    <!-- w3school css -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    <style>
    .mySlides {display:none;}
    </style>
    <!-- w3school css -->

    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="{{ asset('asset/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/slideshow.css') }}">
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
        <span><i><img src="asset/images/load.png" width="28px" height="28px"></i></span>
        
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
    
</body>
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

    {{-- @include('layouts.js') --}}

    {{-- <script>
var myIndex = 0;
carousel();
function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000);    
}
    </script> --}}

    @section('js')
    @show

</html>