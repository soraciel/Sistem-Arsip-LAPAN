      <!-- End Site Navbar Seach -->
<!-- <body class="warna"> -->

<div class="page-header">
      <h1 class="page-title">Lihat Arsip
                         <?php foreach ($i as $row1) {
                           if($row1->id_jenis_arsip == $jenis_arsip){?>
                           <td><?php echo $row1->jenis_arsip;?></td>
                           <?php }}?>

</h1>
      <div class="page-header-actions">
        <form action="<?php echo base_url();?>index.php/arsip/search" method="post">
          <div class="input-search input-search-dark">
            <i class="input-search-icon wb-search" aria-hidden="true"></i>
            <input type="text" class="form-control" name="search_input" placeholder="Search...">
          </div>
        </form>
      </div>
    </div>
<div class="page-content">
  <script type="text/javascript">

  </script>
  <div class="panel-body" style="padding:0px 30px; background-color:white">    
      <div class="panel-heading" style="padding:10px;">                                        
        <!-- Example Quick Menu Small -->
        <!-- <div class="example" > -->
          <ul class="nav-quick nav-quick-sm row">
            <li class="col-sm-2 col-xs-4">

          <div class="dropdown" >
                      <button type="button" class="btn btn-info dropdown-toggle" id="exampleColorDropdown4"
                        data-toggle="dropdown" aria-expanded="false">Saring Arsip
                          <span class="caret"></span>
                        </button>

                 <!--   <select class="dropdown-menu dropdown-menu-info" name="KET" aria-labelledby="exampleColorDropdown4"
                        role="menu">
                    <option  role="presentation"><a href="javascript:void(0)" role="menuitem">Nuning</option>
                    <option  role="presentation"><a href="javascript:void(0)" role="menuitem">User</option>
                    <option  role="presentation"><a href="javascript:void(0)" role="menuitem">Administrator</option>
                  </select>-->
                        
                        <ul class="dropdown-menu dropdown-menu-info" aria-labelledby="exampleColorDropdown4"
                        role="menu">
                          <li  name="surat-baru" role="presentation"><a href="<?php echo base_url(); ?>index.php/arsip/view" role="menuitem">Arsip Terbaru</a></li>                          
                          <li><a href="#demo" data-toggle="collapse">Berdasarkan Tanggal</a></li>                          

                          <li name="dokumen-abadi"  value="1" role="presentation"><a href="<?php echo base_url(); ?>index.php/arsip/filter_arsip/1" role="menuitem">Dokumen Abadi</a></li>
                          <li role="presentation" value="2" ><a href="<?php echo base_url(); ?>index.php/arsip/filter_arsip/2" role="menuitem">Surat Perjanjian/keuangan</a></li>
                          <li name="surat-keuangan" role="presentation"value="3" ><a href="<?php echo base_url(); ?>index.php/arsip/filter_arsip/3" role="menuitem">Surat kantor/dinas/sk</a></li>                          
                          <li role="presentation"><a href="<?php echo base_url(); ?>index.php/arsip/filter_arsip/4" role="menuitem">Undangan Rapat</a></li>
                          <li role="presentation"><a href="<?php echo base_url(); ?>index.php/arsip/filter_arsip/5" role="menuitem">Koran</a></li>
                          <li role="presentation"><a href="<?php echo base_url(); ?>index.php/arsip/filter_arsip/6" role="menuitem">Laporan</a></li>
                          <li role="presentation"><a href="<?php echo base_url(); ?>index.php/arsip/filter_arsip/7" role="menuitem">Takah</a></li>
                
                        </ul>

                      </div>
            </li>
            <li class="col-sm-2 col-xs-4" style="borde:none;">                     
            </li>

            <li class="col-sm-2 col-xs-4">              
            </li>

            <li class="col-sm-2 col-xs-4">                      
            </li>
            <li class="col-sm-2 col-xs-4">
             
            </li>
            <li class="col-sm-2 col-xs-5">
              <div class="col-md-9">
                  <!-- <button type="button" class="btn btn-block btn-info"  onclick="location.href='<?php echo base_url();?>index.php/arsip/tambah_arsip'" > Tambah Arsip</button> -->
              </div>
            </li>
          </ul>
      </div>

      <div id="demo" class="collapse">
        <ul class="nav-quick nav-quick-sm row">
            <li class="col-sm-3 col-xs-4"></li>
            <li class="col-sm-2 col-xs-4"style="padding:0px 20px">
          <form action="<?php echo base_url();?>index.php/arsip/filter_arsip/tanggal"> 
                <span>tanggal awal</span>         
                <input width="15px" type="date" name="date1" class="form-control">
            </li>
            <li class="col-sm-2 col-xs-4" style="padding:0px 20px">
                <span>tanggal akhir</span>
                <input width="15px" type="date" name="date2" class="form-control">                
            </li>
            <li class="col-sm-2 col-xs-4" style="padding:0px 20px">
              <span> <br></span>
              <button type="submit" class="btn btn-block btn-info">Cari</button>              
            </li>
            <li class="col-sm-3 col-xs-4"></li>                
          </form>
      </div>

        <!-- End Example Quick Menu Small -->
      <div class="example-wrap"> <!-- ganti kolom searching                 -->
        <div class="example table-responsive" style="margin-top:5px;">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No. Surat</th>
                        <th>Judul/isi Surat</th>
                        <th>Jenis Surat</th>
                        <th>Tanggal Surat</th>
                        <th>Dokumen</th>                        
                        <th>Keterangan</th>
                        <th>Loker</th>
                        <th class="text-nowrap">Aksi</th>

                      </tr>
                    </thead>
                    <tbody>
                      
                      <?php if(empty($h))
                            { echo "Arsip Tidak ada";
                              ?> <h4>Arsip Tidak Ada</h4>
                      <?php }
                      else{
                      foreach ($h as $row){?>
                        <tr>
                         <td><?php echo $row->NO_SURAT;?></td>
                         <td><?php echo $row->JUDUL;?></td>
                         <?php foreach ($i as $row1) {
                           if($row1->id_jenis_arsip == $row->ID_JENIS_ARSIP){?>
                           <td><?php echo $row1->jenis_arsip;?></td>
                           <?php }}?>
                         
                         <td><?php echo $row->TANGGAL;?></td>                         
                         <td><a href="<?php echo base_url();?>uploads/<?php echo $row->ISI; ?>">Lihat surat</a></td>
                         <td><?php echo $row->Keterangan;?></td>
                         <td><?php echo $row->Loker;?></td>
                         <td class="text-nowrap">
                          <!--<button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Edit"><a href="<?php echo base_url(); ?>index.php/arsip/edit_arsip/<?php echo $row->ID_ARSIP;?>">
                            <i class="icon wb-wrench" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Delete"><a href="<?php echo base_url(); ?>index.php/arsip/delete_arsip/<?php echo $row->ID_ARSIP;?>">
                            <i class="icon wb-close" aria-hidden="true"></i>
                          </button>  -->
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Download"><a href="<?php echo base_url(); ?>index.php/arsip/download/<?php echo $row->ID_ARSIP;?>">
                            <i class="icon wb-download" aria-hidden="true"></i>
                          </button>   
                          
                             <button type="button" class="btn btn-pure btn-primary icon wb-print" onclick="PrintImage('<?php echo base_url();?>uploads/<?php echo $row->ISI; ?>'); return false;"></button>       
                        </td>             
                                      
                        </tr>
                      <?php }}?>                        
                    </tbody>
                  </table>
        </div>
      </div>             
  </div>     
</div>

<script type="text/javascript">
function ImagetoPrint(source) {
    return "<html><head><script>function step1(){\n" +
            "setTimeout('step2()', 10);}\n" +
            "function step2(){window.print();window.close()}\n" +
            "</scri" + "pt></head><body onload='step1()'>\n" +
            "<img src='" + source + "' /></body></html>";
}
function PrintImage(source) {
    Pagelink = "about:blank";
    var pwa = window.open(Pagelink, "_new");
    pwa.document.open();
    pwa.document.write(ImagetoPrint(source));
    pwa.document.close();
}
</script>
           
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
<!--  <script src="<?php echo base_url();?>assets/js/components/animsition.js"></script>-->
  <script src="<?php echo base_url();?>assets/js/components/slidepanel.js"></script>
  <script src="<?php echo base_url();?>assets/js/components/switchery.js"></script>
<!--

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>-->


</body>
</html>
