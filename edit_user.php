<link rel="stylesheet" href="../../assets/css/../fonts/glyphicons/glyphicons.css">
<body>
                
 <div class="page-content">
      <div class="panel">            
        <h1 class="page-title" style="text-align: center">Edit User</h1>               
            <div class="panel-body container-fluid" style="width:55%;">
                <?php
            //Kita akan melakukan looping terhadap variable $product yang telah dikirimkan melalui controller
            foreach($user->result() as $detail){
        ?>
              <form autocomplete="off" method="post" action="<?= base_url() ?>index.php/user/updateUserDb/<?= $detail->ID ?>">
                
                <div >
                  <br>
                  <h4 class="example-title">Email</h4>
                  <input type="email" class="form-control" id="inputPlaceholder" placeholder="Nomor Induk Pegawai" value="<?php echo $detail->ID_PEG; ?>" name="ID_PEG">
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
                  <h4 class="example-title" >Status</h4>
                  <select class="form-control" name="KET">
                    <option selected="selected" value="<?php echo $detail->KET;?>"><?php echo $detail->KET;?></option>
                    <option  value="User">User</option>
                    <option value="Administrator">Administrator</option>
                    <!--<option  <?php if($detail->KET == 'User') echo selected;?> value="User">User</option>
                    <option <?php if($detail->KET == 'Administrator') echo selected;?> value="Administrator">Administrator</option>-->
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