<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
	<nav class="navbar navbar-expand-sm navbar-default">
		<div class="navbar-header">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
				aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars"></i>
			</button>
			<div class="navbar-brand">
				<a href="#"><img src="<?= base_url('assets/frontend/images/landing/logo_rini.png') ?>" alt="Logo"></a>
			</div>
			<a class="navbar-brand hidden" href="#><img src="<?= base_url('assets/frontend/images/landing/logo_rini.png') ?>" alt="Logo"></a>
		</div>

		<div id="main-menu" class="main-menu collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<h3 class="menu-title">Main</h3><!-- /.menu-title -->

				<li <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
					<a href="<?= base_url('dashboard') ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
				</li>
				<li <?=$this->uri->segment(1) == 'katalog' || $this->uri->segment(1) == 'detail-katalog' ? 'class="active"' : '' ?>>
					<a href="<?= base_url('katalog') ?>"> <i class="menu-icon fa fa-files-o"></i>Katalog </a>
				</li>
				<li <?=$this->uri->segment(1) == 'pelatihan-aktif' || $this->uri->segment(1) == 'kurikulum' || $this->uri->segment(1) == 'kelas' ? 'class="active"' : '' ?>>
					<a href="<?= base_url('pelatihan-aktif') ?>"> <i class="menu-icon fa fa-laptop"></i>Pelatihan Saya</a>
				</li>
					
				<li <?=$this->uri->segment(1) == 'sertifikat' ? 'class="active"' : '' ?>>
					<a href="<?= base_url('sertifikat') ?>"><i class="menu-icon fa fa-print"></i> Cetak Sertifikat</a>
				</li>

				<li <?=$this->uri->segment(1) == 'testimoni' ? 'class="active"' : '' ?>>
					<a href="<?= base_url('testimoni') ?>"> <i class="menu-icon fa fa-comment-o"></i>Testimoni </a>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
</aside>
<!-- Left Panel -->

<!-- Right Panel -->
<div id="right-panel" class="right-panel">

	<!-- Header-->
	<header id="header" class="header">
		<div class="header-menu">
			<div class="top_tanggal">
				<div class="col-sm-7">
					<a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
					<div class="header-left">	
						<i class="fa fa-calendar top-info-date" style="padding-top:8px;"></i>&nbsp; <span id="top-info-date" class="top-info-date"></span>

					</div>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="user-area dropdown float-right">
					<span class="username">Halo <?= $pengguna['nama']; ?> !</span>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">
						<img class="user-avatar rounded-circle" src="<?= base_url('assets/backend/images/member/foto_profil/') . $pengguna['foto_profil']; ?>" alt="User Avatar">
					</a>

					<div class="user-menu dropdown-menu">
						<a class="nav-link" href="<?= base_url('detail-profil') ?>"><i class="fa fa-user"></i> Profil Saya</a>
						<a class="nav-link" href="<?= base_url('auth/keluar') ?>"><i class="fa fa-power-off"></i> Keluar</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header-->

