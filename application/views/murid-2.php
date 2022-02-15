
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">

                                <div class="">Data Murid
                                    <div class="">
                                    
                                            <a  href="<?=base_url()?>murid/addmurid" class="btn btn-primary  mt-3">
                                            Tambah
                                            data murid</a>
                                    </div>

                                </div>


                            </div>


                        </div>
                    </div>
                    <div class="row">
                <?php foreach($program as $x) : ?>
                        <div class="col-md-6 col-lg-3">
                            <div class="card mb-3  ">
                                <ul class="nav flex-column">


                             
                                    <li class="nav-item-header nav-item bg-alternate">
                                        <p class="text-white mb-0"><?= $x->nama?></p>
                                    </li>
                                 
                                    <li class="nav-item">
                                       <a href="javascript:void(0);" class="nav-link">
                                        
                                            <div class="badge badge-light">Total Murid</div>
                                            <div class="ml-auto badge badge-success"><?=$x->tot?></div>
      
                                            
                                        </a></li>
                                 
                                   
                                </ul>
                            </div>

                        </div>
            
<?php endforeach; ?>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate">
                                    </i>data Murid  
                                    <div class="btn-actions-pane-right">
                                        <div class="nav">

                                            <!-- <a data-toggle="tab" href="#tab-sd"
                                                class="btn-pill btn-wide btn btn-outline-alternate btn-sm show active">
                                                SD</a>
                                            <a data-toggle="tab" href="#tab-smp"
                                                class="btn-pill btn-wide mr-1 ml-1 btn btn-outline-alternate btn-sm show">
                                                SMP</a>
                                            <a data-toggle="tab" href="#tab-sma"
                                                class="btn-pill btn-wide btn btn-outline-alternate btn-sm show">
                                                SMA</a>

                                            <a data-toggle="tab" href="#tab-calistung"
                                                class="btn-pill btn-wide btn btn-outline-alternate btn-sm show ml-1">
                                                Calistung</a> -->

                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="tab-sd" role="tabpanel">
                                            <table
                                                class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th class="text-center">Jenis Kelamin</th>
                                                        <th class="text-center">Nama Wali</th>
                                                        <th class="text-center">Alamat</th>
                                                       
                                                        
                                                        <th class="text-center">Actions</th>
                                                    </tr>

                                                </thead>
                                                <tbody>

                                                <?php foreach($data as $m)
                                               { 
                                             ?>
                                                    <tr>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="40" class="rounded-circle"
                                                                                src="<?php echo base_url('upload/foto/'.$m->photo); ?>"
                                                                                alt="">
                                            d                            </div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading"><?=$m->nama?> </div>
                                                                        <div class="widget-subheading opacity-7">
                                                                        <?=$m->kelas?></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><?=$m->jk?></td>
                                                        <td class="text-center">  <?=$m->namawali?></td>
                                                        <td class="text-center"><?=$m->alamat?></td>
                                                       
                                                       
                                                        
                                                        <td class="text-center">
                                                            
                                                        <a href="<?=base_url()?>murid/detail/<?=$m->idmurid?>">
                                                                <button type="button" id="PopoverCustomT-1"
                                                                    class="btn btn-primary btn-sm">Details</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                                <?php } ?>
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
               
           
