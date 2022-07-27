<html>
    <body>
              {{-- header include --}}
              @include('./header')
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
                                            <h5 class="m-b-10">Notification</h5>
                                            <p class="text-muted m-b-10">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                            <ul class="breadcrumb-title b-t-default p-t-10">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                                                </li>
                                               <li class="breadcrumb-item"><a href="#!">Basic Componenets</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Notification</a>
                                                        </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->


                                <!-- Page body start -->
                                <div class="page-body button-page">
                                    <div class="row">
                                        <!-- bootstrap modal start -->
                                        <div class="col-sm-12">
                                            <!-- Notification card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Notifications</h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="sub-title">Notification Position</div>
                                                            <p>This plugin has layout options where you can display it in any corner of the screen, simply click one layout corners and press the buttons on the other section to see the magic</p>
                                                            <div class="location-selector">
                                                                <div class="bit top left" data-position="top left"></div>
                                                                <div class="bit top right" data-position="top right"></div>
                                                                <div class="bit top" data-position="top"></div>
                                                                <div class="bit bottom left" data-position="bottom left"></div>
                                                                <div class="bit bottom right" data-position="bottom right"></div>
                                                                <div class="bit bottom" data-position="bottom"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="sub-title">Notification Alert</div>
                                                            <p>Notification color : <code> data-type="inverse"</code> Notification position : <code> data-align="left" </code></p>
                                                            <ul class="notifications">
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-from="top" data-align="left" data-icon="fa fa-check">Top Left</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-from="top" data-align="right" data-icon="fa fa-comments">Top Right</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-from="top" data-align="center" data-icon="fa fa-comments">Top Center</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-from="bottom" data-align="left">Bottom Left</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-from="bottom" data-align="right">Bottom Right</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-from="bottom" data-align="center">Bottom Center</button>
                                                                </li>
                                                            </ul>
                                                            <div class="sub-title">Notification Position</div>
                                                            <p>Change data-type : <code> data-type="primary"</code> to change notification color</p>
                                                            <ul class="notifications">
                                                                <li>
                                                                    <button class="btn btn-inverse waves-effect" data-type="inverse" data-from="top" data-align="right" data-icon="fa fa-check">Inverse</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="primary" data-from="top" data-align="right" data-icon="fa fa-comments">Primary</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-info waves-effect" data-type="info" data-from="top" data-align="right" data-icon="fa fa-comments">Info</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-success waves-effect" data-type="success" data-from="top" data-align="right">success</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-warning waves-effect" data-type="warning" data-from="top" data-align="right">Warning</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-danger waves-effect" data-type="danger" data-from="top" data-align="right">Danger</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="sub-title">Notification Behaviour</div>
                                                            <p>use code <code>data-animation-in="animated fadeIn"  data-animation-out="animated fadeOut"</code> notification animation effect</p>
                                                            <ul class="notifications">
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated fadeIn" data-animation-out="animated fadeOut">Fade In</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated fadeInLeft" data-animation-out="animated fadeOutLeft">Fade In Left</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated fadeInRight" data-animation-out="animated fadeOutRight">Fade In Right</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated fadeInUp" data-animation-out="animated fadeOutUp">Fade In Up</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated fadeInDown" data-animation-out="animated fadeOutDown">Fade In Down</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated bounceIn" data-animation-out="animated bounceOut">Bounce In</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated bounceInLeft" data-animation-out="animated bounceOutLeft">Bounce In Left</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated bounceInRight" data-animation-out="animated bounceOutRight">Bounce In Right</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated rotateInDownRight" data-animation-out="animated rotateOutUpRight">Fall In Right</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated rotateIn" data-animation-out="animated rotateOut">Rotate In</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated flipInX" data-animation-out="animated flipOutX">Flip In X</button>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated flipInY" data-animation-out="animated flipOutY">Flip In Y</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Notification card end -->
                                        </div>
                                        <!-- Bootstrap modal end -->
                                    </div>
                                </div>
                                <!-- Page body end -->
                            </div>
                        </div>
                        <!-- Main-body end -->

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

<!-- notification js -->
<script type="text/javascript" src="assets/js/bootstrap-growl.min.js"></script>
<script type="text/javascript" src="assets/pages/notification/notification.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vartical-demo.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>

</html>
