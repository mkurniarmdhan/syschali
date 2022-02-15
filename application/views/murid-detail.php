<div class="app-main__inner">
	<div>


		<nav class="" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
				<li class="breadcrumb-item"><a href="<?=base_url('Murid')?>">Data Murid</a></li>
				<li class="active breadcrumb-item" aria-current="page"><?=$nama?></li>
			</ol>
		</nav>
	</div> 
	<div class="row">
		<div class="col-lg-8 col-sm-12">
			<form action="<?php echo base_url(). 'Murid/update'; ?>" method="post">


				<div class="main-card mb-3 card">
					<div class="card-body">
						<h5 class="card-title">Profil Murid</h5>


						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="validationCustom01">Nama Lengkap</label>
								<input type="text" class="form-control" id="validationCustom01" value="<?=$nama?>"
									name="nama">
								<input type="hidden" class="form-control" id="validationCustom01" name="id"
									value="<?=$idmurid?>">


							</div>
							<div class="col-md-6 mb-3">
								<label for="validationCustom02">Tempat / Tanggal Lahir</label>
								<input type="text" class="form-control" id="validationCustom02" name="ttl"
									value="<?=$ttl?>">


							</div>

							<div class="col-md-12 mb-3">
								<label for="validationCustom03">Alamat</label>
								<input type="text" class="form-control" id="validationCustom03" name="alamat"
									value="<?=$alamat?>">


							</div>
						</div>
						<div class="form-row">


							<div class="col-sm-4 mb-3">
								<label for="validationCustom02">Jenis Kelamin</label>
								<input type="text" class="form-control" id="validationCustom02" name="jk"
									value="<?=$jk?>">


							</div>
							<div class="col-sm-4 mb-3">
								<label for="validationCustom04">Agama</label>
								<input type="text" class="form-control" id="validationCustom04" name="agama"
									value="<?=$agama?>">


							</div>
							<div class="col-sm-4 mb-3">
								<label for="validationCustom05">Kelas</label>
								<input type="text" class="form-control" id="validationCustom05" name="kelas"
									value="<?=$kelas?>">

							</div>
						</div>
						<div class="form-row">
							<div class="col-md-12 mb-3">

								<p>Porgram bimbel</p>

								<?php
foreach ($program as $prog):
?>
								<div class=" badge mb-2 badge-info"
									onclick="if(confirm('Apakah anda yakin akan menghapus Program ?'))
                                                    window.location.href='<?=base_url()?>Murid/delProgram/<?= $prog->idprogram; ?>';">
									<?=$prog->namaprogram." - ".$prog->mapel." - ".$prog->idguru?>
								</div>
								<?php endforeach; ?>








								<button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
									data-target="#Program">Tambah</button>



							</div>



						</div>

						<div class="divider"></div>

						<h5 class="card-title">Profil Orang Tua / Wali</h5>

						<div class="form-row">
							<div class="col-sm-6 mb-3">
								<label for="validationCustom01">Nama </label>
								<input type="text" class="form-control" id="validationCustom01" name="namawali"
									value="<?=$namawali?>">


							</div>

							<div class="col-sm-6 mb-3">
								<label for="validationCustom02">Pekerjaan</label>
								<input type="text" class="form-control" id="validationCustom02" name="pekerjaan"
									value="<?=$pekerjaan?>">


							</div>
							<div class="col-md-4 mb-3">
								<label for="validationCustom02">Alamat</label>
								<input type="text" class="form-control" id="validationCustom02" name="alamatwali"
									value="<?=$alamatwali?>">


							</div>
							<div class="col-sm-4 mb-3">
								<label for="validationCustom02">NO HP</label>
								<input type="text" class="form-control" id="validationCustom02" name="nohp"
									value="<?=$nohp?>">


							</div>
						</div>




						<button class="btn btn-primary " type="submit">Ubah</button>
						<!-- <i class="fa fa-fw fa-trash-o"></i> -->
						<a  class="btn btn-danger text-white"
							onclick="if(confirm('Apakah anda yakin akan menghapus <?php echo $nama; ?>?')) window.location.href='<?=base_url()?>Murid/hapus/<?php echo $idmurid; ?>';">Delete</a>


					</div>
				</div>
 
			</form>
		</div>
		<div class="col-lg-4 d-sm-none d-lg-block">

			<div class="main-card card rounded-circle">


				<img height="305px" src="<?php echo base_url('upload/images/').$photo ?>" alt="Card image cap"
					class="card-img-bottom rounded-circle">


			</div>

		</div>


	</div>

	<div class="row">


		<div class="col-md-12">
			<div class="main-card mb-3 card">
				<div class="card-header mr-auto">Riwayat Murid

				</div>
				<div class="table-responsive">
					<table class="align-middle mb-0 table table-borderless table-striped table-hover">
						<thead>
							<tr>
								<th class="text-center">Total Pertemuan</th>


								<th class="text-center">Mata Pelajaran</th>
								<th class="text-center"> Pembayaran</th>

							</tr>
						</thead>
						<tbody>
							<?php foreach($getRiwayat as $r):
								$dataa= $this->ModelProgram->getById($r->idmurid);

								?>
							<tr>


								<td class="text-center">
									<div class="badge badge-success"><?=$r->totall?></div>
								</td>
								<td class="text-center">
								<?php foreach ($dataa as $pr) : ?>
				

									<div class="badge badge-success "><?=$pr->mapel?></div>
									<?php endforeach; ?>
								</td>



								<td class="text-center">

									<button type="button" class="btn btn-info btn-sm" data-toggle="modal"
										data-target="#Program">Detail</button>


								</td>

							</tr>
<?php endforeach?>
						</tbody>
					</table>
				</div>
				<div class="ml-auto d-block text-center card-footer">



				</div>
			</div>
		</div>
	</div>


</div>
