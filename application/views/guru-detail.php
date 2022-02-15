<div class="app-main__inner">

	<div>


		<nav class="" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
				<li class="breadcrumb-item"><a href="<?=base_url('Guru')?>">Data Guru</a></li>
				<li class="active breadcrumb-item" aria-current="page"><?=
                              
                           $guru->namaguru
                                ?></li>
			</ol>
		</nav>
	</div>
	<div class="row">
		<div class="col-lg-8 col-sm-12">

			<div class="main-card mb-3 card">

				<div class="card-body">
					<h5 class="card-title">Profil Pengajar</h5>

					<form action="<?php echo base_url(). 'Guru/update'; ?>" method="post">
						<input type="hidden" class="form-control" id="validationCustom01" name="id"
							value="<?=   $guru->namaguru?>">

						<div class="form-row">
							<div class="col-md-4 mb-3">
								<label for="validationCustom01">Nama</label>
								<input type="text" class="form-control" id="validationCustom01" name="nama"
									placeholder="<?= $guru->namaguru?>">


							</div>
							<div class="col-md-4 mb-3">
								<label for="validationCustom02">Jenis Kelamin</label>
								<input type="text" class="form-control" id="validationCustom02" placeholder="Mapel"
									name="mapel">


							</div>
							<div class="col-md-4 mb-3">
								<label for="validationCustom02">Agama</label>
								<input type="text" class="form-control" id="validationCustom02" placeholder="Last name"
									value="Islam">


							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="validationCustom03">Alamat</label>
								<input type="text" class="form-control" id="validationCustom03" placeholder="City">


							</div>
							<div class="col-md-3 mb-3">
								<label for="validationCustom04">Telpon / Hp</label>
								<input type="text" class="form-control" id="validationCustom04" placeholder="State">


							</div>


						</div>

						<div class="form-row">
							<div class="col-md-12 mb-3">

								<p>Porgram Pengajaran </p>

								<?php
                                  foreach($program as $pg) :

                             ?>

            
								<div class=" badge mb-2 badge-info"
									onclick="if(confirm('Apakah anda yakin akan menghapus Program ?'))
                                                    window.location.href='<?=base_url()?>Guru/deleteProgramGuru/<?= $pg->idprogram; ?>';">
									<?=$pg->np." - ".$pg->mapel?>
								</div>

								<?php endforeach; ?>


								<button type="button" data-id="<?php echo $guru->idguru; ?>"
									class="btn btn-primary btn-danger btn-sm " data-toggle="modal"
									data-target="#ProgramGuru">
									ADD Program
								</button>

							</div>



						</div>



						<button class="btn btn-primary" type="submit"><i class="fa fa-fw" aria-hidden="true"
								title="Copy to use plus"></i> </button>

						<button type="submit" class="btn btn-danger"
							onclick="if(confirm('Apakah anda yakin akan menghapus <?php echo $guru->namaguru; ?>?')) window.location.href='<?=base_url()?>Guru/hapus/<?php echo $guru->idguru; ?>';"><i
								class="fa fa-fw fa-trash-o"></i>Delete</button>

						<!-- <button class="btn btn-danger" type="submit"><i class="fa fa-transh"
                                                aria-hidden="true" title="Copy to use plus">hapus</i> </button>
                                      -->
					</form>



				</div>
			</div>


		</div>
		<div class="col-lg-4 d-sm-none d-lg-block">

			<div class="main-card card rounded-circle">


				<img height="305px" src="https://cdn.pixabay.com/photo/2014/05/31/23/16/teacher-359311_960_720.png"
					alt="Card image cap" class="card-img-bottom rounded-circle">
			</div>
		</div>

	</div>

	<div class="row">


		<div class="col-md-12">
			<div class="main-card mb-3 card">
				<div class="card-header">Murid yang diajar <?php echo count($murid)?>

				</div>
				<div class="table-responsive">
					<table class="align-middle mb-0 table table-borderless table-striped table-hover">
						<thead>
							<tr>
								<th class="text-center">Nama Murid </th>
								<th class="text-center">Mata Pelajaran</th>
								<th class="text-center">Program</th>
								<th class="text-center">Tanggal Pembayaran</th>

								<th class="text-center">Status Pembayaran <br><span>#</span></th>

							</tr>
						</thead>
						<tbody>

								<?php
                                  foreach($murid as $m) :
									
  ?>

							<tr>

						

								<td class="text-center">
									<div class="badge badge-warning"><?=$m->nama?></div>
								</td>

								<td class="text-center">
									<div class="badge badge-warning"></div>
								</td>


							
								<td class="text-center">
									<div class="badge badge-info"></div>
								</td>
								<td class="text-center">
									<div class="badge badge-danger">#</div>
								</td>
								<td class="text-center">
									<div class="badge badge-info">Pending</div>
								</td>

							</tr>


<?php endforeach; ?>

						</tbody>
					</table>
				</div>
			
			</div>
		</div>
	</div>


</div>
