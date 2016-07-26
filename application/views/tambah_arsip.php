<body>
                
 <div class="page-content">
      <div class="panel">      
        <h1 class="page-title" style="text-align: center">Tambah Arsip</h1>
            <div class="panel-body container-fluid" style="padding: 0px 350px;">
              <form action="<?php echo base_url();?>arsip/insert_arsip" method="post">
                
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
                    <!-- <option>Dokumen Abadi</option>
                    <option>Surat Perjanjian/Keuangan</option>
                    <option>Surat Kantor/Dinas/SK</option>
                    <option>Undangan Rapat</option>
                    <option>Koran</option> -->
                      <?php foreach ($h as $row) {?>
                        <option value= "<?php echo $row->jenis_arsip;?>" ><?php echo $row->jenis_arsip;?></option>
                      <?php } ?>
                  </select>
                  <br>
                </div>

               <div> 
                <h4 class="example-title">File Upload</h4>
                <div class="form-group">
                  <div class="input-group input-group-file">
                    <input type="text" class="form-control" readonly="readonly">
                    <span class="input-group-btn">
                      <span class="btn btn-success btn-file">
                        <i class="icon wb-upload" aria-hidden="true"></i>
                        <input type="file" name="ISI">
                      </span>
                    </span>
                  </div>
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