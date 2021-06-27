<!-- Breadcrumb -->
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Pelatihan Aktif</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li class="active text-muted">Pelatihan Aktif</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="progress">
	<div class="progress-bar" role="progressbar" style="width:5%; hight:5px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>


<?php if($cek_pelatihan > 0){ ?>
	<!-- Pelatihan Aktif -->		
	<div class="content mt-3">
		<div class="row">
			<div class="container mt-1" style="padding-right:30px; padding-left:30px;">
				<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
					<div class="card-body">
						<div class="table-responsive">
							<table id="table_pelatihan" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>No</th>
										<th>Pelatihan</th>
										<th>Jumlah Kurikulum</th>
										<th>Status</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End -->
<?php } else { ?>

	<div class="content mt-3">
		<div class="row">
			<div class="container mt-1" style="padding-right:30px; padding-left:30px;">
				<center>
					<img class="img-fluid mt-4 mb-1" style="max-height:400px;"src="<?= base_url('assets/frontend/images/landing/empity_pelatihan.png') ?>" alt="">
					<div class="text-center mt-4 mb-2">
						<a class="btn btn-primary btn-confirmation"
							href="<?= base_url('katalog') ?>">Beli Program Pelatihan</a>
					</div>
				</center>
			</div>
		</div>
	</div>
	
<?php } ?>



</div>