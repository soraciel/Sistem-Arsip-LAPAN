<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Bordered Header | Remark Admin Template</title>

  <link rel="apple-touch-icon" href="<?php echo base_url();?>assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/site.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/flag-icon-css/flag-icon.css">


  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


  <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="<?php echo base_url();?>assets/vendor/media-match/media.match.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="<?php echo base_url();?>assets/vendor/modernizr/modernizr.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

   
      <!-- End Site Navbar Seach -->
<div class="page-header">
      <h1 class="page-title">Lihat arsip</h1>
      <div class="page-header-actions">
        <form>
          <div class="input-search input-search-dark">
            <i class="input-search-icon wb-search" aria-hidden="true"></i>
            <input type="text" class="form-control" name="" placeholder="Search...">
          </div>
        </form>
      </div>
    </div>

    <div class="page-content">

      <div class="panel">
        <div class="panel-heading">
      
                      <div class="dropdown">
                        <button type="button" class="btn btn-info dropdown-toggle" id="exampleColorDropdown4"
                        data-toggle="dropdown" aria-expanded="false">Arsip terbaru
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-info" aria-labelledby="exampleColorDropdown4"
                        role="menu">
                          <li role="presentation"><a href="javascript:void(0)" role="menuitem">Sort by jenis</a></li>
                          <li role="presentation"><a href="javascript:void(0)" role="menuitem">sort by date</a></li>
                          <li class="active" role="presentation"><a href="javascript:void(0)" role="menuitem">Something else here</a></li>
                          <li role="presentation"><a href="javascript:void(0)" role="menuitem">Separated link</a></li>
                        </ul>
                      </div>
                    
        </div>
        <div class="panel-body">
         <!-- Example Bordered Table -->
              <div class="example-wrap"> <!--ganti kolom searching-->
                Add<code>.table-bordered</code>for borders on all sides of the
                  table and cells.</p>
                <div class="example table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>no. surat</th>
                        <th>jenis surat</th>
                        <th>isi surat</th>
                        <th class="text-nowrap">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Lunar probe project</td>
                        <td>
                          <div class="progress progress-xs margin-vertical-10 ">
                            <div class="progress-bar progress-bar-danger" style="width: 35%"></div>
                          </div>
                        </td>
                        <td>May 15, 2015</td>
                        <td class="text-nowrap">
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Edit">
                            <i class="icon wb-wrench" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Delete">
                            <i class="icon wb-close" aria-hidden="true"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Dream successful plan</td>
                        <td>
                          <div class="progress progress-xs margin-vertical-10 ">
                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                          </div>
                        </td>
                        <td>July 1, 2015</td>
                        <td class="text-nowrap">
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Edit">
                            <i class="icon wb-wrench" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Delete">
                            <i class="icon wb-close" aria-hidden="true"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Office automatization</td>
                        <td>
                          <div class="progress progress-xs margin-vertical-10 ">
                            <div class="progress-bar progress-bar-success" style="width: 100%"></div>
                          </div>
                        </td>
                        <td>Apr 12, 2015</td>
                        <td class="text-nowrap">
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Edit">
                            <i class="icon wb-wrench" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Delete">
                            <i class="icon wb-close" aria-hidden="true"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>The sun climbing plan</td>
                        <td>
                          <div class="progress progress-xs margin-vertical-10 ">
                            <div class="progress-bar progress-bar-primary" style="width: 70%"></div>
                          </div>
                        </td>
                        <td>Aug 9, 2015</td>
                        <td class="text-nowrap">
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Edit">
                            <i class="icon wb-wrench" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Delete">
                            <i class="icon wb-close" aria-hidden="true"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Open strategy</td>
                        <td>
                          <div class="progress progress-xs margin-vertical-10 ">
                            <div class="progress-bar progress-bar-primary" style="width: 85%"></div>
                          </div>
                        </td>
                        <td>Apr 2, 2015</td>
                        <td class="text-nowrap">
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Edit">
                            <i class="icon wb-wrench" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Delete">
                            <i class="icon wb-close" aria-hidden="true"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Tantas earum numeris</td>
                        <td>
                          <div class="progress progress-xs margin-vertical-10 ">
                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                          </div>
                        </td>
                        <td>July 11, 2015</td>
                        <td class="text-nowrap">
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Edit">
                            <i class="icon wb-wrench" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Delete">
                            <i class="icon wb-close" aria-hidden="true"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
             
        </div>
      </div>
    </div>
  </div>
  <!-- End Page -->

   <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->

  <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">© 2015 Remark</span>
    <div class="site-footer-right">
      Crafted with <i class="red-600 wb wb-heart"></i> by <a href="http://themeforest.net/user/amazingSurge">amazingSurge</a>
    </div>
  </footer>

  <!-- Core  -->
  <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/bootstrap.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/animsition/jquery.animsition.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

  <!-- Plugins -->
  <script src="<?php echo base_url();?>assets/vendor/switchery/switchery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/intro-js/intro.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/screenfull/screenfull.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/slidepanel/jquery-slidePanel.js"></script>


  <!-- Scripts -->
  <script src="<?php echo base_url();?>assets/js/core.js"></script>
  <script src="<?php echo base_url();?>assets/js/site.js"></script>

  <script src="<?php echo base_url();?>assets/js/sections/menu.js"></script>
  <script src="<?php echo base_url();?>assets/js/sections/menubar.js"></script>
  <script src="<?php echo base_url();?>assets/js/sections/sidebar.js"></script>

  <script src="<?php echo base_url();?>assets/js/configs/config-colors.js"></script>
  <script src="<?php echo base_url();?>assets/js/configs/config-tour.js"></script>

  <script src="<?php echo base_url();?>assets/js/components/asscrollable.js"></script>
  <script src="<?php echo base_url();?>assets/js/components/animsition.js"></script>
  <script src="<?php echo base_url();?>assets/js/components/slidepanel.js"></script>
  <script src="<?php echo base_url();?>assets/js/components/switchery.js"></script>


  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>

</body>

</html>