<html>
	<head>
		<style>
			.error{
				color:red;
				font-style:italic;
			}
		</style>
	    <meta charset="UTF-8">
	    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	    <title>Perpustakaan Pulsitbang</title>
			<link href="<?php echo base_url() ?>assets/plugins/dropify/css/dropify.min.css" type="text/css" rel="stylesheet" media="screen,projection">

			<link rel="icon" href="../../favicon.ico" type="image/x-icon">
	    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
	    <link href="<?php echo base_url() ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />
	    <link href="<?php echo base_url() ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />
      <link href="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
	    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
	    <link href="<?php echo base_url() ?>assets/css/themes/all-themes.css" rel="stylesheet" />
			<link href="<?php echo base_url() ?>assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

	</head>

	<body class="theme-red">
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
	    <div class="overlay"></div>

	    <nav class="navbar">
	        <div class="container-fluid">
	            <div class="navbar-header">
	                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
	                <a href="javascript:void(0);" class="bars"></a>
	                <a class="navbar-brand" href="<?php echo base_url() ?>">Sistem Informasi Perpustakaan</a>
	            </div>
							<div class="collapse navbar-collapse" id="navbar-collapse">
	                <ul class="nav navbar-nav navbar-right">
	                    <li class="pull-right"><a href="<?php echo base_url() ?>login/logout" class="js-right-sidebar" data-close="true">Logout</a></li>
	                </ul>
	            </div>
	        </div>
	    </nav>
	    <section>
	        <aside id="leftsidebar" class="sidebar">
	            <div class="user-info">
	                <div class="image">
	                    <img src="<?php echo base_url() ?>assets/images/user.png" width="48" height="48" alt="User" />
	                </div>
	                <div class="info-container">
	                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Anjas Wicaksana</div>
	                    <div class="email">anjaswicaksana122@gmail.com</div>
	                    <div class="btn-group user-helper-dropdown">
	                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
	                        <ul class="dropdown-menu pull-right">
	                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
	                            <li role="seperator" class="divider"></li>
	                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
	                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
	                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
	                            <li role="seperator" class="divider"></li>
	                            <li><a href="<?php echo base_url() ?>login/logout"><i class="material-icons">input</i>Sign Out</a></li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	            <div class="menu">
	                <ul class="list">
	                    <li class="header">Menu Pilihan</li>
	                    <li class="active">
	                        <a href="<?php echo base_url() ?>dashboard">
	                            <i class="material-icons">home</i>
	                            <span>Home</span>
	                        </a>
	                    </li>
	                    <li class="active">
	                        <a href="<?php echo base_url() ?>buku">
	                            <i class="material-icons">book</i>
	                            <span>Buku</span>
	                        </a>
	                    </li>
	                    <li class="active">
	                        <a href="<?php echo base_url() ?>majalah">
	                            <i class="material-icons">library_books</i>
	                            <span>Majalah</span>
	                        </a>
	                    </li>
	                </ul>
	            </div>
	            <div class="legal">
	                <div class="copyright">
	                    &copy; 2017 - 2018 <a href="javascript:void(0);">Perpustakaan Pulsitbang Gizi & Makanan</a>.
	                </div>
	            </div>
	        </aside>
	    </section>
	    <section class="content">
	        <div class="container-fluid">
	            <div class="row clearfix">
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="card">
	                        <div class="body">
	                            <div class="table-responsive">
	                                <?php $this->load->view($view) ?>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
      <script src="<?php echo base_url() ?>assets/js/pages/forms/form-wizard.js"></script>
		<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url() ?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>
	  <script src="<?php echo base_url() ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
		<script src="<?php echo base_url() ?>assets/plugins/node-waves/waves.js"></script>
		<script src="<?php echo base_url() ?>assets/js/admin.js"></script>
	  <script src="<?php echo base_url() ?>assets/js/pages/forms/basic-form-elements.js"></script>
		<script src="<?php echo base_url() ?>assets/js/pages/ui/modals.js"></script>
		<script src="<?php echo base_url() ?>assets/plugins/bootstrap-notify/bootstrap-notify.js"></script>
		<script src="<?php echo base_url() ?>assets/js/demo.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-steps/jquery.steps.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert.min.js"></script>
		<script src="<?php echo base_url() ?>assets/plugins/dropify/js/dropify.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-validation/jquery.validate.js"></script>



	</body>
</html>
