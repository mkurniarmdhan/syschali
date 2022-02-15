<div class="app-main__inner">
	<div class="app-page-title">
		<div class="page-title-wrapper">
			<div class="page-title-heading">

				<div class="">Form tambah data program
					<div class="">
						<!-- <button type="button" id="PopoverCustomT-1" class="btn btn-primary  mt-3">Tambah
                                            data murid</button> -->

					</div>

				</div>


			</div>


		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-sm-12">

			<div class="main-card mb-3 card">
				<div class="card-body">
					<h5 class="card-title">Data Program bimbel</h5>
					<form action="<?php echo base_url(). 'Program/add'; ?>" method="post">
						<div class="form-row">
							<div class="col-md-4 mb-3 ">
								<label for="validationCustom01">Jenis Program</label>

								<div class="custom-radio custom-control">
									<input type="radio" id="exampleCustomRadio" value="Reguler"
										name="jp" class="custom-control-input">
										<label
										class="custom-control-label" for="exampleCustomRadio">Reguler
									</label></div>
								<div class="custom-radio custom-control">
									<input type="radio" id="exampleCustomRadio2"
										name="jp" class="custom-control-input" value="Private" ><label
										class="custom-control-label" for="exampleCustomRadio2">Private</label></div>


							</div>
							<div class="col-md-4 mb-3">
								<label for="validationCustom02">Mata Pelajaran</label>
								<input type="text" class="form-control" id="validationCustom02"
									placeholder="Mata Pelajaran" name="mapel" required="">


							</div>
							<div class="col-md-4 mb-3">
								<label for="validationCustom02">Biaya </label>
								<input type="number" class="form-control" id="validationCustom02"
									placeholder="Harga Progam" name="harga" required="">


							</div>
						</div>
					




						<button class="btn btn-primary" type="submit"><i class="fa fa-fw" aria-hidden="true"
								title="Copy to use plus"></i>SIMPAN </button>

					</form>


 
				</div>
			</div>


		</div>



	</div>
</div>
