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
				<li class="active">
					<a href="#"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
				</li>
				<h3 class="menu-title">Menu</h3><!-- /.menu-title -->
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
					<ul class="sub-menu children dropdown-menu">
						<li><a href="#" class="dropdown-toggle"> <i class="fa fa-hand-o-right"></i> menu 1</a></li>
						<li><a href="#"><i class="fa fa-hand-o-right"></i> menu 2</a></li>
					</ul>
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
                    &nbsp; <span>| &nbsp;</span> <i class="fa fa-calendar top-info-date"></i>&nbsp; <span id="top-info-date" class="top-info-date"></span> <span class="top-info-date">&nbsp; | &nbsp;</span><span class="mb-0 ">Halo Admin <?= $pengguna['nama']; ?> !</span> 

				</div>
			</div>

			<div class="col-sm-5">
				<div class="user-area dropdown float-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">
						<img class="user-avatar rounded-circle" src="<?= base_url('assets/backend/images/admin/foto_profil/') . $pengguna['foto_profil']; ?>" alt="User Avatar">
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

	<div class="breadcrumbs">
		<div class="col-sm-4">
			<div class="page-header float-left">
				<div class="page-title">
					<h1>Dashboard</h1>
				</div>
			</div>
		</div>
		<div class="col-sm-8">
			<div class="page-header float-right">
				<div class="page-title">
					<ol class="breadcrumb text-right">
						<li class="active">Dashboard</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content mt-3">
		<div class="col-sm-6 col-lg-3">
			<div class="card text-white bg-flat-color-1">
				<div class="card-body pb-0">
					<div class="float-right">
						<a href="">
                            <div class="search"><i class="fa fa-search"></i></div>
                        </a>
					</div>
					<h4 class="mb-0">
						<span class="count">10</span>
					</h4>
					<p class="text-light">Members online</p>
				</div>
			</div>
		</div>
		<!--/.col-->
		<div class="col-sm-6 col-lg-3">
			<div class="card text-white bg-flat-color-1">
				<div class="card-body pb-0">
					<div class="float-right">
						<a href="">
                            <div class="search"><i class="fa fa-search"></i></div>
                        </a>
						
					</div>
					<h4 class="mb-0">
						<span class="count">10</span>
					</h4>
					<p class="text-light">Members online</p>
				</div>
			</div>
		</div>
		<!--/.col-->
		<div class="col-sm-6 col-lg-3">
			<div class="card text-white bg-flat-color-1">
				<div class="card-body pb-0">
					<div class="float-right">
						<a href="">
                            <div class="search"><i class="fa fa-search"></i></div>
                        </a>
						
					</div>
					<h4 class="mb-0">
						<span class="count">10</span>
					</h4>
					<p class="text-light">Members online</p>
				</div>
			</div>
		</div>
		<!--/.col-->
		<div class="col-sm-6 col-lg-3">
			<div class="card text-white bg-flat-color-1">
				<div class="card-body pb-0">
					<div class="float-right">
						<a href="">
                            <div class="search"><i class="fa fa-search"></i></div>
                        </a>
						
					</div>
					<h4 class="mb-0">
						<span class="count">10</span>
					</h4>
					<p class="text-light">Members online</p>
				</div>
			</div>
		</div>
		<!--/.col-->

		
	</div> <!-- .content -->
</div>
<!-- Right Panel -->
