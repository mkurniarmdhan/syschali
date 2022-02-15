
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

	<link href="<?php echo base_url()?>/assets/main.css" rel="stylesheet">

 
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
											<img width="42" class="rounded-circle" src="<?= base_url()?>assets/images/avatars/4.jpg"
                                                alt="">

										</a>
										<div tabindex="-1" role="menu" aria-hidden="true"
											class="dropdown-menu dropdown-menu-right">
										 <a href="<?php echo base_url();?>login/logout" class="btn w-100">
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
                        
                            <li class="app-sidebar__heading">Absensi</li>
                            <li>
                                <a href="<?php echo base_url()?>Absensi">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    Laporan Absensi Murid
                                </a>
                            </li>
                          

                        </ul>
					</div>
				</div>
			</div>
			<!-- main content -->

			<div class="app-main__outer">

<!-- header -->

<div class="app-main__inner">

	<!-- code here -->
	<div class="app-page-title">
		<div class="page-title-wrapper">
			<div class="page-title-heading">
				<!-- <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div> -->
				<div>FORM GURU
					<div class="page-title-subheading">
					</div>
				</div>
			</div>

		</div> 
	</div>


	<div class="row"> 

		<div class="col-lg-4 col-sm-12" style="float:left;margin-bottom: 24px;">

			<div class=" card">
				<img height="180px" src="https://cdn.pixabay.com/photo/2014/05/31/23/16/teacher-359311_960_720.png"
					alt="Card image cap" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title"><?=$guru->namaguru?></h5>
					<?php foreach($program as $p):?>

					<p class="badge badge-warning mb-1"><?=$p->np?> <?=$p->mapel?></p>
					<?php endforeach; ?>
					<!-- <a href="#" class="btn-pill btn-wide btn btn-outline-alternate btn-sm show  w-100">
										PROFILE </a> -->
				</div>
			</div>
		</div>

		<div class="col-lg-8 col-sm-12">

			<div class="main-card mb-3 card">
				<div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate">
					</i>RIWAYAT ABSENSI MURID
					<div class="btn-actions-pane-right">

						<a class="btn btn-primary" href="<?=base_url()?>GuruAbsensi/absensi?date=">INPUT
							ABSEN</a>
					</div>
				</div>
				<div class="card-body">

					<table class="table">
						<thead>
							<tr>
								<th>Nama</th>
								<th class="text-center">Mapel</th>
								<th class="text-center">Jumlah Pertemuan </th>

								<th class="text-center">Catatan</th>
							</tr>

						</thead>
						<tbody>
							<?php foreach($murid as $m): ?>
							<tr>
								<td>
									<div class="widget-heading"><?= $m->nama?> </div>
								</td>
								<td class="text-center">
								<?= $m->mapel?> <div class="badge badge-warning mb-1"><?=$m->namaprogram?></div>
								</td>
								<td class="text-center"><?= $m->total?></td>
								<td class="text-center"><?= $m->idprogram?></td>


								<td class="text-center">
									<button type="button" data-id="<?=$m->idmurid?>" data-program="<?=$m->idprogram?>" data-nama="<?=$m->nama?>"
										data-catatan="<?=$m->catatan?>" class="btn btn-primary note" data-toggle="modal"
										data-target="#catatanMurid">
								Tambah Catatan
									</button>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>



				</div>
				<?= $pagination ?>
			</div>


		</div>
	</div>

</div>


<!-- footer -->



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
