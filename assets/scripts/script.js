$(function () {





	$('.note').on('click', function () {

	const id = $(this).data('id');
	const nama = $(this).data('nama');
	const catatan = $(this).data('catatan');
	const program = $(this).data('program');
		$('.modal-title').text('Detail Catatan');
		$('.modal-footer button[type=submit]').text('Simpan Catatan');
		$('#nama').html(nama);
		$('#idmurid').val(id);
		$('#idprogram').val(program);
		$('#catatan').html(catatan);

		
		$.ajax({
			url: "<?= base_url()?>guruabsensi/setCatatan",
			data: {
				idmurid: id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
			$('#catatan').val(data.catatan);



			}
		});






	});

	$('#cari').on('keyup', function () {
		$.ajax({
			type: 'POST',
			url: 'murid/cari',
			data: {
				cari: $(this).val()
			},
			cache: true,
			success: function (data) {
				console.log(data);
			}
		});
	});




});
