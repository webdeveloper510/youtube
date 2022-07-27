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
                                            <h5 class="m-b-10">Animated Tooltip</h5>
                                            <p class="text-muted m-b-10">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                            <ul class="breadcrumb-title b-t-default p-t-10">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                                                </li>
                                               <li class="breadcrumb-item"><a href="#!">Basic Componenets</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Animated Tooltip</a>
                                                        </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">

                                        <div class="col-xl-4">
                                            <!-- Line Tooltip card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Line Tooltip</h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <p>Use class <code>tooltip-content4</code> to use this <a class="mytooltip" href="javascript:void(0)"> Line tooltip<span class="tooltip-content5"><span class="tooltip-text3"><span class="tooltip-inner2">Howdy, Ben!<br> There are 13 unread messages in your inbox.</span></span></span></a> current effect. harvesting star light.Colonies. Jean-François Champollion.</p>
                                                </div>
                                            </div>
                                            <!-- Line Tooltip card end -->
                                        </div>
                                        <div class="col-xl-4">
                                            <!-- Tooltip on button card start -->
                                            <div class="card button-page">
                                                <div class="card-header">
                                                    <h5>Tooltip on button</h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <ul>
                                                        <li>
                                                            <button type="button" class="btn btn-default waves-effect" data-toggle="tooltip" data-placement="top" title="tooltip on top">Top
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="left" title="tooltip on left">Left
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="right" title="tooltip on right">right
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="btn btn-warning waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="tooltip on bottom">bottom
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="tooltip" data-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">Html Tooltip
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Tooltip on button card end -->
                                        </div>
                                        <div class="col-xl-4">
                                            <!-- Tooltip with link card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Tooltip with link</h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                    </div>
                                                </div>
                                                <div class="card-block tooltip-link">
                                                    <a href="#!" data-toggle="tooltip" data-placement="top" data-trigger="hover" title="top!">Top</a>
                                                    <a href="#!" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" title="bottom!">Bottom</a>
                                                    <a href="#!" data-placement="left" data-trigger="hover" data-toggle="tooltip" title="left!">Left</a>
                                                    <a href="#!" data-placement="right" data-trigger="hover" data-toggle="tooltip" title="right!">Right</a>
                                                </div>
                                            </div>
                                            <!-- Tooltip with link card end -->
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Tooltip on icon card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Tooltip on icon</h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                    </div>
                                                </div>
                                                <div class="card-block tooltip-icon button-list">
                                                    <p>use code in button for tooltip <code>data-toggle="tooltip" data-placement="left" data-original-title=".icofont-home"</code></p>
                                                    <button type="button" class="btn btn-primary btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="left" title=".icofont-home">
                                                        <i class="icofont icofont-home"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title=".icofont icofont-search-alt-2">
                                                        <i class="icofont icofont-search-alt-2"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="right" title=".icofont-refresh">
                                                        <i class="icofont icofont-refresh"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title=".icofont-print">
                                                        <i class="icofont icofont-print"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-success btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title=".icofont-paper-plane">
                                                        <i class="icofont icofont-paper-plane"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Tooltip on icon card end -->
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Tooltip on popover card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Tooltip on popover</h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                    </div>
                                                </div>
                                                <div class="card-block tooltip-pop button-list">
                                                    <p>use code in button for tooltip <code>data-toggle="popover" data-placement="left" data-original-title=".icofont-home"</code></p>
                                                    <button type="button" class="btn btn-default waves-effect" data-toggle="popover" data-placement="top" title="" data-content="top by popover" data-original-title="tooltip on top">Top
                                                    </button>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="popover" data-placement="left" title="tooltip on left" data-content="left by popover">Left
                                                    </button>
                                                    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="popover" data-placement="right" title="tooltip on right" data-content="right by popover">right
                                                    </button>
                                                    <button type="button" class="btn btn-warning waves-effect waves-light" data-toggle="popover" data-placement="bottom" title="tooltip on bottom" data-content="bottom by popover">bottom
                                                    </button>
                                                    <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="popover" data-html="true" data-placement="top" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>" data-content="tooltip by HTML">Html Tooltip
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Tooltip on popover card end -->
                                        </div>
                                        <div class="col-sm-12">
                                            <!-- Tooltips on textbox card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Tooltips on textbox</h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                    </div>
                                                </div>
                                                <div class="card-block tooltip-icon button-list">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="name"><i class="icofont icofont-user-alt-3"></i></span>
                                                        <input type="text" class="form-control" placeholder="Enter your name" title="Enter your name" data-toggle="tooltip">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="email"><i class="icofont icofont-ui-email"></i></span>
                                                        <input type="text" class="form-control" placeholder="Enter email" title="Enter email" data-toggle="tooltip">
                                                    </div>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right" title="submit">Submit
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Tooltips on textbox card end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-body end -->
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

<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vartical-demo.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });

    $(document).ready(function() {
        $('[data-toggle="popover"]').popover({
            html: true,
            content: function() {
                return $('#primary-popover-content').html();
            }
        });
    });

</script>
</body>

</html>
