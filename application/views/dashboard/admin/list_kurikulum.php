<!-- Breadcrumb -->
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<?php foreach ($kurikulum_join as $detail) { ?>

				<h1>Kurikulum <?= $detail->nama_pelatihan ?></h1>

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
					<li class="active text-muted">Kurikulum</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="progress">
	<div class="progress-bar" role="progressbar" style="width:15%; height:15px;" aria-valuenow="75" aria-valuemin="0"
		aria-valuemax="100"></div>
</div>

<!-- Cetak Sertifikat -->
<div class="content mt-3">
	<div class="row">
		<div class="container mt-1" style="padding-right:30px; padding-left:30px;">
			<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
				<div class="card-body">
					<span class="float-right">
						<button id="tambah_kurikulum" type="button" class="btn btn-sm gabung" data-toggle="modal"
							data-target="#modaltambah" data-backdrop="static" data-keyboard="false"><i
								class="fa fa-plus-circle"></i> Tambah</button>
					</span>
					<?php foreach ($kurikulum_join as $detail) { ?>
					<h4 class="fw-bolder mb-4"><b>Masukkan data kurikulum sebanyak <?= $detail->jumlah_kurikulum; ?>
							data sesuai jumlah kurikulum</b></h4>
					<?php } ?>
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
											<button id="" type="button" class="btn gabung btn-sm mr-2"
												data-toggle="modal" data-target="#modal_edit<?= $list->id_kurikulum; ?>"
												data-backdrop="static" data-keyboard="false"><i class="fa fa-edit"></i>
												Ubah</button>
										</div>
									</td>
								</tr>
								<?php }  } else { ?>
								<tr>
									<td colspan="4" style="text-align:center;">Anda belum memiliki program pelatihan!
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

<!-- Modal Ubah -->
<?php foreach ($kurikulum as $list) {?>

<div class="modal ubah_data_kurikulum fade mt-3 p-5" id="modal_edit<?= $list->id_kurikulum; ?>" tabindex="-1"
	role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-header-modal">
				<h5 class="modal-title" id="mediumModalLabel">Edit Data Kurikulum</h5>
				<button type="button" class="close close-form" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('admin/aksi_ubah_kurikulum') ?>" class="ubah_kurikulum"
				id="ubah<?= $list->id_kurikulum; ?>" method="post" accept-charset="utf-8">
				<div class="pesan" style="display: none;"></div>
				<div class="modal-body">
					<div class="form-group row">
						<label for="unit_kompetensi" class="col-sm-4 col-form-label">Unit Kompetensi</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="unit_kompetensi_ubah<?= $list->id_kurikulum; ?>"
								name="unit_kompetensi" value="<?= $list->unit_kompetensi; ?>"
								placeholder="masukkan unit kompetensi disini..." required="">
						</div>
					</div>
					<div class="form-group row">
						<label for="elemen_kompetensi" class="col-sm-4 col-form-label">Elemen Kompetensi</label>
						<div class="col-sm-8">
							<textarea class="form-control" name="elemen_kompetensi"
								id="elemen_kompetensi_ubah<?= $list->id_kurikulum; ?>" cols="30" rows="4"
								placeholder="masukkan elemen kompetensi disini..."
								required=""><?= $list->elemen_kompetensi; ?></textarea>

						</div>
					</div>
					<div class="form-group row">
						<label for="bobot" class="col-sm-4 col-form-label">Bobot/Jam Pelajaran @60 menit</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="bobot_ubah<?= $list->id_kurikulum; ?>"
								name="bobot" value="<?= $list->bobot; ?>" placeholder="masukkan bobot disini..."
								required="">
						</div>
						<input type="hidden" class="form-control" id="id_kurikulum<?= $list->id_kurikulum; ?>"
							name="id_kurikulum" value="<?= $list->id_kurikulum; ?>">
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
