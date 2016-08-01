
  <!-- Page -->
    <div class="page-content">
      <!-- Judul -->
      <div class="page-header">
        <h1 class="page-title">Lihat Arsip</h1>
        <div class="page-header-actions">
          <form>
            <div class="input-search input-search-light">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="" placeholder="Search...">
            </div>
          </form>
        </div>
      </div>
<!-- end judul -->
      <div class="panel">
        <div class="panel-heading">                    
                      
<!-- Example Quick Menu Small -->
        
          <ul class="nav-quick nav-quick-sm row">
            <li class="col-sm-2 col-xs-4">
           <div class="dropdown" >
                        <button type="button" class="btn btn-info dropdown-toggle" id="exampleColorDropdown4"
                        data-toggle="dropdown" aria-expanded="false">Arsip terbaru
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-info" aria-labelledby="exampleColorDropdown4"
                        role="menu">
                                                    <li class="active" role="presentation"><a href="javascript:void(0)" role="menuitem">Arsip Terbaru</a></li>

                        <li role="presentation"><a href="javascript:void(0)" role="menuitem">Dokumen Abadi</a></li>
                          <li role="presentation"><a href="javascript:void(0)" role="menuitem">Surat Perjanjian/keuangan</a></li>
                          <li role="presentation"><a href="javascript:void(0)" role="menuitem">Surat kantor/dinas/sk</a></li>
                          
                          <li role="presentation"><a href="javascript:void(0)" role="menuitem">undangan rapat</a></li>
                          <li role="presentation"><a href="javascript:void(0)" role="menuitem">koran</a></li>
                        </ul>
                      </div>
            </li>
            <li class="col-sm-2 col-xs-4">
            <form>
            </form>

            </li>
            <li class="col-sm-2 col-xs-4">
             
            </li>
            <li class="col-sm-2 col-xs-4">
            
            </li>
            <li class="col-sm-2 col-xs-4">
              
            </li>
            <li class="col-sm-2 col-xs-5">
             <div class="col-md-9">                
                <button type="button" class="btn btn-block btn-info" onclick="location.href='<?php echo base_url();?>index.php/arsip/tambah_arsip'">Tambah Arsip</button>
</div>
            </li>
          </ul>
        <!-- End Example Quick Menu Small -->
                    
        </div>
        <div class="panel-body">
         <!-- Example Bordered Table -->
              <div class="example-wrap"> <!--ganti kolom searching-->
                
                <div class="example table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>no. surat</th>
                        <th>judul surat</th>
                        <th>jenis surat</th>
                        <th>tanggal surat</th>
                        <th>isi surat</th>
                        <th class="text-nowrap">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>A.001/Pan-Pel/AKB/I/2014 </td>
                        <td> surat keputusan</td>
                        <td>
                          dokumen abadi
                        </td>
                        <td>May 15, 2015</td>
                        <td>file</td>
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
                        <td>A.002/Pan-Pel/AKB/I/2014 </td>
                        <td> surat keputusan</td>
                        <td>
                          koran
                          </div>
                        </td>
                        <td>July 1, 2015</td>
                        <td>file</td>
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
                        <td>A.003/Pan-Pel/AKB/I/2014 </td>
                        <td> surat keputusan</td>
                        <td>
                         undangan rapat
                          </div>
                        </td>
                        <td>Apr 12, 2015</td>
                        <td>file</td>
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
                        <td>A.004/Pan-Pel/AKB/I/2014 </td>
                        <td> surat keputusan</td>
                        <td>
                         Surat Kantor
                          </div>
                        </td>
                        <td>Aug 9, 2015</td>
                        <td>file</td>
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
  <!-- End Page -->


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
