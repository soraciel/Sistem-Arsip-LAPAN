<body>
                
 <div class="page-content">
      <div class="panel" style="padding:15px;">            
        <h1 class="page-title" style="text-align: center">Tambah User</h1>
            <div class="panel-body container-fluid" style="width:55%;">

              <form autocomplete="off" method="post" action="<?= base_url() ?>index.php/user/addUserDb" >
                
                <div >
                  <br>

                  <h4 class="example-title">Email</h4>
                  <input type="email" class="form-control" id="inputPlaceholder" placeholder="Email" name="ID_PEG" required="required">
                  <br>
                </div>

                <div>
                  <h4 class="example-title">Nama</h4>
                  <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nama Pegawai" name="NAMA_PEG" required="required">
                  <br>
                </div>
           
                <div>
                  <h4 class="example-title">Password</h4>
                  <input type="password" class="form-control" id="inputPlaceholder" placeholder="Password" name="PASSWORD" required="required">
                  <br>
                </div>
                
                <div>
                  <h4 class="example-title">Status</h4>
                  <select class="form-control" name="KET" required="required">
                    <!-- <option>&nbsp;</option> -->
                    <option>User</option>
                    <option>Administrator</option>
                  </select>
                </div>

              <div style="text-align: center">
                   <br>
                   <button type="button submit" class="btn-primary btn">Tambah</button>
              </div>

        </div> 
      </div>
     </div>
     </body>