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
									<li><a class="active" href="<?= base_url('beranda') ?>">Beranda</a></li>
									<li><a href="<?= base_url('profil') ?>">Profil</a></li>
									<li><a href="<?= base_url('pelatihan') ?>">Program</a></li>
									<li><a href="<?= base_url('berita') ?>">Berita</a></li>
									<li><a href="<?= base_url('galeri') ?>">Galeri</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 d-none d-lg-block">
						<?php if($this->session->userdata('id_level') =='2'){ ?>
						<div class="log_chat_area d-flex align-items-center">
							<a href="<?= base_url('auth') ?>" class="login">
								<i class="flaticon-user"></i>
								<span><?= $pengguna['nama']; ?></span>
							</a>
							<div class="live_chat_btn">
								<a class="boxed_btn_orange" href="#">
									<i class="fa fa-phone"></i>
									<span>081578933767</span>
								</a>
							</div>
						</div>
						<?php } elseif($this->session->userdata('id_level') =='1') {?>
						<div class="log_chat_area d-flex align-items-center">
							<a href="<?= base_url('auth') ?>" class="login">
								<i class="flaticon-user"></i>
								<span><?= $admin['nama']; ?></span>
							</a>
							<div class="live_chat_btn">
								<a class="boxed_btn_orange" href="#">
									<i class="fa fa-phone"></i>
									<span>081578933767</span>
								</a>
							</div>
						</div>
						<?php } else {?>

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

						<?php } ?>
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

<!-- slider_area_start -->
<div class="slider_area ">
	<div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-xl-6 col-md-6">
					<div class="illastrator_png">
						<img src="<?= base_url('assets/frontend/images/landing/banner/ilustration_utama.png') ?>"
							alt="">
					</div>
				</div>
				<div class="col-xl-6 col-md-6">
					<div class="slider_info">
						<h3>Saatnya <br> menjadi Tenaga Kerja <br> berjiwa Profesional </h3>
						<?php if(!$this->session->userdata('email') && (!$this->session->userdata('id_level') == 2 || !$this->session->userdata('id_level') == 2)){ ?>

						<a href="<?= base_url('auth') ?>" class="login boxed_btn">
							<span>Masuk | Daftar</span>
						</a>

						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- slider_area_end -->

<!-- about_area_start -->
<div class="about_area">
	<div class="container">
		<div class="row">
			<div class="col-xl-5 col-lg-6">
				<div class="single_about_info">
					<h3>Program pelatihan yang menarik!</h3>
					<br>
					<p>Sistem pembelajaran yang kami terapkan sangat mudah dimengerti dan dipelajari, karena tutorial
						pembelajran dapat berupa video praktik
						dan juga terdapat kuis yang menarik.
						<br>
						Sistem pembelajaran yang kami terapkan sangat mudah dimengerti dan dipelajari, karena tutorial
						pembelajran dapat berupa video praktik
						dan juga terdapat kuis yang menarik.
					</p>
					<a href="#" class="boxed_btn">Daftar Sekarang</a>
				</div>
			</div>
			<div class="col-xl-6 offset-xl-1 col-lg-6">
				<div class="about_tutorials">
					<div class="courses">
						<div class="inner_courses">
							<div class="text_info">
								<span><?= $jumlah_kurikulum ?></span>
								<p> Kurikulum</p>
							</div>
						</div>
					</div>
					<div class="courses-blue">
						<div class="inner_courses">
							<div class="text_info">
								<span><?= $jumlah_materi ?></span>
								<p> Materi</p>
							</div>

						</div>
					</div>
					<div class="courses-sky">
						<div class="inner_courses">
							<div class="text_info">
								<span><?= $jumlah_pengguna ?></span>
								<p> Pengguna</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- about_area_end -->

<!-- courses -->
<div class="popular_courses">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="section_title text-center mb-4">
					<h3>Program Pelatihan</h3>
					<p>Pilih program pelatihan yang anda inginkan dan tentunya semua pelatihan akan bermanfaat untuk
						anda.</p><br>
				</div>
			</div>
		</div>
		<!-- <div class="row">
			<div class="col-xl-12">
				<div class="course_nav">
					<nav>
						<ul class="nav" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
									aria-controls="home" aria-selected="true">Semua</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div> -->
	</div>
	<div class="all_courses mb-4">
		<div class="container">
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<div class="row justify-content-center align-items-center" id="program_pelatihan"> 
					<div class="row" id="program_pelatihan">
						<!-- data di app.js -->
					</div>
					<div class="col-xl-12">
						<div class="more_courses text-center">
							<a href="<?= base_url('pelatihan') ?>" class="boxed_btn_rev">Pelatihan Lainnya</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- courses-->

<!-- testimonial_area_start -->
<div class="testimonial_area testimonial_bg_1 overlay mt-2">
	<div class="testmonial_active owl-carousel">
		<?php foreach ($semua_testimoni as $detail) { ?>
			<div class="single_testmoial">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="testmonial_text text-center">
								<div class="author_img">
									<img src="<?= base_url("assets/backend/images/member/foto_profil/$detail->foto_profil") ?>" alt="">
								</div>
								<p><?= $detail->isi; ?></p>
								<span>- <?= $detail->nama; ?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<!-- testimonial_area_end -->

<!-- our_courses_start -->
<div class="our_courses">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section_title text-center mb-100">
					<h3 class="p-0">Spesial dari Kami</h3>
					<p>
						Jangan ragu untuk bergabung bersama kami karena kami punya hal spesial untuk Anda.
					</p>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-lg-6">
				<div class="single_course text-center">
					<div class="icon">
						<!-- <i class="flaticon-art-and-design"></i> -->
						<img src="<?= base_url('assets/') ?>frontend/images/landing/icon/premium.png" alt=""
							class="img-fluid">
					</div>
					<h3>Kualitas Premium</h3>
					<p>
						Pelatihan yang kami lakukan sesuai dengan kurikulum yang kami sesuaikan langsung dengan mitra
						kerja atau partner.
					</p>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-lg-6">
				<div class="single_course text-center">
					<div class="icon">
						<!-- <i class="flaticon-art-and-design"></i> -->
						<img src="<?= base_url('assets/') ?>frontend/images/landing/icon/harga.png" alt=""
							class="img-fluid">
					</div>
					<h3>Harga Terjangkau</h3>
					<p>
						Biaya yang cukup terjangkau, namung materi yang kami ajarkan tetap komplit dan mudah untuk di
						pelajari.
					</p>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-lg-6">
				<div class="single_course text-center">
					<div class="icon">
						<!-- <i class="flaticon-art-and-design"></i> -->
						<img src="<?= base_url('assets/') ?>frontend/images/landing/icon/sertifikat.png" alt=""
							class="img-fluid">
					</div>
					<h3>Serifikat Resmi</h3>
					<p>
						Setelah mengikuti pelatihan, peserta akan mendapatkan sertifikat dan
						lembaga kami telah diakui oleh Dinas Pendidikan dan Pemerintah.
					</p>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-lg-6">
				<div class="single_course text-center">
					<div class="icon">
						<!-- <i class="flaticon-art-and-design"></i> -->
						<img src="<?= base_url('assets/') ?>frontend/images/landing/icon/profesional.png" alt=""
							class="img-fluid">
					</div>
					<h3>Dididik Profesional</h3>
					<p>
						Kami mengajarkan pelatihan secara profesional, sungguh-sungguh, bagi yg mulai dari nol, akan
						dibantu hingga bisa.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- our_courses_end -->

<!-- Partner start -->
<div class="partner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section_title text-center mb-100">
					<h3 class="p-0">Partner LPKS</h3>
					<p>Berikut adalah Partner kami yang telah bekerjasama dengan baik dalam menunjang program pelatihan.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 partner_item">
				<div class="partner_active owl-carousel owl-theme" id="partner_lkp">
					<?php foreach ($detail_partner as $detail) { ?>
					<div class="item">
						<a href="<?= $detail->link_website_partner; ?>">
							<img class="img-fluid"
								src="<?= base_url("assets/frontend/images/landing/partner/$detail->gambar_partner ") ?>"
								alt="">
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Partner end -->
</div>