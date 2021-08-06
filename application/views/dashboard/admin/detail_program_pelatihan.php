<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Detail Program Pelatihan</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li><a href="<?= base_url('list-data-pelatihan') ?>">List Program Pelatihan</a></li>
					<li class="active text-muted">Detail</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="progress">
	<div class="progress-bar" role="progressbar" style="width:10%; height:10px;" aria-valuenow="50" aria-valuemin="0"
		aria-valuemax="100"></div>
</div>

<div class="flash-data-foto" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<?php if ($this->session->flashdata('success')) : ?>
<?php endif; ?>

<?php foreach ($pelatihan as $detail) { ?>
<div class="container mt-4" style="padding-right:30px; padding-left:30px;">
	<div class="main-body">
		<div class="row mb-4 py-3">
			<div class="col-lg-8">
				<form id="ubah_detail_pelatihan" class="ubah_detail_pelatihan" method="POST"
					action="<?= base_url('admin/aksi_ubah_pelatihan/') ?><?= $detail->id_pelatihan; ?>">
					<div class="row mb-3">
						<div class="col-sm-3">
							<h6 class="mb-0">Nama Pelatihan</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							<input type="text" name="nama_pelatihan" class="form-control"
								value="<?= $detail->nama_pelatihan; ?>" required>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-3">
							<h6 class="mb-0">Harga (Rp)</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							<input type="text" name="harga" class="form-control" value="<?= $detail->harga; ?>"
								required>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-3">
							<h6 class="mb-0">Jumlah Kurikulum</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							<input type="number" name="jumlah_kurikulum" class="form-control"
								value="<?= $detail->jumlah_kurikulum; ?>" required>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-3">
							<h6 class="mb-0">Deskripsi</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							<textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="7"
								required><?= $detail->deskripsi; ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-sm-9 text-secondary">
							<button type="submit" class="btn btn-primary btn-confirmation px-4 mt-2">Ubah</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-4">
				<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
					<div class="card-body">
						<h5 class="text-center mb-2">Cover Pelatihan</h5>

						<div class="mx-auto d-block">
							<?php if ($detail->gambar_pelatihan != "placeholder.png") { ?>
							<a href="<?= base_url('assets/frontend/images/landing/courses/') . $detail->gambar_pelatihan; ?>"
								data-gallery="mygallery" data-title="Foto Profil Saya" data-toggle="lightbox">
								<img class="mx-auto d-block"
									src="<?= base_url('assets/frontend/images/landing/courses/') . $detail->gambar_pelatihan; ?>"
									alt="Cover Pelatihan" width="200">
							</a>
							<?php } else { ?>
							<a href="<?= base_url('assets/frontend/images/landing/courses/') . $detail->gambar_pelatihan; ?>"
								data-gallery="mygallery" data-title="Foto Profil Saya" data-toggle="lightbox">
								<img class="rounded-circle mx-auto d-block"
									src="<?= base_url('assets/frontend/images/landing/courses/') . $detail->gambar_pelatihan; ?>"
									alt="Cover Pelatihan" width="200">
							</a>
							<?php } ?>
						</div>
						<hr>
						<div class="card-text">
							<form action="<?= base_url('admin/upload_cover_pelatihan/') ?><?= $detail->id_pelatihan; ?>"
								enctype="multipart/form-data" method="post" accept-charset="utf-8"
								id="form_upload_foto_profil">
								<div class="input-group">
									<div class="custom-file">
										<label class="custom-file-label" for="file-upload">Pilih file foto...</label>
										<input type="file" class="custom-file-input" id="file-upload" name="berkas"
											required>
									</div>
									<div class="input-group-append">
										<button class="btn btn-outline-secondary btn-upload" type="submit">
											<i class="fa fa-upload"></i></button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
		<hr>
		<div class="row mt-4 mb-4 py-3">
			<div class="col-md-4 pelatihan">
				<div class="feed-box text-center">
					<div class="card-box shadow">
						<div class="text-center mt-2">
							<h5 class="icon-kurikulum"> Kurikulum </h5>
						</div>
						<div class="icon">
							<a href="<?= base_url('kurikulum/') ?><?= $detail->id_pelatihan; ?>">
								<i class="fa fa-file-text-o icon-kurikulum"></i>
							</a>

						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 pelatihan">
				<div class="feed-box text-center">
					<div class="card-box shadow">
						<div class="text-center mt-2">
							<h5 class="icon-materi"> Materi </h5>
						</div>
						<div class="icon">
							<a href="">
								<i class="fa fa-book icon-materi"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 pelatihan">
				<div class="feed-box text-center">
					<div class="card-box shadow">
						<div class="text-center mt-2">
							<h5 class="icon-kuis"> Kuis </h5>
						</div>
						<div class="icon">
							<a href="">
								<i class="fa fa-question-circle icon-kuis"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
</div>
