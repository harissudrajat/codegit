<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kantong Kehamilan HLMC</title>


    <link href="<?php echo base_url() ?>assets/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/nprogress/nprogress.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>assets/css/custom.min.css" rel="stylesheet">
    
    </head>

    <body class="nav-md footer_fixed">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col menu_fixed">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a class="site_title" href="<?php echo base_url() ?>">
                            <i class="fa fa-child">
                            </i>
                            <span>
                                KH
                            </span>
                        </a>
                    </div>
                    <div class="clearfix">
                    </div>
                    <!-- menu profile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img alt="..." class="img-circle profile_img" src="<?php echo base_url() ?>assets/img/img.jpg">
                            </img>
                        </div>
                        <div class="profile_info">
                            <span>Selamat Datang</span>
                            <h2>User</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->
                    <br/>
                    <!-- sidebar menu -->
                    <div class="main_menu_side hidden-print main_menu" id="sidebar-menu">
                        <div class="menu_section">
                            <h3>
                                General
                            </h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i>Home</a></li>
                                <li>
                                    <a><i class="fa fa-edit"></i>Menu<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?php echo base_url() ?>">Nama Sub Menu</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-placement="top" data-toggle="tooltip" title="Settings">
                            <span aria-hidden="true" class="glyphicon glyphicon-cog">
                            </span>
                        </a>
                        <a data-placement="top" data-toggle="tooltip" title="FullScreen">
                            <span aria-hidden="true" class="glyphicon glyphicon-fullscreen">
                            </span>
                        </a>
                        <a data-placement="top" data-toggle="tooltip" title="Lock">
                            <span aria-hidden="true" class="glyphicon glyphicon-eye-close">
                            </span>
                        </a>
                        <a data-placement="top" data-toggle="tooltip" title="Logout">
                            <span aria-hidden="true" class="glyphicon glyphicon-off">
                            </span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- NAVIGASI KANAN ATAS -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle">
                                <i class="fa fa-bars">
                                </i>
                            </a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a aria-expanded="false" class="user-profile dropdown-toggle" data-toggle="dropdown" href="javascript:;">
                                    <img alt="" src="<?php echo base_url() ?>assets/img/img.jpg">
                                        John Doe
                                        <span class=" fa fa-angle-down">
                                        </span>
                                    </img>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="<?php echo base_url() ?>">Profile</a></li>
                                    <li><a href="<?php echo base_url() ?>"><i class="fa fa-sign-out pull-right"></i>Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- END NAVIGASI KANAN ATAS -->
            
            <!-- page content -->
            <div class="right_col" role="main">
            <?php echo $content; ?>
            </div>
            <!-- /page content -->
            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Kantong Kehamilan
                    <a href="http://">
                        By : Haris Sudrajat
                    </a>
                </div>
                <div class="clearfix">
                </div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>


    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/fastclick/lib/fastclick.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/nprogress/nprogress.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/custom.min.js"></script>
  </body>
</html>