<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Detail Data Member</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li><a href="<?= base_url('list-data-member') ?>">List Member</a></li>
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

<?php foreach ($member as $list) { ?>

<div class="container mt-4" style="padding-right:30px; padding-left:30px;">
	<div class="main-body">
		<div class="row">
			<div class="col-lg-4">
				<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">

					<div class="card-body">
						<div class="mx-auto d-block">
							<a href="<?= base_url('assets/backend/images/member/foto_profil/') . $list->foto_profil; ?>" data-gallery="mygallery" data-title="Foto Profil Member" data-toggle="lightbox">
								<img class="rounded-circle mx-auto d-block"
								src="<?= base_url('assets/backend/images/member/foto_profil/') . $list->foto_profil; ?>"
								alt="Card image cap" width="180">
							</a> 
							

							<div class="location text-sm-center"><i class="fa fa-credit-card"></i>
								<?= $list->kartu; ?></div>
							<div class="location text-sm-center"><i class="fa fa-map-marker"></i>
								<?= $list->alamat; ?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
					<div class="card-body m-3">
						<form id="ubah_profil_member" class="ubah_data_member" method="POST" action="<?= base_url('admin/aksi_ubah_member/') ?><?= $list->id_pengguna; ?>">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Nama</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="nama" class="form-control"
										value="<?= $list->nama; ?>" required>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="email" class="form-control"
										value="<?= $list->email; ?>" required readonly>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">No Hp</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="no_hp" class="form-control"
										value="<?= $list->no_hp; ?>" required>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Alamat</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="alamat" class="form-control"
										value="<?= $list->alamat; ?>" required>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<button type="submit" class="btn btn-primary btn-confirmation px-4 mt-3">Ubah</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>

</div>
