<!-- Breadcrumb -->
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Cetak Sertifikat</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li class="active text-muted">Cetak Sertifikat</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="progress">
	<div class="progress-bar" role="progressbar" style="width:5%; height:5px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<!-- Cetak Sertifikat -->		
<div class="content mt-3">
	<div class="row">
		<div class="container mt-1" style="padding-right:30px; padding-left:30px;">
			<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
				<div class="card-body">
					<h4 class="fw-bolder mb-4"><b>Daftar sertifikat anda!</b></h4>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
								<th scope="col">No</th>
								<th scope="col">Nama Pelatihan</th>
								<th scope="col">Sertifikat</th>
								</tr>
							</thead>
							<tbody>
								<?php if(count($sertifikat)>0){ 
									$no = 1;
									foreach ($sertifikat as $list) { ?>
										<tr>
											<td scope="row"><?= $no++ ?></td>
											<td><?= $list->nama_pelatihan; ?></td>
											<td>
												<div class="btn-group" role="group">
													<a href="<?= $list->nama_file; ?>">
														<button id="" type="button" class="btn btn-success btn-sm">Cetak</button>
													</a>
												</div>
											</td>
										</tr>
								<?php }  } else { ?>
									<tr>
										<td colspan="3" style="text-align:center;">Anda belum memiliki sertifikat!</td>
									</tr>
								<?php } ?>

								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<!-- End -->

</div>