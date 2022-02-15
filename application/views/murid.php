<div class="app-main__inner">



	<div class="app-page-title">
		<div class="page-title-wrapper">
			<div class="page-title-heading">

				<div class="">Data Murid
					<div class="">

						<a href="<?=base_url()?>Murid/addmurid" class="btn btn-primary  mt-3">
							Tambah
							data murid</a>
					</div>

				</div>


			</div>


		</div>
	</div>
	<div class="row">
		<?php foreach($program as $x) : ?>
		<div class="col-sm-6 col-lg-6">
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
				<div class="card-header ml-auto">
					<div class="btn-actions-pane-left">
						<div class="nav">


							<form action="<?= base_url() ?>murid/" method="post">

								<input type="text" placeholder="Cari murid" name="keyword" class="search-input"
									id="keyword">

								<input class="btn btn-primary" type="submit" name="submit"></button>
							</form>





						</div>
					</div>
				</div>
				<div id="container">
					<div class="card-body">
						<div class="tab-content">

							<div class="tab-pane show active" id="tab-sd" role="tabpanel">
								<table class="align-middle mb-0 table table-borderless table-striped table-hover">
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
                                               :
                                             ?>
										<tr>
											<td>
												<div class="widget-content p-0">
													<div class="widget-content-wrapper">
														<div class="widget-content-left mr-3">
															<div class="widget-content-left">
																<img width="40" class="rounded-circle"
																	src="<?php echo base_url('upload/fotdo/'.$m->photo); ?>"
																	alt="">
															</div>
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
											<td class="text-center"> <?=$m->namawali?></td>
											<td class="text-center"><?=$m->alamat?></td>



											<td class="text-center">

												<a href="<?=base_url()?>Murid/detail/<?=$m->idmurid?>">
													<button type="button" id="PopoverCustomT-1"
														class="btn btn-primary btn-sm">Details</button>
												</a>
											</td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>


						</div>
					</div>
				</div>

				<?= $pagination ?>

				<!-- 	
				<span class= "badge badge-danger">data tidak ditemukan</span>
										 -->

			</div>
		</div>
	</div>

</div>
