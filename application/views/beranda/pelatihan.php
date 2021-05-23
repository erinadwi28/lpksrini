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
									<li><a class="active" href="<?= base_url('pelatihan') ?>">Program</a></li>
									<li><a href="#">Berita</a></li>
									<li><a href="<?= base_url('gallery') ?>">Galery</a></li>
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

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg overlay2">
	<h3>Program Pelatihan</h3>
</div>
<!-- bradcam_area_end -->


<!-- courses -->
<div class="popular_courses">
	<div class="all_courses">
		<div class="container">
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="single_courses">
								<div class="thumb">
									<img src="<?= base_url('assets/frontend/images/landing/courses/7.jpg') ?>" alt="">
								</div>
								<div class="courses_info">
									<h3><a href="<?= base_url('pelatihan/detail') ?>">Menjahit Tata Busana</a></h3>
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
									<img src="<?= base_url('assets/frontend/images/landing/courses/8.jpg') ?>" alt="">
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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- courses-->

