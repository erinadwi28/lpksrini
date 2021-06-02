<div class="sufee-login d-flex align-content-center flex-wrap">
	<div class="container">
		<div class="login-content">
			<div class="login-logo">
				<a href="#">
					<img class="align-content" src="<?= base_url('assets/frontend/images/landing/logo_rini.png') ?>" alt="">
				</a>
			</div>
			<div class="login-form">
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

				<form id="masuk" method="POST" action="<?= base_url('auth') ?>">
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" placeholder="contoh@email.com" value="<?= set_value('email') ?>" required> 
					</div>
					<div class="form-group">
						<label>Kata Sandi</label>
						<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
						<input type="password" class="form-control" name="kata_sandi" id="password-field" placeholder="masukkan kata sandi disini..." required>
					</div>
					
					<button type="submit" class="btn btn-masuk btn-flat mt-4">Masuk</button>
					
					<div class="register-link mt-4 text-center">
						<p>Belum Memiliki Akun ? <a href="<?= base_url('auth/daftar') ?>"> Daftar Sekarang</a></p>
					</div>

					<div class="register-link mt-2 text-center">
						<p><a href="<?= base_url('beranda') ?>"> Kunjungi Sebagai Tamu</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
