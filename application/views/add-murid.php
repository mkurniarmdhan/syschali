

       
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">

                                <div class="">Form tambah data murid
                                  
                                

                                </div>


                            </div>


                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">

                        <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Profil Murid</h5>
                                
                                    <form  action="<?php echo base_url(). 'Murid/add'; ?>" method="post">
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="validationCustom01"
                                                 name="nama"   >    
                                                  </div>
                                            <div class="col-md-5 mb-3">
                                                <label for="validationCustom02">Tempat / Tanggal Lahir</label>
                                                <input type="text" class="form-control" id="validationCustom02"
                                                name="ttl"        >
                                               
                                                    
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">Jenis Kelamin</label>
                                                <input type="text" class="form-control" id="validationCustom02"
                                                name="jk"          >
                                               
                                                 
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom03">Alamat</label>
                                                <input type="text" class="form-control" id="validationCustom03"
                                                name="alamat"         >
                                                
                                                    
                                            </div>
                                            <div class="col-md-2 mb-3">
                                            <label for="validationCustom03">AGAMA</label>
                                              <div class="input-group" >

                                                <select class="custom-select" id="inputGroupSelect04" name="agama">
                                                    <option selected>Pilih Agama</option>
                                                   <?php
                                                   
                                                   $agama = array('ISLAM','KRISTEN','Hindu','Buddha','Konghucu');

                                                   foreach($agama as $a):
                                                   ?>
                                                    <option value="<?=$a?>"><?=$a?></option>
                                                 
                                                                        <?php endforeach; ?>
                                                </select>


                                                </div>

                                                    
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="validationCustom05">Kelas</label>
                                                <input type="text" class="form-control" id="validationCustom05"
                                                name="kelas"     >
                                               
                                            </div>
                                            <div class="col-md-2 mb-3">
                                            <label for="validationCustom05">Tingkat</label>
                                            <div class="input-group">

                                                
                                        <select class="custom-select" id="inputGroupSelect04" name="tingkat">
                                            <option selected>Pilih Tingkat</option>
                                            <?php  foreach($tingkat as $p)   {?>
                                            <option value="<?=$p->idtingkat?>"><?=$p->namatingkat?></option>


                                            <?php }?>
                                        </select>


                                            </div>
                                            </div>
                                        </div>
                                    
                                        <div class="divider"></div>

                                        <h5 class="card-title">Profil Orang Tua / Wali</h5>
                                        <form class="needs-validation" novalidate="">
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom01">Nama </label>
                                                <input type="text" class="form-control" id="validationCustom01"
                                                name="namawali"         >
                                               
                                                   
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">Alamat</label>
                                                <input type="text" class="form-control" id="validationCustom02"
                                                name="alamatwali"      >
                                               
                                                    
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="validationCustom02">Pekerjaan</label>
                                                <input type="text" class="form-control" id="validationCustom02"
                                                name="pekerjaan"     >
                                               
                                                 
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom02">NO HP</label>
                                                <input type="text" class="form-control" id="validationCustom02"
                                                name="nohp"         >
                                               
                                                 
                                            </div>
                                        </div>
                                  
                                        
                                  
                                           
                                    
                                        
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus"></i>TAMBAH </button>
                                    </form>
                                  </div>

                        </div>
                     
                        

                        </div>
        
                        </div>
                </div>
             