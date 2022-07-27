<html>
    <body>
            {{-- header include --}}
            @include('./header')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('./sidebar')
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
								 <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="card-block">
                                            <h5 class="m-b-10">Accordion</h5>
                                            <p class="text-muted m-b-10">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                            <ul class="breadcrumb-title b-t-default p-t-10">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Basic Components</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Accordion</a>
                                                        </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->
                                        <div class="row">
                                            <!-- Multiple Open Accordion start -->
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">MULTIPLE OPEN ACCORDION</h5>
                                                    </div>
                                                    <div class="card-block accordion-block">
                                                        <div id="accordion" role="tablist" aria-multiselectable="true">
                                                            <div class="accordion-panel">
                                                                <div class="accordion-heading" role="tab" id="headingOne">
                                                                    <h3 class="card-title accordion-title">
                                                                        <a class="accordion-msg" data-toggle="collapse"
                                                                        data-parent="#accordion" href="#collapseOne"
                                                                        aria-expanded="true" aria-controls="collapseOne">
                                                                        Lorem Message 1
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse in"
                                                            role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="accordion-content accordion-desc">
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                    and typesetting industry. Lorem Ipsum has been
                                                                    the industry's standard dummy text ever since
                                                                    the 1500s, when an unknown printer took a galley
                                                                    of type and scrambled it to make a type specimen
                                                                    book. It has survived not only five centuries,
                                                                    but also the leap into electronic typesetting,
                                                                    remaining essentially unchanged. It was
                                                                    popularised in the 1960s with the release of
                                                                    Letraset sheets containing Lorem Ipsum passages,
                                                                    and more recently with desktop publishing
                                                                    software like Aldus PageMaker including versions
                                                                    of Lorem Ipsum.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-panel">
                                                        <div class="accordion-heading" role="tab" id="headingTwo">
                                                            <h3 class="card-title accordion-title">
                                                                <a class="accordion-msg" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseTwo"
                                                                aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Lorem Message 2
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse"
                                                    role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="accordion-content accordion-desc">
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing
                                                            and typesetting industry. Lorem Ipsum has been
                                                            the industry's standard dummy text ever since
                                                            the 1500s, when an unknown printer took a galley
                                                            of type and scrambled it to make a type specimen
                                                            book. It has survived not only five centuries,
                                                            but also the leap into electronic typesetting,
                                                            remaining essentially unchanged. It was
                                                            popularised in the 1960s with the release of
                                                            Letraset sheets containing Lorem Ipsum passages,
                                                            and more recently with desktop publishing
                                                            software like Aldus PageMaker including versions
                                                            of Lorem Ipsum.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-panel">
                                                <div class=" accordion-heading" role="tab"
                                                id="headingThree">
                                                <h3 class="card-title accordion-title">
                                                    <a class="accordion-msg" data-toggle="collapse"
                                                    data-parent="#accordion" href="#collapseThree"
                                                    aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    Lorem Message 3
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse show"
                                        role="tabpanel" aria-labelledby="headingThree">
                                        <div class="accordion-content accordion-desc">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing
                                                and typesetting industry. Lorem Ipsum has been
                                                the industry's standard dummy text ever since
                                                the 1500s, when an unknown printer took a galley
                                                of type and scrambled it to make a type specimen
                                                book. It has survived not only five centuries,
                                                but also the leap into electronic typesetting,
                                                remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of
                                                Letraset sheets containing Lorem Ipsum passages,
                                                and more recently with desktop publishing
                                                software like Aldus PageMaker including versions
                                                of Lorem Ipsum.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Multiple Open Accordion ends -->
                <!-- Single Open Accordion start -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Single Open Accordion</h5>
                        </div>
                        <div class="card-block accordion-block">
                            <div class="accordion-box" id="single-open">
                                <a class="accordion-msg">Lorem Message 1</a>
                                <div class="accordion-desc">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap into
                                        electronic typesetting, remaining essentially unchanged.
                                        It was popularised in the 1960s with the release of
                                        Letraset sheets containing Lorem Ipsum passages, and
                                        more .
                                    </p>
                                </div>
                                <a class="accordion-msg">Lorem Message 2</a>
                                <div class="accordion-desc">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap into
                                        electronic typesetting, remaining essentially unchanged.
                                        It was popularised in the 1960s with the release of
                                        Letraset sheets containing Lorem Ipsum passages, and
                                        more .
                                    </p>
                                </div>
                                <a class="accordion-msg">Lorem Message 3</a>
                                <div class="accordion-desc">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap into
                                        electronic typesetting, remaining essentially unchanged.
                                        It was popularised in the 1960s with the release of
                                        Letraset sheets containing Lorem Ipsum passages, and
                                        more .
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Open Accordion ends -->
            </div>
            <!-- Row end -->
            <!-- Row start -->
            <div class="row">
                <!-- Scale Open Accordion start -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">SCALE ACCORDION</h5>
                        </div>
                        <div class="card-block accordion-block">
                            <div class="accordion-box" id="sclae-accordion">
                                <a class="accordion-msg">Lorem Message 1</a>
                                <div class="accordion-desc">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap into
                                        electronic typesetting, remaining essentially unchanged.
                                        It was popularised in the 1960s with the release of
                                        Letraset sheets containing Lorem Ipsum passages, and
                                        more recently with desktop publishing software like
                                        Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </div>
                                <a class="accordion-msg">Lorem Message 2</a>
                                <div class="accordion-desc">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap into
                                        electronic typesetting, remaining essentially unchanged.
                                        It was popularised in the 1960s with the release of
                                        Letraset sheets containing Lorem Ipsum passages, and
                                        more recently with desktop publishing software like
                                        Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </div>
                                <a class="accordion-msg">Lorem Message 3</a>
                                <div class="accordion-desc">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap into
                                        electronic typesetting, remaining essentially unchanged.
                                        It was popularised in the 1960s with the release of
                                        Letraset sheets containing Lorem Ipsum passages, and
                                        more recently with desktop publishing software like
                                        Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Scale Open Accordion ends -->
                <!-- Color Open Accordion start -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">COLOR ACCORDION</h5>
                        </div>
                        <div class="card-block accordion-block color-accordion-block">
                            <div class="color-accordion" id="color-accordion">
                                <a class="accordion-msg b-none">Lorem Message 1</a>
                                <div class="accordion-desc">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap into
                                        electronic typesetting, remaining essentially unchanged.
                                        It was popularised in the 1960s with the release of
                                        Letraset sheets containing Lorem Ipsum passages, and
                                        more .
                                    </p>
                                </div>
                                <a class="accordion-msg bg-dark-primary b-none">Lorem Message
                                    2</a>
                                    <div class="accordion-desc">
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the
                                            industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has
                                            survived not only five centuries, but also the leap into
                                            electronic typesetting, remaining essentially unchanged.
                                            It was popularised in the 1960s with the release of
                                            Letraset sheets containing Lorem Ipsum passages, and
                                            more .
                                        </p>
                                    </div>
                                    <a class="accordion-msg bg-darkest-primary b-none">Lorem Message
                                        3</a>
                                        <div class="accordion-desc">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the 1500s,
                                                when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has
                                                survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged.
                                                It was popularised in the 1960s with the release of
                                                Letraset sheets containing Lorem Ipsum passages, and
                                                more .
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Color Open Accordion ends -->
                    </div>
                    <!-- Row end -->
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <div id="styleSelector">

        </div>
    </div>
</div>
</div>
</div>
</div>
</div>


<!-- Main-body end -->
<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
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
<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
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

<!-- Accordion js -->
<script type="text/javascript" src="assets/pages/accordion/accordion.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vartical-demo.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
</html>
