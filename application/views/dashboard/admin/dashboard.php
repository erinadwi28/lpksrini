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
	<div class="progress-bar" role="progressbar" style="width:5%; height:5px;" aria-valuenow="25" aria-valuemin="0"
		aria-valuemax="100"></div>
</div>

<div class="content mt-3" style="padding-right:15px; padding-left:15px;">
	<!-- Jumlah member -->
	<div class="col-sm-6 col-lg-3">
		<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05); padding:10px 5px 15px 5px;">
			<div class="card-body pb-0">
				<div class="float-right">
					<a href="<?= base_url('list-data-member') ?>">
						<div class="search"><i class="fa fa-search"></i></div>
					</a>
				</div>
				<p>Member</p>
				<h1 class="mb-0">
					<?php foreach ($member as $list) { ?>
						<span class="count"><?= $list->jumlah_member; ?></span>
					<?php } ?>
				</h1>
			</div>
		</div>
	</div>
	<!-- Jumlah program pelatihan -->
	<div class="col-sm-6 col-lg-3">
		<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05); padding:10px 5px 15px 5px;">
			<div class="card-body pb-0">
				<div class="float-right">
					<a href="<?= base_url('list-data-voucher') ?>">
						<div class="search"><i class="fa fa-search"></i></div>
					</a>
				</div>
				<p>Voucher</p>
				<h1 class="mb-0">
					<?php foreach ($voucher as $list) { ?>
						<span class="count"><?= $list->jumlah_voucher; ?></span>
					<?php } ?>
				</h1>
			</div>
		</div>
	</div>

	<!-- Jumlah transaksi belum acc -->
	<div class="col-sm-6 col-lg-3">
		<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05); padding:10px 5px 15px 5px;">
			<div class="card-body pb-0">
				<div class="float-right">
					<a href="<?= base_url('list-transaksi-masuk') ?>">
						<div class="search"><i class="fa fa-search"></i></div>
					</a>
				</div>
				<p>Transaksi Masuk</p>
				<h1 class="mb-0">
					<?php foreach ($transaksi_masuk as $list) { ?>
						<span class="count"><?= $list->jumlah_transaksi_masuk; ?></span>
					<?php } ?>
				</h1>
			</div>
		</div>
	</div>

	<!-- Jumlah transaksi sudah acc -->
	<div class="col-sm-6 col-lg-3">
		<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05); padding:10px 5px 15px 5px;">
			<div class="card-body pb-0">
				<div class="float-right">
					<a href="<?= base_url('list-transaksi-selesai') ?>">
						<div class="search"><i class="fa fa-search"></i></div>
					</a>
				</div>
				<p>Transaksi Selesai</p>
				<h1 class="mb-0">
					<?php foreach ($transaksi_selesai as $list) { ?>
						<span class="count"><?= $list->jumlah_transaksi_selesai; ?></span>
					<?php } ?>
				</h1>
			</div>
		</div>
	</div>
</div>
<div class="content mt-2" style="padding-right:15px; padding-left:15px;">
	<!-- Jumlah voucher -->
	<div class="col-sm-6 col-lg-3">
		<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05); padding:10px 5px 15px 5px;">
			<div class="card-body pb-0">
				<div class="float-right">
					<a href="<?= base_url('list-data-pelatihan') ?>">
						<div class="search"><i class="fa fa-search"></i></div>
					</a>
				</div>
				<p>Program Pelatihan</p>
				<h1 class="mb-0">
					<?php foreach ($pelatihan as $list) { ?>
						<span class="count"><?= $list->jumlah_pelatihan; ?></span>
					<?php } ?>
				</h1>
			</div>
		</div>
	</div>
	<!-- Jawaban Kuis -->
	<div class="col-sm-6 col-lg-3">
		<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05); padding:10px 5px 15px 5px;">
			<div class="card-body pb-0">
				<div class="float-right">
					<a href="<?= base_url('pelatihan-aktif') ?>">
						<div class="search"><i class="fa fa-search"></i></div>
					</a>
				</div>
				<p>Jawaban Kuis</p>
				<h1 class="mb-0">
					<span class="count">10</span> belum fix
				</h1>
			</div>
		</div>
	</div>

	<!-- Nilai -->
	<div class="col-sm-6 col-lg-3">
		<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05); padding:10px 5px 15px 5px;">
			<div class="card-body pb-0">
				<div class="float-right">
					<a href="<?= base_url('pelatihan-aktif') ?>">
						<div class="search"><i class="fa fa-search"></i></div>
					</a>
				</div>
				<p>Nilai</p>
				<h1 class="mb-0">
					<span class="count">10</span> belum fix
				</h1>
			</div>
		</div>
	</div>

</div>


</div>
<!-- Right Panel -->
