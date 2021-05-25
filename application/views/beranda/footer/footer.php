<!-- footer -->
<footer class="footer footer_bg_1">
	<div class="footer_top">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-md-6 col-lg-4">
					<div class="footer_widget">
						<div class="footer_logo">
							<a href="#">
								<img src="<?= base_url('assets/frontend/images/landing/logo_rini.png') ?>" alt="">
							</a>
						</div>
						<p class="footer_description">
							Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore hic nihil porro
							repellendus similique corrupti qui corporis, ipsam, impedit eos, atque optio quidem iste
							nemo maiores tempora odio dolorum. Similique!
						</p>
						<div class="socail_links">
							<ul>
								<li>
									<a href="https://web.facebook.com/lkp.rini.7">
										<i class="ti-facebook"></i>
									</a>
								</li>
								<li>
									<a href="https://www.instagram.com/lpksrini/">
										<i class="fa fa-instagram"></i>
									</a>
								</li>
								<li>
									<a href="mailto:lkprinicawas@gmail.com">
										<i class="fa fa-envelope"></i>
									</a>
								</li>
							</ul>
						</div>

					</div>
				</div>
				<div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
					<div class="footer_widget">
						<h3 class="footer_title">
							Program Pelatihan
						</h3>
						<ul>
							<li><a href="#"> Menjahit Tata Busana</a></li>
							<li><a href="#"> Menjahit Garmen</a></li>
							<li><a href="#"> Lainnya...</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-2 col-md-6 col-lg-2">
					<div class="footer_widget">
						<h3 class="footer_title">
							Menu
						</h3>
						<ul>
							<li><a href="#"> Beranda</a></li>
							<li><a href="#"> Profil</a></li>
							<li><a href="#"> Program Pelatihan</a></li>
							<li><a href="#"> Berita</a></li>
							<li><a href="#"> Kontak</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-lg-3">
					<div class="footer_widget">
						<h3 class="footer_title">
							Alamat
						</h3>
						<li><i class="fa fa-home"></i> Kauman Timur Rt. 001 Rw.004</li>
						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No.13, Kel. Cawas, Kab. Klaten,</li>
						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jawa Tengah, Indonesia</li>
						<li><i class="fa fa-phone"></i> 081578933767</li>
						<li><i class="fa fa-envelope"></i> <a href="mailto:lkprinicawas@gmail.com">
								lkprinicawas@gmail.com</a></li>
						<li><i class="fa fa-globe"></i> <a href="#"> lkpsrini.sch.id</a></li>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copy-right_text">
		<div class="container">
			<div class="footer_border"></div>
			<div class="row">
				<div class="col-xl-12">
					<p class="copy_right text-center">
						2021 Copyright LPKS Rini • All rights reserved
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer -->


<!-- form itself end-->
<form id="login" class="white-popup-block mfp-hide">
	<div class="popup_box ">
		<div class="popup_inner">
			<div class="logo text-center">
				<a href="#">
					<img src="<?= base_url('assets/frontend/images/landing/logo_rini.png') ?>" alt="">
				</a>
			</div>
			<h3>Masuk ke Akun Anda</h3>
			<form action="#">
				<div class="row">
					<div class="col-xl-12 col-md-12">
						<label for="email">Email | contoh@gmail.com</label>
						<input type="email" placeholder="masukkan email disini...">
					</div>
					<div class="col-xl-12 col-md-12">
						<label for="kata_sandi">Kata Sandi</label>
						<input type="kata_sandi" placeholder="masukkan sandi disini...">
					</div>
					<div class="col-xl-12">
						<button type="submit" class="boxed_btn_orange">Masuk</button>
					</div>
				</div>
			</form>
			<p class="doen_have_acc">Belum Memiliki Akun ? <a class="daftar dont-hav-acc" href="#daftar">Daftar
					Sekarang</a>
			</p>
		</div>
	</div>
</form>
<!-- form itself end -->

<!-- form itself end-->
<form id="daftar" class="white-popup-block mfp-hide">
	<div class="popup_box ">
		<div class="popup_inner">
			<div class="logo text-center">
				<a href="#">
					<img src="<?= base_url('assets/frontend/images/landing/logo_rini.png') ?>" alt="">
				</a>
			</div>
			<h3>Daftar Akun</h3>
			<form action="#">
				<div class="row">
					<div class="col-xl-12 col-md-12">
						<label for="nama">Nama Lengkap</label>
						<input type="nama" placeholder="masukkan nama disini...">
					</div>
					<div class="col-xl-12 col-md-12">
						<label for="email">Email | contoh@gmail.com</label>
						<input type="email" placeholder="masukkan email disini...">
					</div>
					<div class="col-xl-12 col-md-12">
						<label for="kata_sandi">Kata Sandi</label>
						<input type="kata_sandi" placeholder="masukkan sandi disini...">
					</div>
					<div class="col-xl-12">
						<button type="submit" class="boxed_btn_orange">Daftar</button>
					</div>
				</div>
			</form>
			<p class="doen_have_acc">Sudah Memiliki Akun ? <a class="daftar dont-hav-acc" href="#test-form">Masuk</a>
			</p>
		</div>
	</div>
</form>
<!-- form itself end -->


<!-- JS here -->
<script src="<?= base_url('assets/frontend/script/js/vendor/jquery-1.12.4.min.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/vendor/modernizr-3.5.0.min.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/isotope.pkgd.min.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/ajax-form.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/waypoints.min.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/jquery.counterup.min.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/imagesloaded.pkgd.min.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/scrollIt.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/jquery.scrollUp.min.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/wow.min.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/nice-select.min.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/jquery.slicknav.min.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/plugins.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/gijgo.min.js') ?>"></script>

<!--contact js-->
<script src="<?= base_url('assets/frontend/script/js/contact.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/jquery.ajaxchimp.min.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/jquery.form.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/jquery.validate.min.js') ?>"></script>
<script src="<?= base_url('assets/frontend/script/js/mail-script.js') ?>"></script>

<script src="<?= base_url('assets/frontend/script/js/main.js') ?>"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>
