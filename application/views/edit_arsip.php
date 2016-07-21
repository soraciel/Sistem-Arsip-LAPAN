<body>
  
                
 <div class="page-content">
      <div class="panel">            
        <h1 class="page-title" style="text-align: center">Edit Arsip</h1>
            <div class="panel-body container-fluid" style="padding: 0px 350px">
              <form autocomplete="off">
                
                <div >
                  <br>
                  <h4 class="example-title">Nomor Surat</h4>
                  <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nomor Surat" value="12345">
                  <br>
                </div>

                <div>
                  <h4 class="example-title">Judul</h4>
                  <input type="text" class="form-control" id="inputPlaceholder" placeholder="Judul Surat" value="Undangan laporan KP">
                  <br>
                </div>
           
                
                <div class="form-group">
                  <h4 class="example-title">Tanggal</h4>
                  <div>
                    <input type="text" class="form-control" id="inputDate2" data-plugin="formatter"
                    data-pattern="[[99]]/[[99]]/[[9999]]" value="12/03/2015"/>
                    <p class="help-block">01/01/2015</p>
                  </div>
                </div>
                
                <div>
                  <h4 class="example-title">Jenis Surat</h4>
                  <select class="form-control" value="Dokumen Abadi">
                    <option>&nbsp;</option>
                    <option>Dokumen Abadi</option>
                    <option selected="selected">Surat Perjanjian/Keuangan</option>
                    <option>Surat Kantor/Dinas/SK</option>
                    <option>Undangan Rapat</option>
                    <option>Koran</option>

                  </select>
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

              <div style="text-align: center">
                    <button type="button" class="btn-primary btn">Tambah</button>
              </div>

        </div> 
      </div>
     </div>
     </body>