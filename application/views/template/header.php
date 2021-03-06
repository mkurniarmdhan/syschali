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
										Mrs. Jajuk
									</div>
									<div class="widget-subheading">
										Pemilik
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
                                <a href="<?php echo base_url()?>Home" class="mm-active">
                                    <i class="metismenu-icon pe-7s-home"></i>
                                    Beranda
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Basis Data</li>
                            <li>
                                <a href="<?php echo base_url()?>Murid">
                                    <i class="metismenu-icon pe-7s-id"></i>
                                    Data Murid
                                </a>
                                <a href="<?php echo base_url()?>Guru">
                                    <i class="metismenu-icon pe-7s-id"></i>
                                    Data Guru
                                </a>
                                <a href="<?php echo base_url()?>Program">
                                    <i class="metismenu-icon pe-7s-id"></i>
                                    Data Program
                                </a>

                            </li>

                            <li class="app-sidebar__heading">Absensi</li>
                            <li>
                                <a href="<?php echo base_url()?>Absensi">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    Laporan Absensi Murid
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Pembayaran</li>
                            <li>
                                <a href="<?php echo base_url()?>Pembayaran">
                                    <i class="metismenu-icon pe-7s-note2

                                    ">
                                    </i>Data pembayaran Murid
                                </a>
                            </li>


                        </ul>
					</div>
				</div>
			</div>
			<!-- main content -->

			<div class="app-main__outer">
