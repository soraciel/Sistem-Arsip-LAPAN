<body>
                
 <div class="page-content">
      <div class="panel">            
        <h1 class="page-title" style="text-align: center">Edit User</h1>

               <?php
            //Kita akan melakukan looping terhadap variable $product yang telah dikirimkan melalui controller
            foreach($user->result() as $detail){
        ?>
            <div class="panel-body container-fluid" style="padding: 0px 350px">

              <form autocomplete="off" method="post" action="<?= base_url() ?>index.php/user/updateUserDb/<?= $detail->ID_PEG ?>">
                
                <div >
                  <br>
                  <h4 class="example-title">NIP</h4>
                  <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nomor Induk Pegawai" value="<?php echo $detail->ID_PEG; ?>" name="ID_PEG">
                  <br>
                </div>

                <div>
                  <h4 class="example-title">Nama</h4>
                  <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nama Pegawai" value="<?php echo $detail->NAMA_PEG; ?>" name="NAMA_PEG">
                  <br>
                </div>
           
                <div>
                  <h4 class="example-title">Password</h4>
                  <input type="password" class="form-control" id="inputPlaceholder" placeholder="Password" value="<?php echo $detail->PASSWORD; ?>" name="PASSWORD">
                  <br>
                </div>
                
                <div>
                  <h4 class="example-title">Status</h4>
                  <select class="form-control">
                    <option><?php echo $detail->KET;?></option>
                    <option selected="selected">User</option>
                    <option>Administrator</option>
                  </select>
                </div>

              <div style="text-align: center">
                   <br>
                   <button type="button submit" class="btn-primary btn"value="Update" >Simpan</button>
              </div>

            </form>
                <?php
            }    
        ?>

    

        </div> 
      </div>
     </div>
     </body>