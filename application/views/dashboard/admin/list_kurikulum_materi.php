<!-- Breadcrumb -->
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<?php foreach ($kurikulum_join as $detail) { ?>

				<h1>Materi <?= $detail->nama_pelatihan ?></h1>

				<?php } ?>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li><a href="<?= base_url('list-data-pelatihan') ?>">List Program Pelatihan</a></li>
					<?php foreach ($kurikulum_join as $detail) { ?>
					<li><a href="<?= base_url('detail-program-pelatihan/') ?><?= $detail->id_pelatihan; ?>">Detail</a>
					</li>
					<?php } ?>
					<li class="active text-muted">Materi</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="progress">
	<div class="progress-bar" role="progressbar" style="width:25%; height:25px;" aria-valuenow="45" aria-valuemin="0"
		aria-valuemax="100"></div>
</div>

<!-- Cetak Sertifikat -->
<div class="content mt-3">
	<div class="row">
		<div class="container mt-1" style="padding-right:30px; padding-left:30px;">
			<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
				<div class="card-body">
					<h4 class="fw-bolder mb-4"><b>Masukkan materi pada masing-masing unit kompetensi</b></h4>
					<div class="table-responsive">
						<table class="table table-striped" id="bootstrap-data-table-export">
							<thead>
								<tr>
									<th scope="col" class="text-center">No</th>
									<th scope="col">Unit Kompetensi</th>
									<th scope="col">Elemen Kompetensi</th>
									<th scope="col">Bobot/Jam Pelajaran @60 menit</th>
									<th scope="col">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php if(count($kurikulum)>0){ 
									$no = 1;
									foreach ($kurikulum as $list) { ?>
								<tr>
									<td scope="row" class="text-center"><?= $no++ ?></td>
									<td><?= $list->unit_kompetensi; ?></td>
									<td><?= $list->elemen_kompetensi; ?></td>
									<td><?= $list->bobot; ?></td>
									<td>
										<div class="btn-group" role="group">
											<a href="<?= base_url('input-data-materi/') ?><?= $list->id_pelatihan; ?>/<?= $list->id_kurikulum; ?>">
												<button id="" type="button" class="btn btn-primary btn-sm gabung"><i
														class="fa  fa-upload"></i> Materi</button>
											</a>
										</div>
									</td>
								</tr>
								<?php }  } else { ?>
								<tr>
									<td colspan="4" style="text-align:center;">Anda belum input data kurikulum!
									</td>
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
