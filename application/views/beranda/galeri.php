<!-- header-start -->
<header>
	<div class="header-area ">
		<div id="sticky-header" class="main-header-area">
			<div class="container-fluid p-0">
				<div class="row align-items-center no-gutters">
					<div class="col-xl-2 col-lg-2">
						<div class="logo-img">
							<a href="index.html">
								<img src="<?= base_url('assets/frontend/images/landing/logo_rini.png') ?>" alt="">
							</a>
						</div>
					</div>
					<div class="col-xl-7 col-lg-7">
						<div class="main-menu  d-none d-lg-block">
							<nav>
								<ul id="navigation">
									<li><a href="<?= base_url('beranda') ?>">Beranda</a></li>
									<li><a href="<?= base_url('profil') ?>">Profil</a></li>
									<li><a href="<?= base_url('pelatihan') ?>">Program</a></li>
									<li><a href="<?= base_url('berita') ?>">Berita</a></li>
									<li><a class="active" href="<?= base_url('galeri') ?>">Galeri</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 d-none d-lg-block">
						<div class="log_chat_area d-flex align-items-center">
							<a href="<?= base_url('auth') ?>" class="login">
								<i class="flaticon-user"></i>
								<span>Masuk | Daftar</span>
							</a>
							<div class="live_chat_btn">
								<a class="boxed_btn_orange" href="#">
									<i class="fa fa-phone"></i>
									<span>081578933767</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="mobile_menu d-block d-lg-none"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- header-end -->

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg overlay2">
	<h3>Galeri</h3>
</div>
<!-- bradcam_area_end -->



<!-- gallery -->
<div class="gallery">
	<div class="container page-top">
		<div class="row" id="galeri_foto">
		<?php foreach ($detail_galeri as $detail) { ?>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="<?= base_url("assets/frontend/images/landing/gallery/$detail->foto_galeri") ?>" class="fancybox" rel="ligthbox">
					<img  src="<?= base_url("assets/frontend/images/landing/gallery/$detail->foto_galeri") ?>" class="zoom img-fluid "  alt="">
				</a>
			</div>
		<?php } ?>
		</div>
	</div>
</div>

