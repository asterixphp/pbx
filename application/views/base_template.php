<?php
$user_name = $_SESSION['user_name'];
$active = '';
if(isset($_REQUEST['active'])) $active = $_REQUEST['active'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Delivery System | <?php echo $page_header; ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <!-- Ionicons -->
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Jura:300' rel='stylesheet' type='text/css'>
        <!-- DATA TABLES -->
        <link href="<?php echo base_url('includes/AdminLTE/css/datatables/dataTables.bootstrap.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('includes/AdminLTE/css/AdminLTE.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('includes/AdminLTE/css/custom.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('includes/AdminLTE/js/plugins/jquery-ui/jquery-ui.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('includes/AdminLTE/js/plugins/jQuery-Validation/css/validationEngine.jquery.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('includes/AdminLTE/plugins/datepicker/datepicker3.css'); ?>" rel="stylesheet" type="text/css" />


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!-- AdminLTE App -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url('includes/AdminLTE/js/AdminLTE/app.js'); ?>" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="<?php echo base_url('includes/AdminLTE/js/plugins/datatables/jquery.dataTables.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('includes/AdminLTE/js/plugins/datatables/dataTables.bootstrap.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('includes/AdminLTE/js/AdminLTE/custom.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('includes/AdminLTE/js/AdminLTE/config.js'); ?>" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url('includes/AdminLTE/js/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('includes/AdminLTE/js/plugins/jQuery-Validation/js/languages/jquery.validationEngine-en.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('includes/AdminLTE/js/plugins/jQuery-Validation/js/jquery.validationEngine.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('includes/AdminLTE/plugins/select2/select2.full.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('includes/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('includes/AdminLTE/bootstrap/js/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url('includes/AdminLTE/plugins/input-mask/jquery.inputmask.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('includes/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('includes/AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('includes/AdminLTE/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('includes/AdminLTE/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>


    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo base_url('/'); ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                PhonePlus
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php //echo $this->session->userdata('user_fname').' '.$this->session->userdata('user_lname') ?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">

                                    <p>
                                        <?php //echo $this->session->userdata('user_fname').' '.$this->session->userdata('user_lname') . ' - ' . strtoupper($this->session->userdata('user_type')); ?>
                                        <small>Member since <?php //echo $this->session->userdata('created_on'); ?></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url('index.php/login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left info">
                            <p>Hello, <?php  $name = explode(' ',$user_name); echo $name[0]?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Menu List"/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat">
                                  <!-- <i class="fa fa-search"></i> -->
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">

                         <li class="<?php if($active == 'user') echo 'active';?>">
                            <a href="<?php echo base_url('index.php/user?active=user'); ?>">
                                <i class="fa fa-user"></i> <span>Users</span>
                            </a>
                        </li>
                        <li class="<?php if($active == 'exten') echo 'active';?>">
                            <a href="<?php echo base_url('index.php/exten?active=exten'); ?>">
                                <i class="fa fa-cog"></i> <span>Extension</span>
                            </a>
                        </li>
                        <li class="<?php if($active == 'register') echo 'active';?>">
                            <a href="<?php echo base_url('index.php/register_table?active=exten'); ?>">
                                <i class="fa fa-cog"></i> <span>Call History</span>
                            </a>
                        </li>
                        <li class="<?php if($active == 'exten') echo 'active';?>">
                            <a href="<?php echo base_url('index.php/register_table?active=exten'); ?>">
                                <i class="fa fa-cog"></i> <span>Channel History</span>
                            </a>
                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?php echo $page_header; ?>
                        <small><?php echo $page_sub_header; ?></small>
                    </h1>
                    <ol class="breadcrumb">
                         <li> <a href="<?php echo base_url('index.php/login/logout'); ?>">
                            <i class="fa fa-unlock"></i> Log Out</a></li>
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><?php echo $page_header; ?></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <?php echo $content; ?>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


    </body>
</html>
