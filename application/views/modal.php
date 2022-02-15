<!-- add program -->


<div class="modal fade" id="Program" tabindex="-1" role="dialog" aria-labelledby="addProgram" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">ADD PROGRAM </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">


				<table class="mb-0 table table-sm">
					<thead>
						<tr>

							<th>PILIH PROGRAM </th>
							<th>PILIH GURU </th>


						</tr>
					</thead>
					<tbody>


						<form action="<?php echo base_url(). 'Murid/addprogram'; ?>" method="post">
							<tr>

								<input type="hidden" class="form-control" id="validationCustom01" name="idmurid"
									value="<?= $idmurid?>" required="">


								<td>




									<select name="program" class="custom-select" id="inputGroupSelect01">
										<option selected>PILIH PROGRAM</option>
										<?php  foreach($getprogram as $p)   {?>
										<option value="<?=$p->idprogram?>"><?=$p->namaprogram?><?=$p->mapel?></option>


										<?php }?>

									</select>




								</td>
								<td>




									<select name="guru" class="custom-select" id="inputGroupSelect01">
										<option selected>PILIH GURU</option>
										<?php  foreach($guru as $p)   {?>
										<option value="<?=$p->idguru?>"><?=$p->namaguru?></option>


										<?php }?>

									</select>




								</td>



							</tr>



					</tbody>
				</table>
			</div>
			<div class="modal-footer">

				<button type="sumbit" class="btn btn-primary">OK</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
			</form>
		</div>
	</div>
</div>


<!-- add guru program -->



<div class="modal fade" id="ProgramGuru" tabindex="-1" role="dialog" aria-labelledby="addProgram" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">ADD PROGRAM GURU </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">


				<table class="mb-0 table table-sm">
					<thead>
						<tr>

							<th>PILIH PROGRAM </th>


						</tr>
					</thead>
					<tbody>


						<form action="<?php echo base_url(). 'Guru/addprogram'; ?>" method="post">
							<tr>

								<input type="hidden" class="form-control" id="validationCustom01" name="idguru"
									value="<?= $guru->idguru?>" required="">


								<td>




									<select name="program" class="custom-select" id="inputGroupSelect01">
										<option selected>PILIH PROGRAM</option>
										<?php  foreach($getprogram as $p)   {?>
										<option value="<?=$p->idprogram?>"><?=$p->mapel?></option>


										<?php }?>

									</select>




								</td>



							</tr>



					</tbody>
				</table>
			</div>
			<div class="modal-footer">

				<button type="sumbit" class="btn btn-primary">OK</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- end -->

<!-- Update program -->


<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="addProgram" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="formModalLabel">ADD PROGRAM </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>


			<div class="modal-body">

				<form action="<?= base_url(); ?>Program/ubah" method="post">
					<input type="hidden" name="idprogram" id="idprogram">
					<div class="form-group">
						<select name="namaprogram" class="custom-select" id="namaprogram">
							<option value="Reguler">Reguler </option>
							<option value="Private">Private </option>

						</select>

					</div>
 
					<div class="form-group">
						<label for="mapel">Mapel</label>
						<input type="text" class="form-control" id="mapel" name="mapel" autocomplete="off">
					</div>

					<div class="form-group">
						<label for="harga">Harga</label>
						<input type="number" class="form-control" id="hargaprogram" name="hargaprogram">
					</div>



			</div>
			<div class="modal-footer">

				<button type="sumbit" class="btn btn-primary">OK</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
			</form>
		</div>
	</div>
</div>

<!-- Detail Absensi -->



<div class="modal fade" id="absensi" tabindex="-1" role="dialog" aria-labelledby="absensi" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="formModalLabel">Detail Absen PROGRAM </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>


			<div class="modal-body">

				<p class="mb-2 nama"> </b>

					<table class="mb-0 table table-sm">
						<thead>
							<tr>

								<th>Tanggal Pertemuan</th>
								<th> </th>
								<th>Status</th>


							</tr>
						</thead>

						<tbody>





							<tr>
								<td class="id2">




								</td>
								<td> </td>


								<td class="tgl">

								</td>



						</tbody>


						</tr>

						<tr>

							<td class="total">

							</td>
							<td>





						</tr>
					</table>

					<div class="modal-footer">

						<button type="sumbit" class="btn btn-primary">OK</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
					</form>
			</div>
		</div>
	</div>
</div>

<!-- catatan -->

<!-- Modal -->
<div class="modal fade" id="catatanMurid" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form action="<?php echo base_url(). 'GuruAbsensi/setCatatan'; ?>" method="post">
				<input type="hidden" class="form-control" id="idmurid" name="idmurid">

	
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Catatan Murid : <span id="nama"></span> </label>
						<textarea class="form-control" id="catatan" name="catatan" rows="3"></textarea>
					</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
</form>
		</div>
	</div>
</div>
