<div class="sufee-login d-flex align-content-center flex-wrap">
	<div class="container">
		<div class="login-content">
			<div class="login-logo">
				<a href="#">
					<img class="align-content" src="<?= base_url('assets/frontend/images/landing/logo_rini.png') ?>" alt="">
				</a>
			</div>
			<div class="login-form" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
				<?php if ($this->session->flashdata('success')) { ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?= $this->session->flashdata('success') ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php } elseif ($this->session->flashdata('error')) { ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?= $this->session->flashdata('error') ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php } ?>

				<form id="daftar" method="POST" action="<?= base_url('auth/daftar') ?>">
                    <div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" name="nama" class="form-control" placeholder="masukkan nama lengkap disini..." value="<?= set_value('nama') ?>" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" placeholder="contoh@email.com" value="<?= set_value('email') ?>" required>
					</div>
                    <div class="form-group">
						<label>No Hp</label>
						<input type="text" name="no_hp" class="form-control" placeholder="masukkan no hp disini..." value="<?= set_value('no_hp') ?>" required>
					</div>
					<div class="form-group">
						<label>Kata Sandi</label>
						<span toggle="#password-field" class="fa fa-fw fa-eye fa-eye field-icon toggle-password"></span>
						<input type="password" name="kata_sandi" class="form-control" id="password-field" placeholder="masukkan kata sandi disini..." required minlength="6">
					</div>
					<div class="form-group">
						<label>Konfirmasi Kata Sandi</label>
						<span toggle="#password-field-confirmation" class="fa fa-fw fa-eye field-icon-2 toggle-password-2"></span>
						<input type="password" name="kata_sandi_ulang" class="form-control" id="#password-field-confirmation" placeholder="masukkan kata sandi disini..." required minlength="6" data-parsley-equalto="#password-field">
					</div>
                    <div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control" placeholder="masukkan alamat disini..." value="<?= set_value('alamat') ?>" required>
					</div>
					
					<button type="submit" class="btn btn-masuk btn-flat mt-4">Daftar</button>
					
					<div class="register-link mt-4 text-center">
						<p>Sudah Memiliki Akun? <a href="<?= base_url('auth') ?>"> Masuk</a></p>
					</div>

					<div class="register-link mt-2 text-center">
						<p><a href="<?= base_url('beranda') ?>"> Kunjungi Sebagai Tamu</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
