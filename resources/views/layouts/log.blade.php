<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--title-->
    <title>E-Wallet - @yield('title')</title>
    
    {{-- favicon --}}
    <link rel="shortcut icon" href="{{{ asset('assets/images/icon/favicon/ew_fav.ico') }}}">

    <!-- Main css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/css/metisMenu.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/css/slicknav.min.css') }}" rel="stylesheet"> 

    <!-- others css -->
    <link href="{{ asset('assets/css/typography.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/css/default-css.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet"> 
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Main CSS End -->


    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <!-- Content Start -->
    <main>
        @yield('content')
    </main>
    <!-- Content End -->

    <!-- page container area end -->

    <!-- jquery latest version -->
    <script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>

    <!-- bootstrap 4 js -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"> </script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- others plugins -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

</html>

