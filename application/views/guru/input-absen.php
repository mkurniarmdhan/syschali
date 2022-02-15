<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Language" content="en">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Dashboard</title>
	<meta name="viewport"
		content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
	<meta name="description" content="This is an example dashboard created using build-in elements and components.">
	<meta name="msapplication-tap-highlight" content="no">

	<link href="<?php echo base_url()?>./assets/main.css" rel="stylesheet">


</head>

<body>
	<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
		<div class="app-header header-shadow">
			<div class="app-header__logo">
				<div class="logo-src"></div>
				<div class="header__pane ml-auto">
					<div>
						<button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
							data-class="closed-sidebar">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</div>
				</div>
			</div>
			<div class="app-header__mobile-menu">
				<div>
					<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>
			</div>
			<div class="app-header__menu">
				<span>
					<button type="button"
						class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
						<span class="btn-icon-wrapper">
							<i class="fa fa-ellipsis-v fa-w-6"></i>
						</span>
					</button>
				</span>
			</div>
			<div class="app-header__content">
				<div class="app-header-left">
					<div class="search-wrapper">
						<div class="input-holder">
							<input type="text" class="search-input" placeholder="Type to search">
							<button class="search-icon"><span></span></button>
						</div>
						<button class="close"></button>
					</div>

				</div>
				<div class="app-header-right">

					<div class="header-btn-lg pr-0">
						<div class="widget-content p-0">
							<div class="widget-content-wrapper">
								<div class="widget-content-left">

									<div class="widget-heading">
										<?= $this->session->data['nama']?>
									</div>



								</div>
								<div class="widget-content-left  ml-3 header-user-info">
									<div class="btn-group">
										<a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											class="p-0 btn">
											<img width="42" class="rounded-circle"
												src="<?php echo base_url('upload/foto/20171116051853.jpg'); ?>" alt="">


										</a>
										<div tabindex="-1" role="menu" aria-hidden="true"
											class="dropdown-menu dropdown-menu-right">
											<a href="<?php echo base_url("Login/logout");?>" class="btn w-100">
												<button type="button" tabindex="0"
													class="dropdown-item">Logout</button></a>

										</div>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="app-main">
			<div class="app-sidebar sidebar-shadow">
				<div class="app-header__logo">
					<div class="logo-src"></div>
					<div class="header__pane ml-auto">
						<div>
							<button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
								data-class="closed-sidebar">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
							</button>
						</div>
					</div>
				</div>
				<div class="app-header__mobile-menu">
					<div>
						<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</div>
				</div>
				<div class="app-header__menu">
					<span>
						<button type="button"
							class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
							<span class="btn-icon-wrapper">
								<i class="fa fa-ellipsis-v fa-w-6"></i>
							</span>
						</button>
					</span>
				</div>
				<div class="scrollbar-sidebar">
					<div class="app-sidebar__inner">
						<ul class="vertical-nav-menu">
							<li class="app-sidebar__heading">Dashboard</li>
							<li>
								<a href="<?php echo base_url()?>GuruAbsensi" class="mm-active">
									<i class="metismenu-icon pe-7s-home"></i>
									Beranda
								</a>
							</li>




						</ul>
					</div>
				</div>
			</div>

			<div class="app-main__outer">

				<div class="app-main__inner">
					<div class="app-page-title">
						<div class="page-title-wrapper">



						</div>
					</div>



					<div class="row">





						<div class="col-12 " style="float:left;margin-bottom: 24px;">

							<div class="main-card mb-3 card">
								<div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate">
									</i>
									<form class="form-inline mt-2" action="<?php base_url() ?>Absensi" method="GET">


										<div class="form-group mx-sm-3 mb-2">
											<label for="" class="sr-only "> </label>tanggal pertemuan
													<?php
													if((!empty($_GET['date']))){
													$date = $_GET['date'];
													}else{
													$date = 2022-01-28;}
													?>
											<input class="form-control ml-2" type="date" value="<?php echo $date?>"
												name="date" id="date">

										</div>

										<div class="form-group mx-sm-3 mb-2">
										
														<select class="form-select" aria-label="Default select example" name ="tingkat" id="tingkat">
														<?php
													if((!empty($_GET['tingkat']))){
													$tingkat = $_GET['tingkat'];
												switch($tingkat){

													case '1':
														$tingkat= 'CALISTUNG';
														break;
													case '2':
														$tingkat= 'SD';
														break;
													case '3':
														$tingkat= 'SMP';
														break;
													case '4':
														$tingkat= 'SMA';
														break;
													default:
													echo 'pilih tungjat';
													break;
												}
													}else{
													$tingkat = 'pilih tingkat';}
													?>
												
														<option selected ><?= $tingkat?></option>
														<option value="1">CALISTUNG</option>
														<option value="2">SD</option>
														<option value="3">SMP</option>
														<option value="4">SMA</option>
														</select>											
									

										</div>
										<button type="submit" class="btn btn-primary mb-2">Input </button>
									</form>

								</div>
								<div class="card-body">
									<div class="tab-content">
										<div class="tab-pane show active" id="tab-sd" role="tabpanel">

											<?php


																if((!empty($_GET['date']))&&(!empty($_GET['tingkat'])))

																{
																?>
									<?php 
									if(count($murid)!=0){?>


											<table
												class="align-middle mb-0 table table-borderless table-striped table-hover">
												<thead>
													<tr>
														<th class="text-center">Nama</th>
														<th class="text-center">Mapel Pertemuan</th>
														<th class="text-center">Tingkat</th>
														<th class="text-center" colspan="2">KETERANGAN</th>
														<!-- <th class="text-center">action</th> -->

													</tr>

												</thead>
												<tbody>

													<?php
											
										
											
													foreach($murid as $m): ?>

													<form action="#" method="get">
														<input type="hidden" name="idmurid" value="<?=$m->idmurid?>">
														<input type="hidden" name="tgl" value="<?=$_GET['date']?>">
														<input type="hidden" name="tingkat" value="<?=$_GET['tingkat']?>">
														<tr>
															
																	<td class="text-center"><?=$m->nama?></td>	

														
															<td class="text-center"><?=$m->mapel?><?=$m->namaprogram?></td>
															<td class="text-center"><?=$m->namatingkat?></td>
															<td class="text-center ">

																<a class="btn btn-danger "
																	href="<?php base_url() ?> setAbsen?idmurid=<?=$m->idmurid?>&tgl_absen=<?=$_GET['date']?>&ket=HADIR&tingkat=<?=$m->idtingkat?>&program=<?=$m->idprogram?>">MASUK</a>

																	<a class="btn btn-info"
																	href="<?php base_url() ?> setAbsen?idmurid=<?=$m->idmurid?>&tgl_absen=<?=$_GET['date']?>&ket=IZIN&tingkat=<?=$m->idtingkat?>&program=<?=$m->idprogram?>">IZIN</a>




															</td>


														</tr>
													</form>



													<?php endforeach; ?>


												</tbody>
											</table>


											<?php }else{
																	?>

											<a class="btn btn-outline-primary"
												href="<?= base_url()?>GuruAbsensi">Kembali ke Beranda</a>
						 					<?php 
} ?>

											<?php } else{

echo '<div class="alert alert-info" role="alert">
												Pastikan Tanggal Pertemuan dan tingkat Murid sudah sesuai
											</div>';}?>
										</div>


									</div>

								</div>

							</div>
						</div>
					</div>



				</div>


			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
			integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
		</script>


		<script type="text/javascript" src="<?php echo base_url()?>./assets/scripts/script.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>./assets/scripts/main.js"></script>


</body>

</html>
