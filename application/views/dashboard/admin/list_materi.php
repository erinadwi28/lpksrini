<!-- Breadcrumb -->
<div class="breadcrumbs">
	<div class="col-sm-6">
		<div class="page-header float-left">
			<div class="page-title">
				<?php foreach ($kurikulum as $detail) { ?>

				<h1>Unit Kompetensi <?= $detail->unit_kompetensi ?></h1>

				<?php } ?>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li><a href="<?= base_url('list-data-pelatihan') ?>">List Program Pelatihan</a></li>
					<?php foreach ($kurikulum_join as $detail) { ?>
					<li><a href="<?= base_url('detail-program-pelatihan/') ?><?= $detail->id_pelatihan; ?>">Detail</a>
					</li>
					<?php } ?>
					<?php foreach ($kurikulum_join as $detail) { ?>
					<li><a href="<?= base_url('unit-kompetensi/') ?><?= $detail->id_pelatihan; ?>">Materi</a>
					</li>
					<?php } ?>
					<li class="active text-muted">Input</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="progress">
	<div class="progress-bar" role="progressbar" style="width:35%; height:35px;" aria-valuenow="55" aria-valuemin="0"
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
					<h4 class="fw-bolder mb-4"><b>Masukkan data materi</b></h4>
					<div class="table-responsive">
						<table class="table table-striped" id="bootstrap-data-table-export">
							<thead>
								<tr>
									<th scope="col" class="text-center">No</th>
									<th scope="col">Nama Materi</th>
									<th scope="col">Jenis Materi</th>
									<th scope="col">Link Materi</th>
									<th scope="col">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php if(count($materi)>0){ 
									$no = 1;
									foreach ($materi as $list) { ?>
								<tr>
									<td scope="row" class="text-center"><?= $no++ ?></td>
									<td><?= $list->nama_materi; ?></td>
									<td><?= $list->jenis_materi; ?></td>
									<td><?= $list->link_materi; ?></td>
									<td>
										<div class="btn-group" role="group">
											<button id="" type="button" class="btn gabung btn-sm mr-2"
												data-toggle="modal" data-target="#modal_edit<?= $list->id_materi; ?>"
												data-backdrop="static" data-keyboard="false"><i class="fa fa-edit"></i>
												Ubah</button>
										</div>
									</td>
								</tr>
								<?php }  } else { ?>
								<tr>
									<td colspan="4" style="text-align:center;">Anda belum memasukkan data materi pada
										unit kompetensi ini!
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

<!-- Modal Add -->
<div class="modal fade mt-3 p-5" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-header-modal">
				<h5 class="modal-title" id="mediumModalLabel">Tambah Data Materi</h5>
				<button type="button" class="close close-form" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open('admin/aksi_tambah_materi', ['class' => 'simpan_materi', 'id' => 'simpan']) ?>
			<div class="pesan" style="display: none;"></div>
			<div class="modal-body">
				<div class="form-group row">
					<label for="nama_materi" class="col-sm-2 col-form-label">Nama Materi</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nama_materi" name="nama_materi" value=""
							placeholder="masukkan materi disini..." required>
					</div>
				</div>
				<div class="form-group row">
					<label for="jenis_materi" class="col-sm-2 col-form-label">Jenis Materi</label>
					<div class="col-sm-10">
						<select class="form-control" id="jenis_materi" name="jenis_materi">
							<option selected disabled>pilih jenis materi...</option>
							<option value="Modul">Modul</option>
							<option value="Video">Video</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="link_materi" class="col-sm-2 col-form-label">Link Materi</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="link_materi" name="link_materi" value=""
							placeholder="masukkan link materi disini..." required>
					</div>
				</div>
				<?php foreach ($materi as $list) { ?>
				<div class="form-group row">
					<div class="col-sm-10">
						<input type="hidden" class="form-control" id="id_kurikulum" name="id_kurikulum"
							value="<?= $list->id_kurikulum; ?>" required>
					</div>
				</div>
				<?php  } ?>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Simpan</button>
			</div>
			<?= form_close() ?>
		</div>
	</div>
</div>

<!-- Modal Ubah -->
<?php foreach ($materi as $list) {?>
<div class="modal ubah_data_materi fade mt-3 p-5" id="modal_edit<?= $list->id_materi; ?>" tabindex="-1" role="dialog"
	aria-labelledby="mediumModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-header-modal">
				<h5 class="modal-title" id="mediumModalLabel">Edit Data Materi</h5>
				<button type="button" class="close close-form" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('admin/aksi_ubah_materi') ?>" class="ubah_materi"
				id="ubah<?= $list->id_materi; ?>" method="post" accept-charset="utf-8">
				<div class="pesan" style="display: none;"></div>
				<div class="modal-body">
					<div class="form-group row">
						<label for="nama_materi" class="col-sm-2 col-form-label">Nama Materi</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="nama_materi" name="nama_materi" 
								placeholder="masukkan materi disini..." value="<?= $list->nama_materi; ?>" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="jenis_materi" class="col-sm-2 col-form-label">Jenis Materi</label>
						<div class="col-sm-10">
							<select class="form-control" id="jenis_materi" name="jenis_materi">
								<option value="Modul" <?= ($list->jenis_materi == 'Modul' ? ' selected' : ''); ?>>Modul</option>
								<option value="Video" <?= ($list->jenis_materi == 'Video' ? ' selected' : ''); ?>>Video</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="link_materi" class="col-sm-2 col-form-label">Link Materi</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="link_materi" name="link_materi" 
								placeholder="masukkan link materi disini..." value="<?= $list->link_materi; ?>" required>
						</div>
					</div>
					
					<div class="form-group row">
						<div class="col-sm-10">
							<input type="hidden" class="form-control" id="id_materi" name="id_materi"
								value="<?= $list->id_materi; ?>" required>
						</div>
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
