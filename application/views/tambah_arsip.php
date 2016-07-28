<body>
                
 <div class="page-content">
      <div class="panel">      
        <h1 class="page-title" style="text-align: center">Tambah Arsip</h1>
            <div class="panel-body container-fluid" style="padding: 0px 350px;">
              <form action="<?php echo base_url();?>/index.php/arsip/insert_arsip" method="post" enctype="multipart/form-data">
                
                <div >
                  <br>
                  <h4 class="example-title">Nomor Surat</h4>
                  <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nomor Surat" name="NO_SURAT">
                  <br>
                </div>

                <div>
                  <h4 class="example-title">Judul</h4>
                  <input type="text" class="form-control" id="inputPlaceholder" placeholder="Judul Surat" name="JUDUL">
                  <br>
                </div>
           
                
                <div class="form-group">
                  <h4 class="example-title">Tanggal</h4>                  
                    <input type="date" name="TANGGAL" class="form-control" id="inputDate2" data-plugin="formatter"
                    data-pattern="[[99]]/[[99]]/[[9999]]" />
                    <p class="help-block">01/01/2015</p>
                  </div>
                
                <div class="form-group">
                  <h4 class="example-title">Jenis Arsip</h4>                  
                  <select class="form-control" name="JENIS_ARSIP">
                    <option></option>
                      <?php foreach ($h as $row) {?>
                        <option value="<?php echo $row->id_jenis_arsip;?>"><?php echo $row->jenis_arsip;?></option>
                      <?php } ?>
                  </select>                  
                </div>                
               
                <h4 class="example-title">Upload Arsip</h4>
                <div class="form-group">
                  <div class="input-group input-group-file">
                    <!-- <input type="text" name="name" class="form-control" readonly="readonly"> -->
                    <!-- <span class="input-group-btn"> -->
                      <!-- <span class="btn btn-success btn-file"> -->
                        <!-- <i class="icon wb-upload" aria-hidden="true"></i> -->
                        <!-- <label class="control-label">Upload Arsip</label> -->
                        <!-- <input id="input-1a" type="file" name="ISI" class="file" data-show-preview="true"> -->                        

                        <input id="inputUpload" type="file" name="ISI">
                        <h5 style="color=light-grey;">max 10 MB (.gif/.jpg/.png/.jpeg/.pdf)</h5>

                      </span>
                    </span>
                  </div>
                </div>              

              <div style="text-align: center">
                    <button type="submit" class="btn-primary btn">Tambah</button>
              </div>

            </form>
        </div> 
      </div>
     </div>
     </body>