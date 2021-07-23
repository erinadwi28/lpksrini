<!-- Breadcrumb -->
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Data Voucher</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li class="active text-muted">Data Voucher</li>
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
					<span class="float-right">
						<button id="tambah_voucher" type="button" class="btn btn-sm gabung" data-toggle="modal"
							data-target="#modaltambah" data-backdrop="static" data-keyboard="false"><i class="fa fa-plus-circle"></i> Tambah</button>
					</span>
					<h4 class="fw-bolder mb-4"><b>Voucher yang berlaku</b></h4>
					<div class="table-responsive">

						<table class="table table-striped" id="bootstrap-data-table-export">
							<thead>
								<tr>
									<th scope="col" class="text-center">No</th>
									<th scope="col">Kode Voucher</th>
									<th scope="col">Jenis Voucher</th>
									<th scope="col">Total Voucher (Rp)</th>
									<th scope="col">Tanggal Dibuat</th>
									<th scope="col">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php if(count($voucher)>0){ 
									$no = 1;
									foreach ($voucher as $list) { ?>
								<tr id="<?= $list->id_voucher; ?>" data-id="<?= $list->kode_voucher; ?>">
									<td scope="row" class="text-center"><?= $no++ ?></td>
									<td><?= $list->kode_voucher; ?></td>
									<td><?= $list->jenis_voucher; ?></td>
									<td><?= $list->total_voucher; ?></td>
									<td><?= date('d/m/Y', strtotime($list->tgl_dibuat));  ?></td>
									<td>
										<div class="btn-group" role="group">
											<button id="" type="button" class="btn gabung btn-sm mr-2"
												data-toggle="modal"
												data-target="#modal_edit<?= $list->id_voucher; ?>" data-backdrop="static" data-keyboard="false"><i
													class="fa fa-edit"></i> Ubah</button>
											<button id="" type="submit"
												class="btn btn-danger btn-sm btn_hapus_voucher"><i class="fa fa-trash-o"></i>
												Hapus</button>
										</div>
									</td>
								</tr>
								<?php }  } else { ?>
								<tr>
									<td colspan="6" style="text-align:center;">Anda belum input data voucher!</td>
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
<div class="modal fade mt-3 p-5" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
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
</div>

<!-- Modal Ubah -->
<?php foreach ($voucher as $list) {?>

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
<?php } ?>
