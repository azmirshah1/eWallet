<!doctype html>
<html class="no-js" lang="en">
<javascript>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-Wallet Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
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
                                <li><a><h3>CryptoExchange</h3></a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Azmir Shah <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
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
        <!-- main content area start -->

                <hr style="border-color: #9e0039;">
                     <!-- nav tab start -->
                    <div class="col-lg-12 mt-6">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="proofOfPayment-tab" data-toggle="tab" href="#proofOfPayment" role="tab" aria-controls="proofOfPayment" aria-selected="true">Proof of Payments </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="cryptoExchange-tab" data-toggle="tab" href="#cryptoExchange" role="tab" aria-controls="cryptoExchange" aria-selected="false">Crypto Exchange </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="wallet-tab" data-toggle="tab" href="#wallet" role="tab" aria-controls="wallet" aria-selected="false">Wallet</a>
                                    </li>                                
                                </ul>
                                <div class="tab-content mt-3" id="myTabContent">
                                    <div class="tab-pane fade show active" id="proofOfPayment" role="tabpanel" aria-labelledby="proofOfPayment-tab">
                                        <!-- Start Proof Of Payment Section -->
                                        <!-- table primary start -->
                                        <div class="col-lg-12 mt-5">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h3 class="header-title">Proof of Payments</h3>
                                                    <div class="single-table">
                                                        <div class="table-responsive">
                                                            <table class="table text-center">
                                                                <thead class="text-uppercase bg-dark">
                                                                    <tr class="text-white">
                                                                        <th scope="col">ID</th>
                                                                        <th scope="col">Name</th>
                                                                        <th scope="col">Phone Number</th>
                                                                        <th scope="col">Email</th>
                                                                        <th scope="col">Proof of Payments </th>
                                                                        <th scope="col">Comment</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <th scope="row">1</th>
                                                                        <td>Azmir Shah</td>
                                                                        <td>askcoreunit</td>
                                                                        <td>+60176591091</td>
                                                                        <td><a href="assets/images/Payment/maybank.jpg">
                                                                            <i class="fa fa-file-image-o"></i></a></td>
                                                                        <td>                    
                                                                            <!-- basic modal start -->
                                                                            <!-- Button trigger modal -->
                                                                            <button type="button" class="btn btn-rounded btn-primary mb-3" data-toggle="modal" data-target="#exampleModalLong">Verify Payment </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="exampleModalLong">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title">Modal title</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <p>After confirmation is made, payment will be recorded. Are you sure?
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- basic modal end -->
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>Azrul Shah</td>
                                                                        <td>+60184737748</td>
                                                                        <td>azmirshah1@gmail.com</td>
                                                                        <td><a href="assets/images/Payment/maybank.jpg">
                                                                            <i class="fa fa-file-image-o"></i></a></td>
                                                                        <td><!-- basic modal start -->
                                                                            <!-- Button trigger modal -->
                                                                            <button type="button" class="btn btn-rounded btn-primary mb-3" data-toggle="modal" data-target="#exampleModalLong">Verify Payment </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="exampleModalLong">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title">Modal title</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <p>After confirmation is made, payment will be recorded. Are you sure?
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        <!-- basic modal end -->
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>Kamilah Ahmad</td>
                                                                        <td>+60198383728</td>
                                                                        <td>kami.ahmad@gmail.com</td>
                                                                        <td><a href="assets/images/Payment/maybank.jpg">
                                                                            <i class="fa fa-file-image-o"></i></a></td>
                                                                        <td><!-- basic modal start -->
                                                                            <!-- Button trigger modal -->
                                                                            <button type="button" class="btn btn-rounded btn-primary mb-3" data-toggle="modal" data-target="#exampleModalLong">Verify Payment </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="exampleModalLong">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title">Modal title</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <p>After confirmation is made, payment will be recorded. Are you sure?
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    <!-- basic modal end --></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>Siti Zulaika</td>
                                                                        <td>+6012374758434</td>
                                                                        <td>zulaikaRash@gmail.com</td>
                                                                        <td><a href="assets/images/Payment/maybank.jpg">
                                                                            <i class="fa fa-file-image-o"></i></a></td>
                                                                        <td><!-- basic modal start -->
                                                                            <!-- Button trigger modal -->
                                                                            <button type="button" class="btn btn-rounded btn-primary mb-3" data-toggle="modal" data-target="#exampleModalLong">Verify Payment </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="exampleModalLong">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title">Modal title</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <p>After confirmation is made, payment will be recorded. Are you sure?
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- basic modal end -->
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- table primary end -->
                                    <!-- End Proof Of Payment Section -->
                                    </div>
                                    <div class="tab-pane fade" id="cryptoExchange" role="tabpanel" aria-labelledby="cryptoExchange-tab">
                                        <!-- Start Crypto Exchange Section -->

                                        <!-- overview area start -->
                                        <div class="row">
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <h4 class="header-title mb-0">Overview</h4>
                                                            <select class="custome-select border-0 pr-3">
                                                                <option selected>Last 24 Hours</option>
                                                                <option value="0">01 July 2018</option>
                                                            </select>
                                                        </div>
                                                        <div id="verview-shart"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 coin-distribution">
                                                <div class="card h-full">
                                                    <div class="card-body">
                                                        <h4 class="header-title mb-0">Coin Distribution</h4>
                                                        <div id="coin_distribution"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- overview area end -->
                                        <!-- market value area start -->
                                        <div class="row mt-5 mb-5">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex justify-content-between align-items-center">
                                                            <h4 class="header-title mb-0">Market Value And Trends</h4>
                                                            <select class="custome-select border-0 pr-3">
                                                                <option selected>Last 24 Hours</option>
                                                                <option value="0">01 July 2018</option>
                                                            </select>
                                                        </div>
                                                        <div class="market-status-table mt-4">
                                                            <div class="table-responsive">
                                                                <table class="dbkit-table">
                                                                    <tr class="heading-td">
                                                                        <td class="mv-icon">Logo</td>
                                                                        <td class="coin-name">Coin Name</td>
                                                                        <td class="buy">Buy</td>
                                                                        <td class="sell">Sells</td>
                                                                        <td class="trends">Trends</td>
                                                                        <td class="attachments">Attachments</td>
                                                                        <td class="stats-chart">Stats</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="mv-icon"><img src="assets/images/icon/market-value/icon1.png" alt="icon">
                                                                        </td>
                                                                        <td class="coin-name">Dashcoin</td>
                                                                        <td class="buy">30% <img src="assets/images/icon/market-value/triangle-down.png" alt="icon"></td>
                                                                        <td class="sell">20% <img src="assets/images/icon/market-value/triangle-up.png" alt="icon"></td>
                                                                        <td class="trends"><img src="assets/images/icon/market-value/trends-up-icon.png" alt="icon"></td>
                                                                        <td class="attachments">$ 56746,857</td>
                                                                        <td class="stats-chart">
                                                                            <canvas id="mvaluechart"></canvas>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="mv-icon">
                                                                            <div class="mv-icon"><img src="assets/images/icon/market-value/icon2.png" alt="icon"></div>
                                                                        </td>
                                                                        <td class="coin-name">LiteCoin</td>
                                                                        <td class="buy">30% <img src="assets/images/icon/market-value/triangle-down.png" alt="icon"></td>
                                                                        <td class="sell">20% <img src="assets/images/icon/market-value/triangle-up.png" alt="icon"></td>
                                                                        <td class="trends"><img src="assets/images/icon/market-value/trends-down-icon.png" alt="icon"></td>
                                                                        <td class="attachments">$ 56746,857</td>
                                                                        <td class="stats-chart">
                                                                            <canvas id="mvaluechart2"></canvas>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="mv-icon">
                                                                            <div class="mv-icon"><img src="assets/images/icon/market-value/icon3.png" alt="icon"></div>
                                                                        </td>
                                                                        <td class="coin-name">Euthorium</td>
                                                                        <td class="buy">30% <img src="assets/images/icon/market-value/triangle-down.png" alt="icon"></td>
                                                                        <td class="sell">20% <img src="assets/images/icon/market-value/triangle-up.png" alt="icon"></td>
                                                                        <td class="trends"><img src="assets/images/icon/market-value/trends-up-icon.png" alt="icon"></td>
                                                                        <td class="attachments">$ 56746,857</td>
                                                                        <td class="stats-chart">
                                                                            <canvas id="mvaluechart3"></canvas>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="mv-icon">
                                                                            <div class="mv-icon"><img src="assets/images/icon/market-value/icon4.png" alt="icon"></div>
                                                                        </td>
                                                                        <td class="coin-name">Bitcoindash</td>
                                                                        <td class="buy">30% <img src="assets/images/icon/market-value/triangle-down.png" alt="icon"></td>
                                                                        <td class="sell">20% <img src="assets/images/icon/market-value/triangle-up.png" alt="icon"></td>
                                                                        <td class="trends"><img src="assets/images/icon/market-value/trends-up-icon.png" alt="icon"></td>
                                                                        <td class="attachments">$ 56746,857</td>
                                                                        <td class="stats-chart">
                                                                            <canvas id="mvaluechart4"></canvas>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- market value area end -->
                                       <!-- row area start -->
                                        <div class="row">
                                            <!-- Live Crypto Price area start -->
                                            <div class="col-lg-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="header-title">Live Crypto Price</h4>
                                                        <div class="cripto-live mt-5">
                                                            <ul>
                                                                <li>
                                                                    <div class="icon b">b</div> Bitcoin<span><i class="fa fa-long-arrow-up"></i>$876909.00</span></li>
                                                                <li>
                                                                    <div class="icon l">l</div> Litecoin<span><i class="fa fa-long-arrow-up"></i>$29780.00</span></li>
                                                                <li>
                                                                    <div class="icon d">d</div> Dashcoin<span><i class="fa fa-long-arrow-up"></i>$13276.00</span></li>
                                                                <li>
                                                                    <div class="icon b">b</div> Bitcoindash<span><i class="fa fa-long-arrow-down"></i>$5684.890</span></li>
                                                                <li>
                                                                    <div class="icon e">e</div> Euthorium<span><i class="fa fa-long-arrow-down"></i>$3890.98</span></li>
                                                                <li>
                                                                    <div class="icon t">b</div> Tcoin<span><i class="fa fa-long-arrow-up"></i>$750.789</span></li>
                                                                <li>
                                                                    <div class="icon b">b</div> Bitcoin<span><i class="fa fa-long-arrow-up"></i>$325.037</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Live Crypto Price area end -->
                                            <!-- trading history area start -->
                                            <div class="col-lg-8 mt-sm-30 mt-xs-30">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex justify-content-between align-items-center">
                                                            <h4 class="header-title">Trading History</h4>
                                                            <div class="trd-history-tabs">
                                                                <ul class="nav" role="tablist">
                                                                    <li>
                                                                        <a class="active" data-toggle="tab" href="#buy_order" role="tab">Buy Order</a>
                                                                    </li>
                                                                    <li>
                                                                        <a data-toggle="tab" href="#sell_order" role="tab">Sell Order</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <select class="custome-select border-0 pr-3">
                                                                <option selected>Last 24 Hours</option>
                                                                <option value="0">01 July 2018</option>
                                                            </select>
                                                        </div>
                                                        <div class="trad-history mt-4">
                                                            <div class="tab-content" id="myTabContent">
                                                                <div class="tab-pane fade show active" id="buy_order" role="tabpanel">
                                                                    <div class="table-responsive">
                                                                        <table class="dbkit-table">
                                                                            <tr class="heading-td">
                                                                                <td>Trading ID</td>
                                                                                <td>Time</td>
                                                                                <td>Status</td>
                                                                                <td>Amount</td>
                                                                                <td>Last Trade</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>78211</td>
                                                                                <td>4.00 AM</td>
                                                                                <td>Pending</td>
                                                                                <td>$758.90</td>
                                                                                <td>$05245.090</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>782782</td>
                                                                                <td>4.00 AM</td>
                                                                                <td>Pending</td>
                                                                                <td>$77878.90</td>
                                                                                <td>$7778.090</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>89675978</td>
                                                                                <td>4.00 AM</td>
                                                                                <td>Pending</td>
                                                                                <td>$0768.90</td>
                                                                                <td>$0945.090</td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="sell_order" role="tabpanel">
                                                                    <div class="table-responsive">
                                                                        <table class="dbkit-table">
                                                                            <tr class="heading-td">
                                                                                <td>Trading ID</td>
                                                                                <td>Time</td>
                                                                                <td>Status</td>
                                                                                <td>Amount</td>
                                                                                <td>Last Trade</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>8964978</td>
                                                                                <td>4.00 AM</td>
                                                                                <td>Pending</td>
                                                                                <td>$445.90</td>
                                                                                <td>$094545.090</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>89675978</td>
                                                                                <td>4.00 AM</td>
                                                                                <td>Pending</td>
                                                                                <td>$78.90</td>
                                                                                <td>$074852945.090</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>78527878</td>
                                                                                <td>4.00 AM</td>
                                                                                <td>Pending</td>
                                                                                <td>$0768.90</td>
                                                                                <td>$65465.090</td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- trading history area end -->
                                        <!-- row area End -->
                                        <!-- End Crypto Exchange Section -->
                                                        </div>
                                                        <div class="tab-pane fade" id="wallet" role="tabpanel" aria-labelledby="wallet-tab">
                                                            Klik Sini --> <a href="wallet.html">Ini web wallet</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- nav tab end -->

        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018 . All right reserved</p>
            </div>
        </footer>
        <!-- footer area end-->
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Added</h4>
                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You missed you Password!</h4>
                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Member waiting for you Attention</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You Added Kaji Patha few minutes ago</h4>
                            <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Ratul Hamba sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Hello sir , where are you, i am egerly waiting for you.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show recent activity</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show your emails</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch3" />
                                    <label for="switch3">Toggle</label>
                                </div>
                            </div>
                            <p>Show email so that easily find you.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    
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
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>