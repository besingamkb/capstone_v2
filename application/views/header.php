<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="base_url" content="<?php echo base_url(); ?>">

    <title><?php echo (empty($title)) ? "" : $title ; ?> | Bureau of Customs</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/calendar.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url() ?>assets/css/plugins/metisMenu/metisMenu.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>assets/font-awesome-4.1.0/css/font-awesome.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <script src="<?php echo base_url() ?>assets/js/jquery-1.11.0.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/components/underscore/underscore-min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/components/jstimezonedetect/jstz.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/sb-admin-2.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/calendar.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/apps.js"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top bdo-blue" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"></a>
            </div>
            <!-- /.navbar-header -->

           
            <ul class="nav navbar-top-links navbar-right">
                 <?php if ($this->session->userdata('is_logged') == true && $this->session->userdata('ulevel') ==  1) : ?>
                <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-file-o fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <!-- <li>
                        <a href="#">
                            <div>
                                <strong>Larry Page</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>Bill Gates</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>Mark Z.</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li> -->
                    <!-- <li>
                        <a class="text-center" href="#">
                            <strong>Read All Anouncement</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li> -->
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <?php endif ?>

                <?php if ($this->session->userdata('is_logged') == true) : ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url() ?>index.php/login/loggingOut"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                 <?php endif ?>
            </ul>

            <div class="navbar-default sidebar bdo-light-blue" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <?php if ($this->session->userdata('is_logged') == true && $this->session->userdata('ulevel') ==  1) : ?>
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search Employee..">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li><?php endif; ?>
                        <li>
                            <a href="<?php echo base_url(); ?>"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/home/about"><i class="fa fa-question-circle fa-fw"></i> About Us</a>
                            <!-- <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul> -->
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/home/calendar"><i class="fa fa-calendar-o fa-fw"></i> Calendar</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/home/contact"><i class="fa fa-edit fa-fw"></i> Contact Us</a>
                        </li>
                        <li style="display: none">
                            <a href="#"><i class="fa fa-bullhorn fa-fw"></i> Announcement</span></a>
                            <!-- <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul> -->
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-question-circle fa-fw"></i> Inquiries<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Importance</a>
                                </li>
                                <li>
                                    <a href="#">Privileges</a>
                                </li>
                                <li>
                                    <a href="#">PROBIHITED/RESTRICTION IMPORTATIONS</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>index.php/home/portmap">Port Maps</span></a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-clipboard fa-fw"></i> Careers<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Training</a>
                                </li>
                                <li>
                                    <a href="#">Job training</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php if ($this->session->userdata('is_logged') == true && $this->session->userdata('ulevel') ==  1) : ?>
                        <li class="active">
                        <a href="login.html"><i class="fa fa-user fa-fw"></i> Admin Option<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a  href="<?php echo base_url() ?>index.php/boc_system"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>index.php/user/all"><i class="fa fa-users fa-fw"></i> Users</a>
                            </li>
                            <li>
                               <a href="#"><i class="fa fa-sitemap fa-fw"></i> Departments<span class="fa arrow"></span></a>

                                <ul class="nav nav-third-level" style="">
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/department/index/1">Top Management</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/department/index/2">Assesment & Operation Coordinating Group</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/department/index/3">Intelligent Group</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/department/index/4">Management Information System Technical Group</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/department/index/5">Interim Internal Control</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/department/index/6">Internal Administration Group</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/department/index/7">Revenue Collection Monitoring Group</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/department/index/8">Enforcement Group</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/department/index/9">Post Entry & Audit Group</a>
                                    </li>
                                </ul>
                            </li>
                        <li>
                            <a href=""><i class="fa fa-cogs fa-fw"></i> General Settings<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level" style="">
                                <li>
                                    <a href="">Document Archieves</a>
                                </li>
                                <li>
                                    <a href="">Port Maps</a>
                                </li>
                                <li>
                                    <a href="">Content Management</a>
                                </li>
                                <li>
                                    <a href="">Calendar</a>
                                </li>
                                <li>
                                    <a href="">Logs</a>
                                </li>
                            </ul>
                        </li>
                        <?php endif ?>
                        <?php if ($this->session->userdata('is_logged') != true) : ?>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/login"><i class="fa fa-user fa-fw"></i> Login</span></a>
                        </li>
                        <?php endif ?>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>