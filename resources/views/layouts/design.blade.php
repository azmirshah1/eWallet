<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>E-Wallet - @yield('title')</title>

    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

    <!-- Scripts -->
 {{--    <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
{{--     <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

        <!-- Main css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/css/metisMenu.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/css/slicknav.min.css') }}" rel="stylesheet"> 

    <!-- Start datatable css -->
    <link href="{{ asset('assets/css/dataTables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dataTables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dataTables/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dataTables/responsive.jqueryui.min.css') }}" rel="stylesheet">

    <!-- others css -->
    <link href="{{ asset('assets/css/typography.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/css/default-css.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet"> 

    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- Main CSS End -->

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

    <!-- page container area start -->
    <!-- page title area start -->
     @if (session('status'))
        <div class="alert alert-success" role="alert">
             {{ session('status') }}
        </div>
    @endif
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <a href="{{ url('/home') }}"><img class="page-title pull-left" src="assets/images/login/ewallet logo.png" alt="avatar"></a>
                    <ul class="breadcrumbs pull-left"><br>
                        <li><a><h3>@yield('title')</h3></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">

                    <img class="avatar user-thumb" src="assets/images/avatar/{{ Auth::user()->avatar}}" alt="avatar">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}<i class="fa fa-angle-down"></i></h4>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile">Edit Avatar</a>
                        <a class="dropdown-item" href="api/userurl">Users API</a>
                        <a class="dropdown-item" href="setting">Settings</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
    <!-- Content Start -->
    <main>
        @yield('content')
    </main>
    <!-- Content End -->

    <!-- footer area start-->
    <footer>
        <div class="footer-area">
            <p>Design By <a href="https://azmirshah.com">Azmir Shah</a> © Copyright 2018 . All right reserved</p>
        </div>
    </footer>
    <!-- footer area end-->
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

    <script type="text/javascript">

    const request = new XMLHttpRequest();
     
    request.open('GET', 'http://api.coinlayer.com/api/live?access_key=022c4f9851295e8e3491e702e6189ac8');

    request.send(); 
     
    request.onload = () => {
      if (request.status === 200) {
      console.log("Success")
        //Extracting data
        var BTCRates = JSON.parse(request.response).rates.BTC;

        
/*        //Creating table
        var table="<table>";
        table+="<tr><td>Currency </td><td>Price</td></tr>"; 
        table+="<tr><td>"+target+"</td><td>"+BTCprice+"</td></tr>";
        table+="</table>";
     */
        //Showing the table inside table
        
        document.getElementById("BTCRates").innerHTML="MYR: " + BTCRates;
      
        request.send();   
      } 
    };
     
    request.onerror = () => {
      console.log("error")
    };

    //usage:
    readTextFile("https://api.exchangeratesapi.io/latest?base=USD", function(text){
    var MYRRates = JSON.parse(text).rates.MYR;
    
    document.getElementById("MYRRates").innerHTML="MYR: " + MYRRates;
});

    </script>



    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>

    <!-- all line chart activation -->
    <script src="{{ asset('assets/js/line-chart.js') }}"></script>

    <!-- Start datatable js -->
    <script src="{{ asset('assets/js/dataTables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables/dataTables.bootstrap4.min.js') }}"></script>
    <script src=" {{ asset('assets/js/dataTables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables/responsive.bootstrap.min.js') }}"></script>

    <!-- all pie chart -->
    <script src="{{ asset('assets/js/pie-chart.js') }}"></script>

    <!-- others plugins -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>

