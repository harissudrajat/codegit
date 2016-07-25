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

    <body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col menu_fixed">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a class="site_title" href="<?php echo base_url() ?>">
                            <i aria-hidden="true" class="glyphicon glyphicon-grain"></i>
                            <span>Kantong Kehamilan</span>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <!-- sidebar menu -->
                    <div class="main_menu_side hidden-print main_menu" id="sidebar-menu">
                        <div class="menu_section">
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
                    Kantong Kehamilan - HLMC - Created By : <a href="http://">Haris Sudrajat</a>
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
    <!-- Datatables -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/jszip/dist/jszip.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/pdfmake/build/pdfmake.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/pdfmake/build/vfs_fonts.js"></script>


    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
  </body>
</html>