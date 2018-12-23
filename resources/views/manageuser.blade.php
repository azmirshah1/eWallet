<!doctype html>
<html class="no-js" lang="en">
<javascript>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-Wallet Manage Users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
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
                                <li><a><h3>Manage User</h3></a></li>

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

            <!-- sales report area start -->
            <hr style="border-color: #9e0039;">
                    <!-- nav tab start -->
                    <div class="col-lg-12 mt-6">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">View Users</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Manage Users</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-3" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <!-- Dark table start -->
                                        <div class="col-12 mt-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h3 class="header-title">View Users Data</h3>
                                                    <div class="data-tables datatable-dark">
                                                        <table id="dataTable3" class="text-center">
                                                            <thead class="text-capitalize">
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>username</th>
                                                                    <th>Phone No</th>
                                                                    <th>Email</th>
                                                                    <th>Address</th>
                                                                    <th>Malaysia</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Azmir Shah</td>
                                                                    <td>askcoreunit</td>
                                                                    <td>+60176591091</td>
                                                                    <td>azmirshah1@gmail.com</td>
                                                                    <td>Muar</td>
                                                                    <td>Johor</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Azrul Shah</td>
                                                                    <td>azshah</td>
                                                                    <td>+60184737748</td>
                                                                    <td>azmirshah1@gmail.com</td>
                                                                    <td>Batu Berendam</td>
                                                                    <td>Melaka</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Harun Din</td>
                                                                    <td>h.din</td>
                                                                    <td>+01129384778</td>
                                                                    <td>haruncute@gmail.com</td>
                                                                    <td>Johor Bharu</td>
                                                                    <td>Johor</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Siti Rafiah Binti Abdul Samad</td>
                                                                    <td>siti</td>
                                                                    <td>+6019659883723</td>
                                                                    <td>makciti@gmail.com</td>
                                                                    <td>Cheras</td>
                                                                    <td>Kuala Lumpur</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Kamilah Ahmad</td>
                                                                    <td>kami.ahmad</td>
                                                                    <td>+60198383728</td>
                                                                    <td>kami.ahmad@gmail.com</td>
                                                                    <td>Ipoh</td>
                                                                    <td>Perak</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Salmah Hasan</td>
                                                                    <td>1Malaysia</td>
                                                                    <td>+6038475748</td>
                                                                    <td>salmah@1malaysia.my</td>
                                                                    <td>Kuantan</td>
                                                                    <td>Pahang</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Yassin Zulkifli</td>
                                                                    <td>yassin</td>
                                                                    <td>+60148394557</td>
                                                                    <td>yassin1@gmail.com</td>
                                                                    <td>Sintok</td>
                                                                    <td>Kedah</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Kasim Selamat</td>
                                                                    <td>kSelamat</td>
                                                                    <td>+601837465673</td>
                                                                    <td>kselamat@gmail.com</td>
                                                                    <td>Kuala Perlis</td>
                                                                    <td>Perlis</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Siti Zulaika</td>
                                                                    <td>ZulaikaRashid</td>
                                                                    <td>+6012374758434</td>
                                                                    <td>zulaikaRash@gmail.com</td>
                                                                    <td>Kuala Selangor</td>
                                                                    <td>Selangor</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Harun Syed</td>
                                                                    <td>harun_syed</td>
                                                                    <td>+60174883923</td>
                                                                    <td>harun_syed@gmail.com</td>
                                                                    <td>Alor Setar</td>
                                                                    <td>Kedah</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Mahathir Muhamad</td>
                                                                    <td>chedet</td>
                                                                    <td>+6016283427372</td>
                                                                    <td>chedet@gmail.com</td>
                                                                    <td>Alor Setar</td>
                                                                    <td>Kedah</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Dark table end -->
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <!-- table primary start -->
                                        <div class="col-lg-12 mt-5">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="header-title">Manage Users</h4>
                                                    <div class="single-table">
                                                        <div class="table-responsive">
                                                            <table class="table text-center">
                                                                <thead class="text-uppercase bg-dark">
                                                                    <tr class="text-white">
                                                                        <th scope="col">ID</th>
                                                                        <th scope="col">Name</th>
                                                                        <th scope="col">Phone Number</th>
                                                                        <th scope="col">Email</th>
                                                                        <th scope="col">edit</th>
                                                                        <th scope="col">delete</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <th scope="row">1</th>
                                                                        <td>Azmir Shah</td>
                                                                        <td>askcoreunit</td>
                                                                        <td>+60176591091</td>
                                                                        <td><i class="fa fa-edit"></i></td>
                                                                        <td><i class="ti-trash"></i></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>Azrul Shah</td>
                                                                        <td>+60184737748</td>
                                                                        <td>azmirshah1@gmail.com</td>
                                                                        <td><i class="fa fa-edit"></i></td>
                                                                        <td><i class="ti-trash"></i></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>Kamilah Ahmad</td>
                                                                        <td>+60198383728</td>
                                                                        <td>kami.ahmad@gmail.com</td>
                                                                        <td><i class="fa fa-edit"></i></td>
                                                                        <td><i class="ti-trash"></i></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>Siti Zulaika</td>
                                                                        <td>+6012374758434</td>
                                                                        <td>zulaikaRash@gmail.com</td>
                                                                        <td><i class="fa fa-edit"></i></td>
                                                                        <td><i class="ti-trash"></i></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- table primary end -->
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta soluta doloribus, ullam, ut obcaecati laboriosam eos, officia dolores voluptatum quas impedit placeat cumque animi quos odio quibusdam voluptatibus magnam minima facilis necessitatibus libero! Error velit veritatis veniam ipsa? Reiciendis quas qui neque atque repudiandae quidem incidunt, a consectetur ipsam impedit.</p>
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
    
    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>

