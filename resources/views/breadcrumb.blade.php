<html>
    <body>

              {{-- header include --}}

<<<<<<< HEAD
                   <div class="navbar-container container-fluid">
                       <ul class="nav-left">
                           <li>
                               <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                           </li>
                           <li class="header-search">
                               <div class="main-search morphsearch-search">
                                   <div class="input-group">
                                       <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                       <input type="text" class="form-control">
                                       <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                   </div>
                               </div>
                           </li>
                           <li>
                               <a href="#!" onclick="javascript:toggleFullScreen()">
                                   <i class="ti-fullscreen"></i>
                               </a>
                           </li>
                       </ul>
                       <ul class="nav-right">
                           <li class="header-notification">
                               <a href="#!">
                                   <i class="ti-bell"></i>
                                   <span class="badge bg-c-pink"></span>
                               </a>
                               <ul class="show-notification">
                                   <li>
                                       <h6>Notifications</h6>
                                       <label class="label label-danger">New</label>
                                   </li>
                                   <li>
                                       <div class="media">
                                           <img class="d-flex align-self-center img-radius" src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                           <div class="media-body">
                                               <h5 class="notification-user">John Doe</h5>
                                               <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                               <span class="notification-time">30 minutes ago</span>
                                           </div>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="media">
                                           <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                           <div class="media-body">
                                               <h5 class="notification-user">Joseph William</h5>
                                               <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                               <span class="notification-time">30 minutes ago</span>
                                           </div>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="media">
                                           <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                           <div class="media-body">
                                               <h5 class="notification-user">Sara Soudein</h5>
                                               <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                               <span class="notification-time">30 minutes ago</span>
                                           </div>
                                       </div>
                                   </li>
                               </ul>
                           </li>

                           <li class="user-profile header-notification">
                               <a href="#!">
                                   <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                   <span>John Doe</span>
                                   <i class="ti-angle-down"></i>
                               </a>
                               <ul class="show-notification profile-notification">
                                   <li>
                                       <a href="#!">
                                           <i class="ti-settings"></i> Settings
                                       </a>
                                   </li>
                                   <li>
                                       <a href="user-profile.html">
                                           <i class="ti-user"></i> Profile
                                       </a>
                                   </li>

                                   <li>
                                       <a href="auth-lock-screen.html">
                                           <i class="ti-lock"></i> Lock Screen
                                       </a>
                                   </li>
                                   <li>
                                       <a href="auth-normal-sign-in.html">
                                       <i class="ti-layout-sidebar-left"></i> Logout
                                   </a>
                                   </li>
                               </ul>
                           </li>
                       </ul>
                   </div>
               </div>
           </nav>
=======
              @include('./header')
>>>>>>> b0306de35d76e70a40bf95d46bce7a6cb3604cd0

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('./sidebar')
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
								<!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="card-block">
                                            <h5 class="m-b-10">Breadcrumb Styles</h5>
                                            <p class="text-muted m-b-10">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                            <ul class="breadcrumb-title b-t-default p-t-10">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                                                </li>
                                                        <li class="breadcrumb-item"><a href="#!">Basic Components</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Breadcrumb</a>
                                                        </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                                    <!-- Page-body start -->
                                    <div class="page-body breadcrumb-page">
                                        <!-- Simple Breadcrumb card start -->
                                        <div class="card">
                                            <div class="card-block">
                                                <h5>Simple Breadcrumb</h5>
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title m-t-10">
                                                        <li class="breadcrumb-item">
                                                            <a href="#!">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Breadcrumb</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Simple Breadcrumb</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Simple Breadcrumb card start -->
                                        <!-- Caption Breadcrumb card start -->
                                        <div class="card">
                                            <div class="card-block caption-breadcrumb">
                                                <div class="breadcrumb-header">
                                                    <h5>Caption Breadcrumb</h5>
                                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                </div>
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title m-t-10">
                                                        <li class="breadcrumb-item">
                                                            <a href="#!">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Breadcrumb</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Caption Breadcrumb</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Caption Breadcrumb card end -->
                                        <!-- Bottom Breadcrumb card start -->
                                        <div class="card">
                                            <div class="card-block">
                                                <div class="breadcrumb-header">
                                                    <h5>Bottom Breadcrumb</h5>
                                                </div>
                                                <div class="m-t-10">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="#!">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Breadcrumb</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Caption Breadcrumb</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Bottom Breadcrumb card end -->
                                        <!-- Without-icon Breadcrumb card start -->
                                        <div class="card">
                                            <div class="card-block caption-breadcrumb">
                                                <div class="breadcrumb-header">
                                                    <h5>Without Icon Breadcrumb</h5>
                                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                </div>
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title m-t-10">
                                                        <li class="breadcrumb-item"><a href="#!">Home</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Breadcrumb</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Caption Breadcrumb</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Without-icon Breadcrumb card start -->
                                        <!-- Front-icon Breadcrumb card start -->
                                        <div class="card page-header p-0">
                                            <div class="card-block front-icon-breadcrumb row align-items-end">
                                                <div class="breadcrumb-header col">
                                                    <div class="big-icon">
                                                        <i class="icofont icofont-home"></i>
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h5>Front Icon Breadcrumb</h5>
                                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="page-header-breadcrumb">
                                                        <ul class="breadcrumb-title m-t-10">
                                                            <li class="breadcrumb-item"><a href="#!">Home</a>
                                                            </li>
                                                            <li class="breadcrumb-item"><a href="#!">Breadcrumb</a>
                                                            </li>
                                                            <li class="breadcrumb-item"><a href="#!">Caption Breadcrumb</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Front-icon Breadcrumb card end -->
                                        <h4 class="m-b-30">Color Varients</h4>
                                        <!-- Primary-color Breadcrumb card start -->
                                        <div class="card borderless-card">
                                            <div class="card-block primary-breadcrumb">
                                                <div class="breadcrumb-header">
                                                    <h5>Primary Color Breadcrumb</h5>
                                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                </div>
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title m-t-10">
                                                        <li class="breadcrumb-item">
                                                            <a href="#!">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Breadcrumb</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Caption Breadcrumb</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Primary-color Breadcrumb card end -->
                                        <!-- Inverse-color Breadcrumb card start -->
                                        <div class="card borderless-card">
                                            <div class="card-block inverse-breadcrumb">
                                                <div class="breadcrumb-header">
                                                    <h5>Inverse Color Breadcrumb</h5>
                                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                </div>
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title m-t-10">
                                                        <li class="breadcrumb-item">
                                                            <a href="#!">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Breadcrumb</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Caption Breadcrumb</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Inverse-color Breadcrumb card end -->
                                        <!-- Danger-color Breadcrumb card start -->
                                        <div class="card borderless-card">
                                            <div class="card-block danger-breadcrumb">
                                                <div class="breadcrumb-header">
                                                    <h5>Danger Color Breadcrumb</h5>
                                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                </div>
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title m-t-10">
                                                        <li class="breadcrumb-item">
                                                            <a href="#!">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Breadcrumb</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Caption Breadcrumb</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Danger-color Breadcrumb card end -->
                                        <!-- Info-color Breadcrumb card start -->
                                        <div class="card borderless-card">
                                            <div class="card-block info-breadcrumb">
                                                <div class="breadcrumb-header">
                                                    <h5>Info Color Breadcrumb</h5>
                                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                </div>
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title m-t-10">
                                                        <li class="breadcrumb-item">
                                                            <a href="#!">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Breadcrumb</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Caption Breadcrumb</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Info-color Breadcrumb card end -->
                                        <!-- Warning-color Breadcrumb card start -->
                                        <div class="card borderless-card">
                                            <div class="card-block warning-breadcrumb">
                                                <div class="breadcrumb-header">
                                                    <h5>Warning Color Breadcrumb</h5>
                                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                </div>
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title m-t-10">
                                                        <li class="breadcrumb-item">
                                                            <a href="#!">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Breadcrumb</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Caption Breadcrumb</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Warning-color Breadcrumb card end -->
                                        <!-- Success-color Breadcrumb card start -->
                                        <div class="card borderless-card">
                                            <div class="card-block success-breadcrumb">
                                                <div class="breadcrumb-header">
                                                    <h5>Success Color Breadcrumb</h5>
                                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                </div>
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title m-t-10">
                                                        <li class="breadcrumb-item">
                                                            <a href="#!">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Breadcrumb</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Caption Breadcrumb</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Success-color Breadcrumb card end -->
                                    </div>
                                    <!-- Page-body start -->
                                </div>
                            </div>
                            <!-- Main-body start -->

                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>

<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vartical-demo.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

</body>

</html>
