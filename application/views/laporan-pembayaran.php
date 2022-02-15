

                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <!-- <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div> -->
                                <div> Laporan pembayaran
                                    <div class="page-title-subheading">
                                    </div>
                                 </div>
                            </div>
                            <div class="page-title-actions">
                                <button type="button" data-toggle="tooltip" title="Example Tooltip"
                                    data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                    <i class="fa fa-star"></i>
                                </button>

                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Pembayaran</div>
                                            <div class="widget-subheading">Pembayaran murid</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-success" style="font-size: 1.6em;">Rp.
                                                1.896.213</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Pembayaran</div>
                                            <div class="widget-subheading">Pending Payment</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-warning" style="font-size: 1.6em;">Rp.
                                                1.137.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Pembayaran</div>
                                            <div class="widget-subheading">Pembayaran ke Guru</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" style="font-size: 1.6em;">Rp.
                                                1.327.000</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Income</div>
                                            <div class="widget-subheading">Expected totals</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-focus">$147</div>
                                        </div>
                                    </div>
                                    <div class="widget-progress-wrapper">
                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                                        </div>
                                        <div class="progress-sub-label">
                                            <div class="sub-label-left">Expenses</div>
                                            <div class="sub-label-right">100%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Pembayaran Murid
                                    <div class="btn-actions-pane-right">
                                        <div class="search-wrapper">
                                            <div class="vsearch-wrapper input-holder">
                                                <input type="text" class="search-input" placeholder="Type to search">
                                                <button class="search-icon"><span></span></button>
                                            </div>
                                            <button class="close"></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="tab-sd" role="tabpanel">
                                            <table
                                                class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Murid</th>
                                                        <th class="text-center">Program  Pembayaran</th>
                                                       
                                                        <th class="text-center">Status</th>
                                                        <th class="text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($data as $row) : ?>
                                           
                                                     <tr>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="40" class="rounded-circle"
                                                                                src="assets/images/avatars/4.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading"><?=$row->nama?>
                                                                        </div>
                                                                        <div class="widget-subheading opacity-7">
                                                                            SMP
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                      <td class="text-center">s</td>
                                                        <td class="text-center">
                                                            <div class="badge badge-success">Lunas</div>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-primary btn-sm" 
                                                                data-toggle="modal" data-target="#Lunas<?=$row->idmurid?>">LIhat
                                                                detail</button>
                                                        </td>
                                                    </tr>
                                                
                                                <?php endforeach; ?>

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


                

                
                