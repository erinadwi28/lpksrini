<!-- Breadcrumb -->
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Data Transaksi Masuk</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li class="active text-muted">List Transaksi Masuk</li>
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
					<h4 class="fw-bolder mb-4"><b>Transaksi yang sudah masuk dan belum di acc</b></h4>
					<div class="table-responsive">

						<table class="table table-striped" id="bootstrap-data-table-export">
							<thead>
								<tr>
									<th scope="col" class="text-center">No</th>
									<th scope="col">Nama</th>
									<th scope="col">Pelatihan Dibeli</th>
									<th scope="col">Tanggal Beli</th>
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
									<td><span class="badge badge-warning"><i class="fa fa-download"></i> <?= $list->status; ?></span></td>
                                    
									<td>
										<div class="btn-group" role="group">
											<a href="<?= base_url('detail-transaksi-masuk/') ?><?= $list->id_transaksi; ?>">
												<button id="" type="button" class="btn btn-primary btn-sm gabung"><i class="fa fa-search"></i> Detail</button>
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
<!-- Modal Add -->
<!-- <div class="modal fade mt-3 p-5" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-header-modal">
				<h5 class="modal-title" id="mediumModalLabel">Tambah Data Voucher</h5>
				<button type="button" class="close close-form" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open('admin/aksi_tambah_voucher', ['class' => 'simpan_voucher', 'id' => 'simpan']) ?>
			<div class="pesan" style="display: none;"></div>
			<div class="modal-body">
				<div class="form-group row">
					<label for="kode_voucher" class="col-sm-2 col-form-label">Kode Voucher</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="kode_voucher" name="kode_voucher"
							placeholder="masukkan kode disini..." required="">
					</div>
				</div>
				<div class="form-group row">
					<label for="jenis_voucher" class="col-sm-2 col-form-label">Jenis Voucher</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="jenis_voucher" name="jenis_voucher"
							placeholder="masukkan jenis disini..." required="">
					</div>
				</div>
				<div class="form-group row">
					<label for="total_voucher" class="col-sm-2 col-form-label">Total Voucher</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="total_voucher" name="total_voucher"
							placeholder="masukkan total disini..." required="">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Simpan</button>
			</div>
			<?= form_close() ?>
		</div>
	</div>
</div> -->

<!-- Modal Ubah -->
<!-- <?php foreach ($voucher as $list) {?>

<div class="modal ubah_data_voucher fade mt-3 p-5" id="modal_edit<?= $list->id_voucher; ?>" tabindex="-1" role="dialog"
	aria-labelledby="mediumModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-header-modal">
				<h5 class="modal-title" id="mediumModalLabel">Edit Data Voucher</h5>
				<button type="button" class="close close-form" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('admin/aksi_ubah_voucher') ?>" class="ubah_voucher"
				id="ubah<?= $list->id_voucher; ?>" method="post" accept-charset="utf-8">
				<div class="pesan" style="display: none;"></div>
				<div class="modal-body">
					<div class="form-group row">
						<label for="kode_voucher" class="col-sm-2 col-form-label">Kode Voucher</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="kode_voucher_ubah<?= $list->id_voucher; ?>"
								name="kode_voucher" value="<?= $list->kode_voucher; ?>"
								placeholder="masukkan kode disini..." required="">
						</div>
					</div>
					<div class="form-group row">
						<label for="jenis_voucher" class="col-sm-2 col-form-label">Jenis Voucher</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="jenis_voucher_ubah<?= $list->id_voucher; ?>"
								name="jenis_voucher" value="<?= $list->jenis_voucher; ?>"
								placeholder="masukkan jenis disini..." required="">
						</div>
					</div>
					<div class="form-group row">
						<label for="total_voucher" class="col-sm-2 col-form-label">Total Voucher</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="total_voucher_ubah<?= $list->id_voucher; ?>"
								name="total_voucher" value="<?= $list->total_voucher; ?>"
								placeholder="masukkan total disini..." required="">
						</div>
						<input type="hidden" class="form-control" id="id_voucher<?= $list->id_voucher; ?>"
							name="id_voucher" value="<?= $list->id_voucher; ?>">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php } ?> -->
