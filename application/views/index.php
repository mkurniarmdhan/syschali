<div class="app-main__inner">


	<div class="app-page-title">
		<div class="page-title-wrapper">
			<div class="page-title-heading">
				<!-- <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div> -->
				<div> Dashboard
					<div class="page-title-subheading">
					</div>
				</div>
			</div>


		</div>
	</div>

	<div class="main-card mb-3 card">
		<div class="no-gutters row">
			<div class="col-md-6">
				<div class="pt-0 pb-0 card-body">
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							<div class="widget-content p-0">
								<div class="widget-content-outer">
									<div class="widget-content-wrapper">
										<div class="widget-content-left">
											<div class="widget-heading">Total Murid</div>
											<div class="widget-subheading">
													<?php 
																									

														$i = date('Y');
														if($i>=$i){
														echo 'Per '.date('F ') . $i;}else{

														$i++

														;echo $i;
																}?>

											</div>
										</div>
										<div class="widget-content-right">
											<div class="widget-numbers text-success"><?=$totalmurid?> </div>
										</div>
									</div>
								</div>
							</div>
						</li>

					</ul>
				</div>
			</div>

			<div class="col-md-6">
				<div class="pt-0 pb-0 card-body">
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							<div class="widget-content p-0">
								<div class="widget-content-outer">
									<div class="widget-content-wrapper">
										<div class="widget-content-left">
											<div class="widget-heading">Pengajar</div>
											<div class="widget-subheading">

		<?php 
																									

														$i = date('Y');
														if($i>=$i){
														echo 'Per '.date('F ') . $i;}else{

														$i++

														;echo $i;
																}?>
										</div>
										</div>
										<div class="widget-content-right">
											<div class="widget-numbers text-primary"><?=$totalguru?> </div>
										</div>
									</div>
								</div>
							</div>
						</li>


					</ul>
				</div>
			</div>

		</div>
	</div>

	<div class="row">
		<div class="col-md-6 col-xl-4">
			<div class="card mb-3 widget-content">
				<div class="widget-content-outer">
					<div class="widget-content-wrapper">
						<div class="widget-content-left">
							<div class="widget-heading">Total Pembayaran</div>
							<div class="widget-subheading">Pembayaran murid</div>
						</div>
						<div class="widget-content-right">
							<div class="widget-numbers text-success" style="font-size: 1.6em;">Rp.
								1.896.213</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-xl-4">
			<div class="card mb-3 widget-content">
				<div class="widget-content-outer">
					<div class="widget-content-wrapper">
						<div class="widget-content-left">
							<div class="widget-heading">Total Pembayaran</div>
							<div class="widget-subheading">Pending Payment</div>
						</div>
						<div class="widget-content-right">
							<div class="widget-numbers text-warning" style="font-size: 1.6em;">Rp.
								1.137.000</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-xl-4">
			<div class="card mb-3 widget-content">
				<div class="widget-content-outer">
					<div class="widget-content-wrapper">
						<div class="widget-content-left">
							<div class="widget-heading">Total Pembayaran</div>
							<div class="widget-subheading">Pembayaran ke Guru</div>
						</div>
						<div class="widget-content-right">
							<div class="widget-numbers text-danger" style="font-size: 1.6em;">Rp.
								1.327.000</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="d-xl-none d-lg-block col-md-6 col-xl-4">
			<div class="card mb-3 widget-content">
				<div class="widget-content-outer">
					<div class="widget-content-wrapper">
						<div class="widget-content-left">
							<div class="widget-heading">Income</div>
							<div class="widget-subheading">Expected totals</div>
						</div>
						<div class="widget-content-right">
							<div class="widget-numbers text-focus">$147</div>
						</div>
					</div>
					<div class="widget-progress-wrapper">
						<div class="progress-bar-sm progress-bar-animated-alt progress">
							<div class="progress-bar bg-info" role="progressbar" aria-valuenow="54" aria-valuemin="0"
								aria-valuemax="100" style="width: 54%;"></div>
						</div>
						<div class="progress-sub-label">
							<div class="sub-label-left">Expenses</div>
							<div class="sub-label-right">100%</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-md-12 col-lg-6">
			<div class="mb-3 card">
				<div class="card-header-tab card-header-tab-animation card-header">
					<div class="card-header-title">
						<i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
						Riwayat Pembayaran
					</div>

				</div>
				<div class="card-body">
					<div class="tab-content">
						<div class="tab-pane fade show active" id="tabs-eg-77">

							<h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">
								riwayat pembayaran murid</h6>
							<div class="scroll-area-sm">
								<div class="scrollbar-container">
									<ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
						<?php  for($i=0;$i<=5;$i++) {?>




										<li class="list-group-item">
											<div class="widget-content p-0">
												<div class="widget-content-wrapper">
													<div class="widget-content-left mr-3">
														<img width="42" class="rounded-circle"
															src="<?=base_url()?>assets/images/avatars/2.jpg" alt="">
													</div>
													<div class="widget-content-left">
														<div class="widget-heading">Wanwan
														</div>
														<div class="widget-subheading">23 Spetember 2021
														</div>
													</div>
													<div class="widget-content-right">
														<div class="font-size-xlg text-muted">
															<small class="opacity-5 pr-1">Rp</small>
															<span>429.000,0</span>
															<small class="text-warning pl-2">
																<i class="fa fa-dot-circle"></i>
															</small>
														</div>
													</div>
												</div>
											</div>
										</li>
								<?php }?>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-lg-6">
			<div class="mb-3 card">
				<div class="card-header-tab card-header">
					<div class="card-header-title">
						<i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
						Grafik Pembayaran
					</div>
					<div class="btn-actions-pane-right">
						<div class="widget-subheading opacity-6">		<?php 
																									

														$i = date('Y');
														if($i>=$i){
														echo 'Per '.date('F ') . $i;}else{

														$i++

														;echo $i;
																}?>
						</div>
					</div>
				</div>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="tab-eg-55">

						<div class="pt-2 card-body">
							<div class="row">
								<div class="col-md-6">
									<div class="widget-content">
										<div class="widget-content-outer">
											<div class="widget-content-wrapper">
												<div class="widget-content-left">
													<div class="widget-numbers fsize-3 text-muted">30%
													</div>
												</div>
												<div class="widget-content-right">

												</div>
											</div>
											<div class="widget-progress-wrapper mt-1">
												<div class="progress-bar-sm progress-bar-animated-alt progress">
													<div class="progress-bar bg-info" role="progressbar"
														aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
														style="width: 30%;"></div>
												</div>
												<div class="widget-subheading opacity-6">Total
													Pendapatan
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class=" col-md-6">
									<div class="widget-content">
										<div class="widget-content-outer">
											<div class="widget-content-wrapper">
												<div class="widget-content-left">
													<div class="widget-numbers fsize-3 text-muted">
														40%
													</div>
												</div>
												<div class="widget-content-right">

												</div>
											</div>
											<div class="widget-progress-wrapper mt-1">
												<div class="progress-bar-sm progress-bar-animated-alt progress">
													<div class="progress-bar bg-success" role="progressbar"
														aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
														style="width: 40%;"></div>
												</div>
												<div class="widget-subheading opacity-6">
													Pembayaran Selesai
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="widget-content">
										<div class="widget-content-outer">
											<div class="widget-content-wrapper">
												<div class="widget-content-left">
													<div class="widget-numbers fsize-3 text-muted">
														70%
													</div>
												</div>
												<div class="widget-content-right">

												</div>
											</div>
											<div class="widget-progress-wrapper mt-1">
												<div class="progress-bar-sm progress-bar-animated-alt progress">
													<div class="progress-bar bg-primary" role="progressbar"
														aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
														style="width: 70%;"></div>
												</div>
												<div class="widget-subheading opacity-6">Pembayaran
													guru
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="widget-content">
										<div class="widget-content-outer">
											<div class="widget-content-wrapper">
												<div class="widget-content-left">
													<div class="widget-numbers fsize-3 text-muted">
														60%
													</div>
												</div>
												<div class="widget-content-right">

												</div>
											</div>
											<div class="widget-progress-wrapper mt-1">
												<div class="progress-bar-sm progress-bar-animated-alt progress">
													<div class="progress-bar bg-danger" role="progressbar"
														aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"
														style="width: 60%;"></div>
												</div>
												<div class="widget-subheading opacity-6">Pemayaran
													Tertunda
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



</div>
