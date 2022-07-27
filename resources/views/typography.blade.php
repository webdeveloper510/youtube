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
                                            <h5 class="m-b-10">Typography</h5>
                                            <p class="text-muted m-b-10">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                            <ul class="breadcrumb-title b-t-default p-t-10">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                                                </li>
                                               <li class="breadcrumb-item"><a href="#!">Basic Componenets</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Typography</a>
                                                        </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->


                                    <!-- Page-body start -->
                                    <div class="page-body">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Typography card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Typography</h5>
                                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                        <div class="card-header-right">                                                             <i class="icofont icofont-spinner-alt-5"></i>                                                         </div>
                                                    </div>
                                                    <div class="card-block typography">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-xl-6">
                                                                <h4 class="sub-title">Headings</h4>
                                                                <p>Use tags <code>h1 to h6</code> for get desire heading.</p>
                                                                <h1>This is a Heading 1</h1>
                                                                <h2>This is a Heading 2</h2>
                                                                <h3>This is a Heading 3</h3>
                                                                <h4>This is a Heading 4</h4>
                                                                <h5>This is a Heading 5</h5>
                                                                <h6>This is a Heading 6</h6>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-6">
                                                                <h4 class="sub-title">HEADINGS WITH SUBHEADING</h4>
                                                                <p>Use tags <code>h1 to h6</code> for get desire heading.</p>
                                                                <h1>This is a Heading 1<small>Sub-heading</small></h1>
                                                                <h2>This is a Heading 2<small>Sub-heading</small></h2>
                                                                <h3>This is a Heading 3<small>Sub-heading</small></h3>
                                                                <h4>This is a Heading 4<small>Sub-heading</small></h4>
                                                                <h5>This is a Heading 5<small>Sub-heading</small></h5>
                                                                <h6>This is a Heading 6<small>Sub-heading</small></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Typography card end -->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Text elements start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>text elements</h5>
                                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                        <div class="card-header-right">                                                             <i class="icofont icofont-spinner-alt-5"></i>                                                         </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-xl-6">
                                                                <h4 class="sub-title">Inline text elements</h4>
                                                                <p class="lead m-t-0">Your title goes here</p>
                                                                <p>You can use the mark tag to
                                                                    <mark>highlight</mark> text.</p>
                                                                <p>
                                                                    <del>This line of text is meant to be treated as deleted text.</del>
                                                                </p>
                                                                <p>
                                                                    <ins>This line of text is meant to be treated as an addition to the document.</ins>
                                                                </p>
                                                                <p><strong>rendered as bold text</strong></p>
                                                                <p><em>rendered as italicized text</em></p>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-6">
                                                                <h4 class="sub-title">CONTEXTUAL TEXT COLORS</h4>
                                                                <p class="text-custom">
                                                                    Etiam porta sem malesuada magna mollis euismod.<code>text-custom</code>
                                                                </p>
                                                                <p class="text-pink">
                                                                    Donec ullamcorper nulla non metus auctor fringilla.<code>text-pink</code>
                                                                </p>
                                                                <p class="text-muted">
                                                                    Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.<code>text-muted</code>
                                                                </p>
                                                                <p class="text-primary">
                                                                    Nullam id dolor id nibh ultricies vehicula ut id elit.<code>text-primary</code>
                                                                </p>
                                                                <p class="text-success">
                                                                    Duis mollis, est non commodo luctus, nisi erat porttitor ligula.<code>text-success</code>
                                                                </p>
                                                                <p class="text-info">
                                                                    Maecenas sed diam eget risus varius blandit sit amet non magna.<code>text-info</code>
                                                                </p>
                                                                <p class="text-warning">
                                                                    Etiam porta sem malesuada magna mollis euismod.<code>text-warning</code>
                                                                </p>
                                                                <p class="text-danger">
                                                                    Donec ullamcorper nulla non metus auctor fringilla.<code>text-danger</code>
                                                                </p>
                                                                <p class="text-dark">
                                                                    Nullam id dolor id nibh ultricies vehicula ut id elit.<code>text-dark</code>
                                                                </p>
                                                                <p class="text-purple m-b-0">
                                                                    Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.<code>text-purple</code>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Text elements end -->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- List Tag card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>List Tag</h5>
                                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                        <div class="card-header-right">                                                             <i class="icofont icofont-spinner-alt-5"></i>                                                         </div>
                                                    </div>
                                                    <div class="card-block list-tag">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-xl-4">
                                                                <h4 class="sub-title">UNORDERED</h4>
                                                                <ul>
                                                                    <li>Lorem ipsum dolor sit amet</li>
                                                                    <li>Consectetur adipiscing elit</li>
                                                                    <li>Integer molestie lorem at massa</li>
                                                                    <li>Facilisis in pretium nisl aliquet</li>
                                                                    <li>Nulla volutpat aliquam velit
                                                                        <ul>
                                                                            <li>Phasellus iaculis neque</li>
                                                                            <li>Purus sodales ultricies</li>
                                                                            <li>Vestibulum laoreet porttitor sem</li>
                                                                            <li>Ac tristique libero volutpat at</li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>Faucibus porta lacus fringilla vel</li>
                                                                    <li>Aenean sit amet erat nunc</li>
                                                                    <li>Eget porttitor lorem</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-4">
                                                                <h4 class="sub-title">ORDERED</h4>
                                                                <ol>
                                                                    <li> Lorem ipsum dolor sit amet</li>
                                                                    <li>Consectetur adipiscing elit</li>
                                                                    <li>Integer molestie lorem at massa</li>
                                                                    <li>Facilisis in pretium nisl aliquet</li>
                                                                    <li>Nulla volutpat aliquam velit
                                                                        <ol>
                                                                            <li>Phasellus iaculis neque</li>
                                                                            <li>Purus sodales ultricies</li>
                                                                            <li>Vestibulum laoreet porttitor sem</li>
                                                                            <li>Ac tristique libero volutpat at</li>
                                                                        </ol>
                                                                    </li>
                                                                    <li>Faucibus porta lacus fringilla vel</li>
                                                                    <li>Aenean sit amet erat nunc</li>
                                                                    <li>Eget porttitor lorem</li>
                                                                </ol>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-4">
                                                                <h4 class="sub-title">UNSTYLED</h4>
                                                                <div class="row col-sm-12">
                                                                    <ul class="list-unstyled">
                                                                        <li>Lorem ipsum dolor sit amet</li>
                                                                        <li>Integer molestie lorem at massa</li>
                                                                        <li>Phasellus iaculis neque</li>
                                                                        <li>Faucibus porta lacus fringilla vel</li>
                                                                        <li>Eget porttitor lorem</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="row col-sm-12">
                                                                    <div class="inline-order-list">
                                                                        <h4 class="sub-title">Inline</h4>
                                                                        <p class="text-muted">
                                                                            Place all list items on a single line with <code>
                              display: inline-block;</code>
                                                                        </p>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <ul class="list-inline m-b-0">
                                                                            <li class="list-inline-item">Lorem ipsum</li>
                                                                            <li class="list-inline-item">Phasellus iaculis</li>
                                                                            <li class="list-inline-item">Nulla volutpat</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- List Tag card end -->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Other card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Other</h5>
                                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                        <div class="card-header-right">                                                             <i class="icofont icofont-spinner-alt-5"></i>                                                         </div>
                                                    </div>
                                                    <div class="card-block list-tag">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-xl-3">
                                                                <h4 class="sub-title">Fancy listing 1</h4>
                                                                <ul>
                                                                    <li>
                                                                        <i class="icofont icofont-bubble-right"></i> Lorem ipsum dolor sit amet
                                                                    </li>
                                                                    <li>
                                                                        <i class="icofont icofont-bubble-right"></i> Consectetur adipiscing elit
                                                                    </li>
                                                                    <li>
                                                                        <i class="icofont icofont-bubble-right"></i> Integer molestie lorem at massa
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-3">
                                                                <h4 class="sub-title">Fancy listing 2</h4>
                                                                <ul>
                                                                    <li>
                                                                        <i class="icofont icofont-double-right text-success"></i> Lorem ipsum dolor sit amet
                                                                    </li>
                                                                    <li>
                                                                        <i class="icofont icofont-double-right text-success"></i> Consectetur adipiscing elit
                                                                    </li>
                                                                    <li>
                                                                        <i class="icofont icofont-double-right text-success"></i> Integer molestie lorem at massa
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-3">
                                                                <h4 class="sub-title">Fancy listing 2</h4>
                                                                <ul>
                                                                    <li>
                                                                        <i class="icofont icofont-hand-right text-info"></i> Lorem ipsum dolor sit amet
                                                                    </li>
                                                                    <li>
                                                                        <i class="icofont icofont-hand-right text-info"></i> Consectetur adipiscing elit
                                                                    </li>
                                                                    <li>
                                                                        <i class="icofont icofont-hand-right text-info"></i> Integer molestie lorem at massa
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-3">
                                                                <h4 class="sub-title">Fancy listing 2</h4>
                                                                <ul>
                                                                    <li>
                                                                        <i class="icofont icofont-stylish-right text-danger"></i> Lorem ipsum dolor sit amet
                                                                    </li>
                                                                    <li>
                                                                        <i class="icofont icofont-stylish-right text-danger"></i> Consectetur adipiscing elit
                                                                    </li>
                                                                    <li>
                                                                        <i class="icofont icofont-stylish-right text-danger"></i> Integer molestie lorem at massa
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Other card end -->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Other</h5>
                                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                        <div class="card-header-right">                                                             <i class="icofont icofont-spinner-alt-5"></i>                                                         </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-xl-6">
                                                                <h4 class="sub-title">BLOCKQUOTES</h4>
                                                                <p class="text-muted m-b-30">
                                                                    Your awesome text goes here.
                                                                </p>
                                                                <blockquote class="blockquote">
                                                                    <p class="m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                                    <footer class="blockquote-footer">Someone famous in
                                                                        <cite title="Source Title">Source Title</cite>
                                                                    </footer>
                                                                </blockquote>
                                                                <p class="text-muted m-b-15 m-t-20">
                                                                   For a blockquote with right-aligned content.
                                                                </p>
                                                                <blockquote class="blockquote blockquote-reverse">
                                                                    <p class="m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                                    <footer class="blockquote-footer">Someone famous in
                                                                        <cite title="Source Title">Source Title</cite>
                                                                    </footer>
                                                                </blockquote>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-6">
                                                                <h4 class="sub-title">HORIZONTAL DESCRIPTION</h4>
                                                                <dl class="dl-horizontal row">
                                                                    <dt class="col-sm-3">Description lists</dt>
                                                                    <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
                                                                    <dt class="col-sm-3">Euismod</dt>
                                                                    <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                                                    <dd class="col-sm-12 col-sm-offset-3">Donec id elit non mi porta gravida at eget metus.</dd>
                                                                    <dt class="col-sm-3">Malesuada porta</dt>
                                                                    <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>
                                                                    <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                                                    <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
</body>

</html>
