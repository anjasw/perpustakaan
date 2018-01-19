
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Form Wizard | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />
		<link href="<?php echo base_url() ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />
		<link href="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
		<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    FORM WIZARD
                    <small>Taken from <a href="https://github.com/rstaib/jquery-steps" target="_blank">github.com/rstaib/jquery-steps</a> & <a href="https://jqueryvalidation.org/" target="_blank">jqueryvalidation.org</a></small>
                </h2>
            </div>
            <!-- Basic Example | Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>BASIC EXAMPLE - HORIZONTAL LAYOUT</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="wizard_horizontal">
                                <h2>First Step</h2>
                                <section>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas
                                        arcu sem, hendrerit a tempor quis, sagittis accumsan tellus. In hac habitasse platea
                                        dictumst. Donec a semper dui. Nunc eget quam libero. Nam at felis metus. Nam tellus
                                        dolor, tristique ac tempus nec, iaculis quis nisi.
                                    </p>
                                </section>

                                <h2>Second Step</h2>
                                <section>
                                    <p>
                                        Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac
                                        ligula elementum pellentesque. In lobortis sollicitudin felis non eleifend. Morbi
                                        tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum dictum,
                                        nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien
                                        a diam adipiscing consectetur. In euismod augue ullamcorper leo dignissim quis elementum
                                        arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo
                                        velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis
                                        iaculis nec, malesuada a diam. Donec non pulvinar urna. Aliquam id velit lacus.
                                    </p>
                                </section>

                                <h2>Third Step</h2>
                                <section>
                                    <p>
                                        Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo
                                        condimentum dapibus. Fusce eros justo, pellentesque non euismod ac, rutrum sed quam.
                                        Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
                                        Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui
                                        commodo lectus sollicitudin in auctor mauris venenatis.
                                    </p>
                                </section>

                                <h2>Forth Step</h2>
                                <section>
                                    <p>
                                        Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula
                                        vulputate. Aliquam sed sem tortor. Quisque sed felis ut mauris feugiat iaculis nec
                                        ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae.
                                        Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo
                                        tortor.
                                    </p>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Example | Horizontal Layout -->
            <!-- Basic Example | Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>BASIC EXAMPLE - VERTICAL LAYOUT</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="wizard_vertical">
                                <h2>First Step</h2>
                                <section>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas
                                        arcu sem, hendrerit a tempor quis, sagittis accumsan tellus. In hac habitasse platea
                                        dictumst. Donec a semper dui. Nunc eget quam libero. Nam at felis metus. Nam tellus
                                        dolor, tristique ac tempus nec, iaculis quis nisi.
                                    </p>
                                </section>

                                <h2>Second Step</h2>
                                <section>
                                    <p>
                                        Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac
                                        ligula elementum pellentesque. In lobortis sollicitudin felis non eleifend. Morbi
                                        tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum dictum,
                                        nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien
                                        a diam adipiscing consectetur. In euismod augue ullamcorper leo dignissim quis elementum
                                        arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo
                                        velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis
                                        iaculis nec, malesuada a diam. Donec non pulvinar urna. Aliquam id velit lacus.
                                    </p>
                                </section>

                                <h2>Third Step</h2>
                                <section>
                                    <p>
                                        Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo
                                        condimentum dapibus. Fusce eros justo, pellentesque non euismod ac, rutrum sed quam.
                                        Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
                                        Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui
                                        commodo lectus sollicitudin in auctor mauris venenatis.
                                    </p>
                                </section>

                                <h2>Forth Step</h2>
                                <section>
                                    <p>
                                        Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula
                                        vulputate. Aliquam sed sem tortor. Quisque sed felis ut mauris feugiat iaculis nec
                                        ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae.
                                        Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo
                                        tortor.
                                    </p>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Example | Vertical Layout -->
            <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>ADVANCED FORM EXAMPLE WITH VALIDATION</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form id="wizard_with_validation" method="POST">
                                <h3>Account Information</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="username" required>
                                            <label class="form-label">Username*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="password" id="password" required>
                                            <label class="form-label">Password*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="confirm" required>
                                            <label class="form-label">Confirm Password*</label>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Profile Information</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="name" class="form-control" required>
                                            <label class="form-label">First Name*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="surname" class="form-control" required>
                                            <label class="form-label">Last Name*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" name="email" class="form-control" required>
                                            <label class="form-label">Email*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea name="address" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                            <label class="form-label">Address*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input min="18" type="number" name="age" class="form-control" required>
                                            <label class="form-label">Age*</label>
                                        </div>
                                        <div class="help-info">The warning step will show up if age is less than 18</div>
                                    </div>
                                </fieldset>

                                <h3>Terms & Conditions - Finish</h3>
                                <fieldset>
                                    <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                                    <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url() ?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>
		<script src="<?php echo base_url() ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
		<script src="<?php echo base_url() ?>assets/plugins/jquery-validation/jquery.validate.js"></script>
		<script src="<?php echo base_url() ?>assets/plugins/jquery-steps/jquery.steps.js"></script>
		<script src="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert.min.js"></script>
		<script src="<?php echo base_url() ?>assets/plugins/node-waves/waves.js"></script>
		<script src="<?php echo base_url() ?>assets/js/admin.js"></script>
    <script src="<?php echo base_url() ?>assets/js/pages/forms/form-wizard.js"></script>
		<script src="<?php echo base_url() ?>assets/js/demo.js"></script>
</body>
</html>
