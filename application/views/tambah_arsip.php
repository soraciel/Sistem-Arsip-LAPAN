<body>
                
 <div class="page-content">
      <div class="panel" style="padding:15px;">      
        <h1 class="page-title" style="text-align: center">Tambah Arsip</h1>
            <div class="panel-body container-fluid" style=" width: 55%; ">
              <form action="<?php echo base_url();?>/index.php/arsip/insert_arsip" method="post" enctype="multipart/form-data">
                
                <div >
                  <br>
                  <h4 class="example-title">Nomor Surat</h4>
                  <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nomor Surat" name="NO_SURAT" required="required">
                  <br>
                </div>

                <div>
                  <h4 class="example-title">Judul</h4>
                  <input type="text" class="form-control" id="inputPlaceholder" placeholder="Judul Surat" name="JUDUL" required="required">
                  <br>
                </div>
           
                
                <div class="form-group">
                  <h4 class="example-title">Tanggal</h4>                  
                    <input type="date" name="TANGGAL" class="form-control" id="inputDate2" data-plugin="formatter" required="required"
                    data-pattern="[[99]]/[[99]]/[[9999]]" />
                    <p class="help-block">01/01/2015</p>
                  </div>
                
                <div class="form-group">
                  <h4 class="example-title">Jenis Arsip</h4>                  
                  <select class="form-control" name="JENIS_ARSIP" required="required">                    
                      <?php foreach ($h as $row) {?>
                        <option value="<?php echo $row->id_jenis_arsip;?>"><?php echo $row->jenis_arsip;?></option>
                      <?php } ?>
                  </select>                  
                </div>                
               
               <?php if(isset($errormsg))?> 
               <p style="color:red;"> <?php echo $errormsg; ?> </p>
                <?php echo validation_errors(); ?>

                <h4 class="example-title">Upload Arsip</h4>
                <div class="form-group">
                  <div class="input-group input-group-file">                    
                        <input id="inputUpload" type="file" name="ISI" required="required">
                        <h5 style="color=light-grey;">max 10 MB (.gif/.jpg/.png/.jpeg/.pdf)</h5>                      
                  </div>
                </div>  

                <div >                  
                  <h4 class="example-title">Keterangan</h4>
                  <input type="text" class="form-control" id="inputPlaceholder" placeholder="Keterangan" name="Keterangan" required="required">                  
                </div>            

              <div style="text-align: center">
                    <br>
                    <button type="submit" class="btn-primary btn">Tambah</button>
              </div>

            </form>
        </div> 
      </div>
     </div>
     </body>