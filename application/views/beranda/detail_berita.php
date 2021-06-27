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
									<li><a class="active" href="<?= base_url('berita') ?>">Berita</a></li>
									<li><a href="<?= base_url('galeri') ?>">Galeri</a></li>
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
	<h3>Berita</h3>
</div>
<!-- bradcam_area_end -->


<!-- detail_berita_start -->
<div class="isi_berita">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <article>
				<?php foreach ($detail_berita as $detail) { ?>
                    <header class="mb-4">
                        <h1 class="fw-bolder mb-1"><?= $detail->nama_berita ?></h1>
                        <div class="text-muted fst-italic mb-2"><?= $detail->tgl_berita ?></div>
                    </header>
                    <figure class="mb-4">
                        <img src="<?= base_url("assets/frontend/images/landing/berita/$detail->foto_berita") ?>" alt="" />
                    </figure>
                    <section class="mb-5">
                        <p class="fs-5 mb-4"><?= $detail->deskripsi_berita ?></p>
                    </section>
				<?php } ?>
                </article>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <div class="card mb-4 border-0">
                    <div class="card-header">
                        <h5 class="fw-bolder mb-0">Recent Post</h5>
                    </div>
                    <ul class="list-group list-group-flush">
					<?php foreach ($all_detail_berita as $detailAll) { ?>
                        <li class="list-group-item"><a href="<?= base_url("berita/detail/$detail->id_berita") ?>"><?= $detailAll->nama_berita ?></a></li>
					<?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- detail_berita_end -->