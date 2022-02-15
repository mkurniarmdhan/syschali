<div class="app-main__inner">
	<div class="app-page-title">
		<div class="page-title-wrapper">
			<div class="page-title-heading">
				<!-- <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div> -->
				<div> Laporan Absensi
					<div class="page-title-subheading">
					</div>
				</div>
			</div>

		</div>
	</div>



	<div class="row">
		<div class="col-md-12">
			<div class="main-card mb-3 card">
				<div class="card-header">Riwayat Absensi Murid
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
							<table class="align-middle mb-0 table table-borderless table-striped table-hover">
								<thead>
									<tr>
									
										<th>Nama</th>


										<th class="text-center">Jumlah Pertemuan</th>
										<th class="text-center">CAATATN</th>
										<th class="text-center">Action</th>

									</tr>
								</thead>
								<tbody>

                                   
									<?php 

            foreach($data as $m):
                                                        ?>
									<tr>
										<td>

											<div class="widget-content p-0">
												<div class="widget-content-wrapper">


													<div class="widget-content-left flex2">
														<div class="widget-heading " ><?=$m->nama?> </div>

													</div>
												</div>
											</div>
										</td>





										<td class="text-center"><?=$m->total?></td>

										<td class="text-center"><?=$m->catatan?></td>
										<td class="text-center">
											<button type="button" data-id="<?= $m->idmurid;  ?>" data-nama="<?= $m->nama?>"
												class="btn btn-primary btn-sm DetailAbsen" data-toggle="modal"
												data-target="#absensi">Lihat
												detail</button>
											<a class="btn btn-primary btn-sm"
												href="<?=base_url('Pembayaran/print')?>">Cetak</a>
											<button class="btn btn-primary btn-sm"
											
							onclick=" window.location.href='https://api.whatsapp.com/send/?phone=62895619310788&text=hallo&app_absent=0';">Kirim Pesan</button>

										</td>


									</tr>


									<?php

 endforeach; ?>


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
