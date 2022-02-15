


			</div>
			<!-- end content -->

		</div>


		<div class="app-wrapper-footer">
			<div class="app-footer">
				<div class="app-footer__inner">
					<div class="app-footer-left">
						<ul class="nav">
							<li class="nav-item">
								<a href="javascript:void(0);" class="nav-link">
									Footer Link 1



								</a>
							</li>
							<li class="nav-item">
								<a href="javascript:void(0);" class="nav-link">
									Footer Link 2
								</a>
							</li>
						</ul>
					</div>
					<div class="app-footer-right">
						<ul class="nav">
							<li class="nav-item">
								<a href="javascript:void(0);" class="nav-link">
									Footer Link 3
								</a>
							</li>
							<li class="nav-item">
								<a href="javascript:void(0);" class="nav-link">
									<div class="badge badge-success mr-1 ml-0">
										<small>NEW</small>
									</div>
									Footer Link 4
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
	</script>

	<script type="text/javascript" src="<?php echo base_url()?>/assets/scripts/main.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/scripts/script.js"></script>
</body>

</html>


<script  type="text/javascript">
	$(document).ready(function () {
		$(".DetailAbsen").click(function () {

			$('.modal-title').text('Detail Absensi');



			const id = $(this).data('id');
			const nama = $(this).data('nama');
			$.ajax({
				url: "<?=base_url() ?>Absensi/getubah",
				data: {
					idprogram: id
				},
				method: 'post',
				dataType: 'json',
				success: function (data) {
					console.log(data);

					$('.nama').text('Nama :' + nama);

					var html = '';
					var html2 = '';
					var html3 = '';
					var i;
					for (i = 0; i < data.length; i++) {
						html += '	<div class="badge badge-warning mb-2 ">' + data[i]
							.tgl_absen + '</div><br> ';
						html2 += '	<div class="badge badge-warning mb-2 ">' + data[i]
							.keterangan + '</div><br> ';
					}
					html3 += '	<span>	TOTAL Pertemuan :' + data.length + '</span> ';

					$('.id2').html(html);
					$('.tgl').html(html2);
					$('.total').html(html3);



					//   $('#tgl').text(data[0].keterangan);




				}
			});


		});


	
	$('.UpdateProgram').on('click', function () {


		$('#formModalLabel').html('Ubah Data Program');
		$('.modal-footer button[type=submit]').html('Ubah Data Guru');
		$('.modal-body form').attr('action', 'program/update');

		const id = $(this).data('id');



		$.ajax({
			url: "<?= base_url()?>program/getubah",
			data: {
				idprogram: id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				console.log(data[0]['mapel']);
				$('#namaprogram').val(data[0].namaprogram);
				$('#mapel').val(data[0].mapel);
				$('#hargaprogram').val(data[0].hargaprogram);
				$('#idprogram').val(data[0].idprogram);



			}
		});

	});

	});



</script>
