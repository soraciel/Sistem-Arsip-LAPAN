    
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Lapan Arsip | Tambah Arsip</title>

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
  </head>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(".datepicker").each(function() {
        $(this).datepicker();
    });
});</script>
<body bgcolor="#e4eaec">


 <div>
                  <h4 class="example-title">Tanggal</h4>
                 <input type="text" class="datepicker"/>
                <br>
                </div>

                
 <div class="page-content">
      <div class="panel">            
            <div class="panel-body container-fluid" style="padding: 0px 350px">
              <form autocomplete="off">
                
                <div >
                  <br>
                  <h4 class="example-title">Nomor Surat</h4>
                  <input type="text" class="form-control" id="inputPlaceholder" placeholder="placeholder">
                  <br>
                </div>

                <div>
                  <h4 class="example-title">Judul</h4>
                  <input type="text" class="form-control" id="inputPlaceholder" placeholder="placeholder">
                  <br>
                </div>
            
               <div> 
                <h4 class="example-title">File Upload</h4>
                <div class="form-group">
                  <div class="input-group input-group-file">
                    <input type="text" class="form-control" readonly="">
                    <span class="input-group-btn">
                      <span class="btn btn-success btn-file">
                        <i class="icon wb-upload" aria-hidden="true"></i>
                        <input type="file" name="" multiple="">
                      </span>
                    </span>
                  </div>
                </div>
                
              </div>
                
                <div>
                  <h4 class="example-title">Tanggal</h4>
                 <input type="text" class="datepicker"/>
                <br>
                </div>
                
                <div>
                  <h4 class="example-title">Jenis Surat</h4>
                  <select class="form-control">
                    <option>&nbsp;</option>
                    <option>Dokumen Abadi</option>
                    <option>Surat Perjanjian/Keuangan</option>
                    <option>Surat Kantor/Dinas/SK</option>
                    <option>Undangan Rapat</option>
                    <option>Koran</option>
                  </select>
                </div>
        </div> 
      </div>
     </div>
     </body>