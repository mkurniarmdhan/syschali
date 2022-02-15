
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">

                                <div class="">Data Progam
                                    <div class="">
                                    
                                             <a  href="<?=base_url()?>Program/addprogram" class="btn btn-primary  mt-3">
                                            Tambah
                                            data Program</a>
                                    </div>

                                </div>


                            </div>


                        </div>
                    </div>
                   
                  

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate">
                                    </i>data Program  
                                
                                    
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="tab-sd" role="tabpanel">
                                            <table
                                                class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Jenis Program</th>
                                                      
                                                      
                                                        <th class="text-center">Mata Pelajaran</th>
                                                        <th class="text-center">Harga Program</th>
                                             
                                                        
                                                        <th class="text-center">Actions</th>
                                                    </tr>

                                                </thead>
                                                <tbody>

                                                <?php foreach($data as $m)
:
                                             ?>
                                                    <tr>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                  
                                                                
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading"><?=$m->namaprogram?> </div>
                                                                     
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><?=$m->mapel?></td>
                                                        <td class="text-center"><?=$m->hargaprogram?></td>
                                                   
                                                   
                                                        
                            
                                                   
                                                       
                                                        
                                                        <td class="text-center">
                                                                          
                                                <a   class="badge badge-info text-light" onclick="if(confirm('Apakah anda yakin akan menghapus Program ?'))
                                                    window.location.href='<?=base_url()?>Program/hapus/<?php echo $m->idprogram; ?>';">
                                                    
                                             HAPUS</a>
                                                 

                                                                               
                                                   
                                             <button type="button" data-id="<?php echo $m->idprogram; ?>" class="btn btn-primary btn-danger btn-sm UpdateProgram" data-toggle="modal" data-target="#formModal">
 Update Program        </button>
                                                   
                                                        </td>
                                                    </tr>
                                                                <?php  endforeach;?>
                                                </tbody>
                                            </table>
                                        </div>
                                     
                                        
                                    </div>
                                </div>
                               
                                
                                <?= $pagination ?>
                            </div>
                        </div>
                    </div>

                </div>
               
           
