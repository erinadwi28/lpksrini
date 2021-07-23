<!-- Breadcrumb -->
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Data Transaksi Selesai</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li class="active text-muted">List Transaksi Selesai</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="progress">
	<div class="progress-bar" role="progressbar" style="width:5%; height:5px;" aria-valuenow="25" aria-valuemin="0"
		aria-valuemax="100"></div>
</div>

<!-- Cetak Sertifikat -->
<div class="content mt-3">
	<div class="row">
		<div class="container mt-1" style="padding-right:30px; padding-left:30px;">
			<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
				<div class="card-body">
					<h4 class="fw-bolder mb-4"><b>Transaksi yang sudah di acc</b></h4>
					<div class="table-responsive">

						<table class="table table-striped" id="bootstrap-data-table-export">
							<thead>
								<tr>
									<th scope="col" class="text-center">No</th>
									<th scope="col">Nama</th>
									<th scope="col">Pelatihan Dibeli</th>
									<th scope="col">Tanggal Beli</th>
									<th scope="col">Tanggal Aktif</th>
									<th scope="col">Status</th>
									<th scope="col">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php if(count($transaksi)>0){ 
									$no = 1;
									foreach ($transaksi as $list) { ?>
								    <tr id="<?= $list->id_transaksi; ?>">
									<td scope="row" class="text-center"><?= $no++ ?></td>
									<td><?= $list->nama; ?></td>
									<td><?= $list->nama_pelatihan; ?></td>
									<td><?= date('d/m/Y', strtotime($list->tgl_transaksi));  ?></td>
									<td><?= date('d/m/Y', strtotime($list->tgl_aktif));  ?></td>
									<td><span class="badge badge-success"><i class="fa fa-check-circle"></i> <?= $list->status; ?></span></td>
                                    
									<td>
										<div class="btn-group" role="group">
											<a href="<?= base_url('detail-transaksi-selesai/') ?><?= $list->id_transaksi; ?>">
												<button id="" type="button" class="btn btn-primary btn-sm gabung"><i class="fa  fa-search"></i> Detail</button>
											</a>
										</div>
									</td>
								</tr>
								<?php }  } else { ?>
								<tr>
									<td colspan="6" style="text-align:center;">Belum ada member yang membeli pelatihan!</td>
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