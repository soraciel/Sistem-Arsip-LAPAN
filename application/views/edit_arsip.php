<body>               
 <div class="page-content">
      <div class="panel" style="padding:15px;">      
        <h1 class="page-title" style="text-align: center">Edit Arsip</h1>
            <div class="panel-body container-fluid" style="padding: 0px 350px;">
              <?php foreach ($h as $row){?>    
              <form action="<?php echo base_url();?>/index.php/arsip/editing_arsip/<?php echo $row->ID_ARSIP;?>" method="post" enctype="multipart/form-data">
                                                                                     
                <div >
                  <br>
                  <h4 class="example-title">Nomor Surat</h4>
                  <input type="text" value="<?php echo $row->NO_SURAT;?>" class="form-control" id="inputPlaceholder" placeholder="Nomor Surat" name="NO_SURAT" required="required">
                  <br>
                </div>

                <div>
                  <h4 class="example-title">Judul</h4>
                  <input type="text" value="<?php echo $row->JUDUL;?>" class="form-control" id="inputPlaceholder" placeholder="Judul Surat" name="JUDUL" required="required">
                  <br>
                </div>
           
                
                <div class="form-group">
                  <h4 class="example-title">Tanggal</h4>                  
                    <input type="date" name="TANGGAL" value="<?php echo $row->TANGGAL;?>" class="form-control" id="inputDate2" data-plugin="formatter" required="required"
                    data-pattern="[[99]]/[[99]]/[[9999]]" />
                    <p class="help-block">01/01/2015</p>
                  </div>
                
                <div class="form-group">
                  <h4 class="example-title">Jenis Arsip</h4>                  
                  <select class="form-control" name="JENIS_ARSIP">                     
                      <?php foreach ($i as $row1) 
                        { if ($row1->id_jenis_arsip == $row->ID_JENIS_ARSIP) {?>
                        <option selected="selected" value="<?php echo $row1->id_jenis_arsip;?>"><?php echo $row1->jenis_arsip;?></option>
                        <?php } else {?> <option value="<?php echo $row1->id_jenis_arsip;?>"><?php echo $row1->jenis_arsip;?></option>
                      <?php }}} ?>
                  </select>
                  <br>
                </div>                

                <?php if(isset($errormsg))?> 
               <p style="color:red;"> <?php echo $errormsg; ?> </p>
                <?php echo validation_errors(); ?>

               <h4 class="example-title">Upload Arsip</h4>
                <div class="form-group">
                  <div class="input-group input-group-file">                    
                        <input id="inputUpload" type="file" name="ISI">
                        <h5 style="color=light-grey;">max 10 MB (.gif/.jpg/.png/.jpeg/.pdf)</h5>                      
                  </div>
                </div>  

                <div >                  
                  <h4 class="example-title">Keterangan</h4>
                  <input type="text" value="<?php echo $row->Keterangan;?>" class="form-control" id="inputPlaceholder" placeholder="Keterangan" name="Keterangan" required="required">
                  <br>
                </div>

              <div style="text-align: center">
                    <button type="submit" class="btn-primary btn">Simpan</button>
              </div>

            </form>
        </div> 
      </div>
     </div>
     </body>