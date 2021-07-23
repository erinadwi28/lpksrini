<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Detail Transaksi Selesai</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li><a href="<?= base_url('list-transaksi-selesai') ?>">List Transaksi Selesai</a></li>
					<li class="active text-muted">Detail</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="progress">
	<div class="progress-bar" role="progressbar" style="width:10%; height:10px;" aria-valuenow="50" aria-valuemin="0"
		aria-valuemax="100"></div>
</div>

<div class="flash-data-foto" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<?php if ($this->session->flashdata('success')) : ?>
<?php endif; ?>

<?php foreach ($transaksi as $detail) { ?>

<div class="container mt-4" style="padding-right:30px; padding-left:30px;">
	<div class="main-body">
		<div class="row">
			<div class="col-lg-4">
				<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">

					<div class="card-body">
						<div class="mx-auto d-block">
							<a href="<?= base_url('assets/backend/images/member/bukti_pembayaran/') . $detail->bukti_pembayaran; ?>" data-gallery="mygallery" data-title="Bukti Bayar" data-toggle="lightbox">
								<img class="mx-auto d-block"
									src="<?= base_url('assets/backend/images/member/bukti_pembayaran/') . $detail->bukti_pembayaran; ?>"
									alt="Bukti Pembayaran" width="180">
							</a>
							<div class="location text-sm-center"><i class="fa fa-check-circle"></i> Verified</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
					<div class="card-body m-3">
						<div class="row">
							<table class="table-hover table-responsive">
								<tbody>
									<tr>
										<td width="150px"><b>Nama Member</b></td>
										<td width="20px">:</td>
										<td><?= $detail->nama; ?></td>
									</tr>
									<tr>
										<td><b>Email Member</b></td>
										<td>:</td>
										<td><?= $detail->email; ?></td>
									</tr>
									<tr>
										<td><b>Tanggal Beli</b></td>
										<td>:</td>
										<td><?= date('d/m/Y', strtotime($detail->tgl_transaksi));  ?></td>
									</tr>
									<tr>
										<td><b>Tanggal Aktif</b></td>
										<td>:</td>
										<td><?= date('d/m/Y', strtotime($detail->tgl_aktif));  ?></td>
									</tr>
									<tr>
										<td><b>Program Pelatihan</b></td>
										<td>:</td>
										<td><?= $detail->nama_pelatihan; ?></td>
									</tr>
									<tr>
										<td><b>Harga</b></td>
										<td>:</td>
										<td>Rp <?= number_format($detail->harga,0,',','.') ?></td>
									</tr>
									<tr>
										<td><b>Diskon</b></td>
										<td>:</td>
										<td>Rp <?= number_format($detail->diskon,0,',','.') ?></td>
									</tr>
									<tr>
										<td><b>Total</b></td>
										<td>:</td>
										<td>Rp <?= number_format($detail->total,0,',','.') ?></td>
									</tr>
									<tr>
										<td><b>Status Pelatihan</b></td>
										<td>:</td>
										<td><span class="badge badge-success"><i class="fa fa-check-circle"></i>
												<?= $detail->status; ?></span></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>

</div>
