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
					<li class="active text-muted">Dashboard</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<?php if ($this->session->flashdata('success')) : ?>
<?php endif; ?>

<div class="progress">
	<div class="progress-bar" role="progressbar" style="width:5%; height:5px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<div class="content mt-3" style="padding-right:15px; padding-left:15px;"> 
	<!-- Pelatihan aktif -->
	<div class="col-sm-6 col-lg-3">
		<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05); padding:10px 5px 50px 5px;">
			<div class="card-body pb-0">
				<div class="float-right">
					<a href="">
						<div class="search"><i class="fa fa-search"></i></div>
					</a>
				</div>
				<p>Pelatihan</p>
				<h1 class="mb-0">
					<span class="count">10</span>
				</h1>
			</div>
		</div>
	</div>
	<!-- Jumlah sertifikat -->
	<div class="col-sm-6 col-lg-3">
		<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05); padding:10px 5px 50px 5px;">
			<div class="card-body pb-0">
				<div class="float-right">
					<a href="">
						<div class="search"><i class="fa fa-search"></i></div>
					</a>
				</div>
				<p>Sertifikat</p>
				<h1 class="mb-0">
					<span class="count">10</span>
				</h1>
			</div>
		</div>
	</div>

	<div class="col-md-6 kartu">
		<div class="feed-box text-center">
			
				<div class="card-box">
                    <div class="inner">
                        <h5> Kartu Peserta Didik </h5>
                        <h3> 001/PST/LKPRN/08/2021 </h3>
                        <h6> Rizkista Ichsan Harnato </h6>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
		</div>
	</div>
</div> 

<!-- .content -->
<div class="content mt-3">
	<div class="row">
		<div class="container mt-1" style="padding-right:30px; padding-left:30px;">
			<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
				<div class="card-body">
					<h4>Progres Belajar Saya</h4>
					<hr>

					<h6>Menjahit Tata Busana</h6>
					<div class="progress mb-2 mt-2" style="height:20px;">
						<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar"
							style="width:50%; height:20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>	

</div>
	<!-- Right Panel -->
