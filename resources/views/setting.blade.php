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
            <!-- page title area end -->
        <hr style="border-color: #9e0039;">
        <!-- main content area start -->
                     <!-- left align tab start -->
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div>
                                <div class="d-md-flex">
                                    <div class="nav flex-column nav-pills mr-4 mb-3 mb-sm-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Home</a>
                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                                    </div>

                                    <!-- Tab start -->
                                    <div class="tab-content" id="v-pills-tabContent">
                                    <!-- Profile tab -->
                                        <div class="col-lg-12 tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <h4> Your Profile <br> </br></h4>
                                            <div class="row">
                                                <!-- Profile header -->
                                                <div class="col-lg-4 col-sm-3">
                                                    <img class="right rightSize profileImage" src="assets/images/profile/image12.png">
                                                </div>
                                                <div class="col-lg-8 col-sm-6">
                                                    <p> Name    : Azmir Shah<br>
                                                        Email   : azmirshah1@gmail.com<br/>
                                                        Phone No: 0176591091 </p>
                                                        State   : Johor
                                                    </p> 
                                                </div>
                                            </div> 
                                            <!-- Profile header end-->
                                           <!-- Edit profile start -->
                                            <div class="main-content-inner">
                                                <div class="row">
                                                    <div class="col-lg-12 col-ml-12">
                                                        <div class="row">
                                                            <!-- Textual inputs start -->
                                                            <div class="col-12 mt-5">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="header-title">Profile Details</h4>
                                                                        <!-- Name start -->
                                                                        <div class="form-group">
                                                                            <label for="name-input" class="col-form-label">Name</label>
                                                                            <input class="form-control" type="text" value="Azmir Shah" id="name-input">
                                                                        </div>
                                                                        <!-- IC Number start -->
                                                                        <div class="form-group">
                                                                            <label for="ic-input" class="col-form-label">IC Number</label>
                                                                            <input class="form-control" type="text" value="950319016115" id="ic-input">
                                                                        </div>
                                                                        <!-- Date of birth start -->
                                                                        <div class="form-group">
                                                                            <label for="dob-input" class="col-form-label">Date of Birth</label>
                                                                            <input class="form-control" type="date" value="12/03/1995" id="dob-input">
                                                                        </div>
                                                                        <!-- Phone Number start -->
                                                                        <div class="form-group">
                                                                            <label for="phone-input" class="col-form-label">Phone Number</label>
                                                                            <input class="form-control" type="tel" value="+60176591091" id="Phone-input">
                                                                        </div>
                                                                        <!-- email start -->
                                                                         <div class="form-group">
                                                                            <label for="example-email-input" class="col-form-label">Email</label>
                                                                            <input class="form-control" type="email" value="azmirshah1@gmail.com" id="example-email-input">
                                                                        </div>
                                                                        <!-- Address start -->
                                                                        <div class="form-group">
                                                                            <label for="address-input" class="col-form-label">Address</label>
                                                                            <input class="form-control" type="text" value="310, lorong bahagia" id="address-input">
                                                                        </div>
                                                                        <!-- Country start -->
                                                                        <div class="form-group">
                                                                            <label for="country-input" class="col-form-label">Country</label>
                                                                            <input class="form-control" type="search" value="Malaysia" id="country-input">
                                                                        </div>
                                                                        <!-- Password start -->
                                                                        <div class="form-group">
                                                                            <label for="inputPassword" class="">Password</label>
                                                                            <input type="password" class="form-control" id="inputPassword" value="inputPassword" placeholder="Password">
                                                                        </div>
                                                                        <!-- Profile Picture start -->
                                                                        <div class="input-group">
                                                                            <div class="custom-file">
                                                                                <input type="file" class="custom-file-input" id="inputGroupFile04">
                                                                                <label class="custom-file-label" for="inputGroupFile04">Upload Profile Picture</label>
                                                                            </div>
                                                                            <div class="input-group-append">
                                                                                <button class="btn btn-outline-secondary" type="button">Upload</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                        <div class="col-lg-12 row">
                                                                        <div class="col-lg-2 col-sm-2">
                                                                            <button class="btn btn-rounded btn-primary mb-3" type="reset" value="Reset">Reset</button>
                                                                        </div>
                                                                        <div class="col-lg-2 col-sm-2">
                                                                            <button class= "btn btn-rounded btn-primary mb-3" type="submit" value="Submit">Submit</button>
                                                                        </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <!-- Textual inputs end -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                         <!-- Profile tab end -->
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                         <!-- timeline area start -->
                                            <h4 class="header-title">Timeline</h4>
                                            <div class="timeline-area">
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
                                            <!-- timeline area end -->
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                            <h4> Setting </h4>
                            <!-- Checkboxes start -->
                                        <p class="text-muted mb-3">For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control.</p>
                                        <form action="#">
                                            <b class="text-muted mb-3 mt-4 d-block">Inline Checkbox:</b>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" checked class="custom-control-input" id="customCheck5">
                                                <label class="custom-control-label" for="customCheck5">Enable Two-Factor Authentication</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                <label class="custom-control-label" for="customCheck6">Enable Email Verification</label>
                                            </div>
                                            <div class="mb-3"></div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" checked class="custom-control-input" id="customCheck5">
                                                <label class="custom-control-label" for="customCheck5">Disconnect all device</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" checked class="custom-control-input" id="customCheck5">
                                                <label class="custom-control-label" for="customCheck5">Alternative Email</label>
                                            </div>
                                        </form>

                            <!-- Checkboxes end -->
                                            <!-- Test End -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- left align tab end -->
        <!-- main content area End -->
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

    <!-- start amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/pie.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/animate/animate.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all bar chart activation -->
    <script src="assets/js/bar-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>

</html>