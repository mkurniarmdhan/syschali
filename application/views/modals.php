<!-- Lunas -->

<?php
foreach ($data as $row) :

	$total=	$this->ModelPembayaran->getBayarId($row->idmurid);
	$dataa= $this->ModelProgram->getById($row->idmurid);

?>
<div class="modal fade" id="Lunas<?=$row->idmurid?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Detail Pembayaran </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<p class="mb-2">Nama : <b><?=$row->nama?></b>

					<table class="mb-0 table table-sm">
						<thead>
							<tr>

								<th>Jenis Program</th>
								<th>Harga</th>
								<th>Status</th>


							</tr>
						</thead>
						<?php foreach ($dataa as $pr) : ?>
						<tbody>

							<tr>
								<td>

									<div class="badge badge-warning"><?= $pr->mapel?></div>

								</td>
								<td><?=$pr->hargaprogram?></td>


								<td>
									<div class="badge badge-success">Lunas</div>
								</td>




						</tbody>
						<?php endforeach; ?>
						</tr>

						<tr>
							<?php foreach ($total as $x) : ?>
							<td >
							TOTAL PEMBAYARAN :
							</td>
							<td >
						
							
							</td>
							<td colspan="1">
								<?=$x->total?>
							</td>
							<?php endforeach; ?>
						</tr>
					</table>




			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<a class="btn btn-primary"
					href="https://wa.me/6289683726680/?text=Selamat%20Pagi%20ibu..%0A%0Akami%20dari%20bimbel%20chali%20%2C%20ingin%20mengingatkan%20bawhwa%20ananda%20<?=$row->nama?>%20sudah%20jatuh%20tempo%20pembayaran.%20%0A%0Aterimakasih">Kirim</a>
			</div>
		</div>
	</div>
</div>


<?php endforeach; ?>


<!-- absensi detail -->

<!-- end absensi detail -->


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
						<label for="exampleFormControlTextarea1">idprogram : <span id="program"></span> </label>
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
