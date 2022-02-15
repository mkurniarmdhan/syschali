<!DOCTYPE html>
<html>

<head>
	<title>Export Data Ke Excel Dengan PHP - www.malasngoding.com</title>
</head>
<link href="<?php echo base_url()?>./assets/main.css" rel="stylesheet">

<body>

<?php
header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pegawai.xls");
	?> 

	<center>
		<h1>RIWAYAT ABSENSI MURID</h1>
	</center>

        <div class="container">
	<table class="align-middle mb-0 table table-borderless table-striped table-hover">
		<thead>
			<tr>
				<th>Nama</th>


				<th class="text-center">Jumlah Pertemuan</th>
				<th class="text-center">CAATATN</th>

			</tr>
		</thead>
		<tbody>

			<tr>
				<td>

					<div class="widget-content p-0">
						<div class="widget-content-wrapper">


							<div class="widget-content-left flex2">
								<div class="widget-heading ">RANDI </div>

							</div>
						</div>
					</div>
				</td>





				<td class="text-center">S</td>

				<td class="text-center">S</td>



			</tr>




		</tbody>
	</table></div>

</body>

</html>
