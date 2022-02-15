<div class="app-main__inner">
	<div class="app-page-title">
		<div class="page-title-wrapper">
			<div class="page-title-heading">

				<div>
					<div class="d-inline">


						<a href="<?=base_url()?>Guru/addguru" class="btn btn-primary  mt-3">
							Tambah
							data pengajar</a>

					</div>
				</div>
			</div>

		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-6">
				<h3 class="mb-3">Data Pengajar</h3>
			</div>
			<div class="col-6 text-right">
				<!-- <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
					< </a> <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button"
						data-slide="next">
						>
				</a> -->
			</div>
			<div class="col-12">
				<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
			
					<div class="carousel-inner">
	
						<div class="carousel-item active">

							<div class="row">
							<?php  foreach($data as $r)  :?>
								<div class="col-md-3 mb-3">
									<div class="card">
										<img class="img-fluid" alt="100%x280"
											src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
										<div class="card-body">
											<h4 class="card-title"><?=$r->namaguru?></h4>
											<?php   $program= $this->ModelGuru->getProgramById($r->idguru) ;foreach($program as $r):?>
									<span><?=$r->mapel?> |</span>

											<?php endforeach; ?>
											<a href="<?=base_url()?>Guru/detail/<?= $r->idguru?>"
												class="btn-pill btn-wide btn btn-outline-alternate btn-sm show  w-100">
												Detail</a>
										</div>
									</div>
								</div>
	<?php endforeach;?>
							</div>
	
						</div>

					</div>
			

				</div>
			</div>
		</div>
	</div>


</div>
