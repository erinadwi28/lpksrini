<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Profil</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li class="active text-muted">Profil</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="progress">
	<div class="progress-bar" role="progressbar" style="width:5%; hight:5px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>


<div class="container mt-4" style="padding-right:30px; padding-left:30px;">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
						<div class="card-body m-3">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="<?= base_url('assets/backend/images/member/foto_profil/') . $pengguna['foto_profil']; ?>" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4><?= $pengguna['nama']; ?></h4>
									<h4 class="text-secondary mt-2 "><?= $pengguna['kartu']; ?></h4>
									<p class="text-muted font-size-sm"><?= $pengguna['alamat']; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
						<div class="card-body m-3">
                            <form id="ubah_profil" method="POST" action="<?= base_url('member/aksi_ubah_profil') ?>">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nama</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="nama" class="form-control" value="<?= $pengguna['nama']; ?>" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="email" class="form-control" value="<?= $pengguna['email']; ?>" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">No Hp</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="no_hp" class="form-control" value="<?= $pengguna['no_hp']; ?>" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Alamat</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="alamat" class="form-control" value="<?= $pengguna['alamat']; ?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
					                    <button type="submit" class="btn btn-primary btn-confirmation px-4 mt-3">Ubah Profil</button>
                                    </div>
                                </div>
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>