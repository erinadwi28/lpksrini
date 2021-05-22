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
									<li><a href="#">Program <i class="ti-angle-down"></i></a>
										<ul class="submenu">
											<li><a href="">Pelatihan <i class="ti-angle-down"></i></a>
												<ul class="subsubmenu">
													<li>
													<li><a href="<?= base_url('program/tata_busana') ?>">Menjahit Tata Busana</a></li>
											</li>
											<li>
											<li><a href="<?= base_url('program/garment') ?>">Menjahit Garment</a></li>
									</li>
								</ul>
								</li>
								</ul>
								</li>
								<li><a href="#">Berita</a></li>
								<li><a href="#">Kontak</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 d-none d-lg-block">
						<div class="log_chat_area d-flex align-items-center">
							<a href="#test-form" class="login popup-with-form">
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

<!-- slider_area_start -->
<div class="slider_area ">
	<div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-xl-6 col-md-6">
					<div class="illastrator_png">
						<img src="<?= base_url('assets/frontend/images/landing/banner/ilustration_utama.png') ?>" alt="">
					</div>
				</div>
				<div class="col-xl-6 col-md-6">
					<div class="slider_info">
						<h3>Saatnya <br>
							menjadi Tenaga Kerja <br>
							berjiwa Profesional </h3>
						<a href="#" class="boxed_btn">Mulai Cari Pelatihan</a>
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
					<h3>Lebih dari 50 Tutorial <br>
						dari 20 Program</h3>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis praesentium nobis harum
						nihil! Dignissimos doloribus temporibus et ad, beatae neque, amet maiores deleniti molestiae
						odio minima a harum! Non, illum? </p>
					<a href="#" class="boxed_btn">Daftar Sekarang</a>
				</div>
			</div>
			<div class="col-xl-6 offset-xl-1 col-lg-6">
				<div class="about_tutorials">
					<div class="courses">
						<div class="inner_courses">
							<div class="text_info">
								<span>20+</span>
								<p> Program</p>
							</div>
						</div>
					</div>
					<div class="courses-blue">
						<div class="inner_courses">
							<div class="text_info">
								<span>300+</span>
								<p> Tutorial</p>
							</div>

						</div>
					</div>
					<div class="courses-sky">
						<div class="inner_courses">
							<div class="text_info">
								<span>500+</span>
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
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima natus asperiores corrupti
						nobis sint. <br> Recusandae a enim esse ut consequatur fugiat nemo suscipit temporibus
						voluptate
						laboriosam. Provident alias nulla quos..</p>
				</div>
			</div>
		</div>
		<div class="row">
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
		</div>
	</div>
	<div class="all_courses">
		<div class="container">
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="single_courses">
								<div class="thumb">
									<a href="#">
										<img src="<?= base_url('assets/frontend/images/landing/courses/7.jpg') ?>" alt="">
									</a>
								</div>
								<div class="courses_info">
									<h3><a href="#">Menjahit Tata Busana</a></h3>
									<div class="star_prise d-flex justify-content-between">
										<div class="star">
											<i class="flaticon-mark-as-favorite-star"></i>
											<span>(4.5)</span>
										</div>
										<div class="prise">
											<!-- <span class="offer">$89.00</span> -->
											<span class="active_prise">
												Rp. 15.000.000
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="single_courses">
								<div class="thumb">
									<a href="#">
										<img src="<?= base_url('assets/frontend/images/landing/courses/8.jpg') ?>" alt="">
									</a>
								</div>
								<div class="courses_info">
									<h3><a href="#">Menjahit Garmen</a></h3>
									<div class="star_prise d-flex justify-content-between">
										<div class="star">
											<i class="flaticon-mark-as-favorite-star"></i>
											<span>(4.5)</span>
										</div>
										<div class="prise">
											<!-- <span class="offer">$89.00</span> -->
											<span class="active_prise">
												Rp. 15.000.000
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="col-xl-12">
							<div class="more_courses text-center">
								<a href="#" class="boxed_btn_rev">Pelatihan Lainnya</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- courses-->

<!-- testimonial_area_start -->
<div class="testimonial_area testimonial_bg_1 overlay">
	<div class="testmonial_active owl-carousel">
		<div class="single_testmoial">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="testmonial_text text-center">
							<div class="author_img">
								<img src="<?= base_url('assets/frontend/images/landing/testmonial/2.jpg') ?>" alt="">
							</div>
							<p>
								"Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Fuga neque,
								repudiandae
								ipsam cumque inventore <br> facere eveniet maxime aut repellendus, quae porro
								ullam."
							</p>
							<span>- Erina Dwi Utami</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="single_testmoial">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="testmonial_text text-center">
							<div class="author_img">
								<img src="<?= base_url('assets/') ?>frontend/images/landing/testmonial/3.png" alt="" class="img-fluid">
							</div>
							<p>
								"Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Fuga neque,
								repudiandae
								ipsam cumque inventore <br> facere eveniet maxime aut repellendus, quae porro
								ullam."
							</p>
							<span>- Erwita Eka</span>
						</div>
					</div>
				</div>
			</div>
		</div>
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
					<p>Jangan ragu untuk bergabung bersama kami <br>
						karena kami punya hal spesial untuk Anda.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-3 col-md-6 col-lg-6">
				<div class="single_course text-center">
					<div class="icon">
						<!-- <i class="flaticon-art-and-design"></i> -->
						<img src="<?= base_url('assets/') ?>frontend/images/landing/icon/premium.png" alt="" class="img-fluid">
					</div>
					<h3>Kualitas Premium</h3>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit illo perferendis
						similique iste modi eius fugit natus quod porro quae.
					</p>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-lg-6">
				<div class="single_course text-center">
					<div class="icon">
						<!-- <i class="flaticon-art-and-design"></i> -->
						<img src="<?= base_url('assets/') ?>frontend/images/landing/icon/harga.png" alt="" class="img-fluid">
					</div>
					<h3>Harga Terjangkau</h3>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit illo perferendis
						similique iste modi eius fugit natus quod porro quae.
					</p>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-lg-6">
				<div class="single_course text-center">
					<div class="icon">
						<!-- <i class="flaticon-art-and-design"></i> -->
						<img src="<?= base_url('assets/') ?>frontend/images/landing/icon/sertifikat.png" alt="" class="img-fluid">
					</div>
					<h3>Serifikat Resmi</h3>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit illo perferendis
						similique iste modi eius fugit natus quod porro quae.
					</p>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-lg-6">
				<div class="single_course text-center">
					<div class="icon">
						<!-- <i class="flaticon-art-and-design"></i> -->
						<img src="<?= base_url('assets/') ?>frontend/images/landing/icon/profesional.png" alt="" class="img-fluid">
					</div>
					<h3>Dididik menjadi tenaga kerja profesional</h3>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit illo perferendis
						similique iste modi eius fugit natus quod porro quae.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- our_courses_end -->
