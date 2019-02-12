<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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

    <!-- Main CSS End -->

</head>
<body>


<!-- jquery latest version -->
<script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>

<!-- bootstrap 4 js -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- <script src="{{ asset('assets/js/bootstrap.min.js') }}"> </script>-->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>


<!-- others plugins -->
<script src="assets/js/plugins.js"></script>
<script src="assets/js/scripts.js"></script>

</body>
</html>
