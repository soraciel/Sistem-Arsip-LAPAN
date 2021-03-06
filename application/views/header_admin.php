              <!-- <i class="icon hamburger hamburger-arrow-left"> -->
<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Arsip Pustekbang</title>

  <link rel="apple-touch-icon" href="<?php echo base_url();?>assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/site.min.css">

  <!--<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/animsition/animsition.css">-->
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>
      $(document).ready(function(){
          $("toggle").click(function(){
              $("hide_date").toggle();
          });
      });
  </script>
  <script type="text/javascript">
$(document).ready(function(){
    $(".datepicker").each(function() {
        $(this).datepicker();
    });
});</script>

<script type="text/javascript">
function toggleZoomScreen() {
document.body.style.zoom="80%"
} 
</script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body style="background-color:#e4eaec;">

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header" style="width=200px;">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>      
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">        
        <img class="navbar-brand-logo" src="<?php echo base_url();?>assets/images/logolapan.png" width="50" length="50" alt="...">        
        <span class="navbar-brand-text"> Pustekbang</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li>
              <a>Selamat datang, <?php echo $NAMA_PEG ?>
            </a>
          </li>
                </ul>
                <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">                    
                  <li role="presentation">
                    <a href="<?= base_url() ?>index.php/login/logout" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Keluar</a>
                  </li>    
                </ul>
                    </div>
                    
    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

      </div>
      <!-- End Navbar Collapse -->

      
    </div>
  </nav>
  <div class="site-menubar" style="width=200px;">
    <div class="site-menubar-body">      
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">Halaman Admin</li>
            <li class="site-menu-item">
              <a class="animsition-link" href="<?php echo base_url(); ?>index.php/arsip/view_admin" data-slug="uikit-buttons">
                <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                <span class="site-menu-title">Arsip</span>
                <!-- <span class="site-menu-arrow"></span> -->
              </a>            
            </li>     
            <li class="site-menu-item">
              <a class="animsition-link" href="<?php echo base_url(); ?>index.php/user/view" data-slug="uikit-buttons">
                <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                <span class="site-menu-title">User</span>
                <!-- <span class="site-menu-arrow"></span> -->
              </a>            
            </li>                                                                
          </ul>
        </div>
      </div>

  </div>
<div class="page">
    <div class="page-content">
  
