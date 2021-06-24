<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
	<nav class="navbar navbar-expand-sm navbar-default">
		<div class="navbar-header">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
				aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand" href="./"><img src="<?= base_url('assets/frontend/images/landing/logo_rini.png') ?>" alt="Logo"></a>
			<a class="navbar-brand hidden" href="./"><img src="<?= base_url('assets/frontend/images/landing/logo_rini.png') ?>" alt="Logo"></a>
		</div>

		<div id="main-menu" class="main-menu collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
					<a href="<?= base_url('dashboard') ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
				</li>
				<h3 class="menu-title">Menu</h3><!-- /.menu-title -->
				<li <?=$this->uri->segment(1) == 'katalog' || $this->uri->segment(1) == 'detail-katalog' ? 'class="active"' : '' ?>>
					<a href="<?= base_url('katalog') ?>"> <i class="menu-icon fa fa-files-o"></i>Katalog </a>
				</li>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Pelatihan Saya</a>
					<ul class="sub-menu children dropdown-menu">
						<li><a href="#" class="dropdown-toggle"> <i class="fa fa-check"></i> Pelatihan Aktif</a></li>
						<li><a href="#"><i class="fa fa-print"></i> Cetak Sertifikat</a></li>
					</ul>
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
			<div class="col-sm-7">
				<a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
				<div class="header-left">	
					<div class="dropdown for-notification">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-bell"></i>
							<span class="count bg-danger">5</span>
						</button>
					</div>
                    &nbsp; <span>| &nbsp;</span> <i class="fa fa-calendar top-info-date"></i>&nbsp; <span id="top-info-date" class="top-info-date"></span>

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
						<a class="nav-link" href="#"><i class="fa fa-user"></i> Profil Saya</a>
						<a class="nav-link" href="<?= base_url('auth/keluar') ?>"><i class="fa fa-power-off"></i> Keluar</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header-->

