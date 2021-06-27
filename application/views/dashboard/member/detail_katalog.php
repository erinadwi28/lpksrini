<!-- Breadcrumb -->
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Detail Katalog</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li><a href="<?= base_url('katalog') ?>">Katalog</a></li>
					<li class="active text-muted">Detail Katalog</li>
				</ol>
			</div>
		</div>
	</div>
</div>
			
<div class="progress">
	<div class="progress-bar" role="progressbar" style="width:10%; height:5px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
			
<!-- detail_berita_start -->
<div class="isi_berita">
	<div class="container mt-1" style="padding:30px;">
		<div class="row">

			<div class="col-sm-12">
<?php foreach ($transaksi as $detail) { ?>
		<?php if($detail->status == "aktif") {?>
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> &nbsp; Anda sudah melakukan pembelian pelatihan ini.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
				<?php } ?>
			<?php } ?>

            </div>
			
			<?php foreach ($detail_pelatihan as $detail) { ?>
			<div class="col-lg-7">
				<article>
					<header class="mb-4">
						<h2 class="fw-bolder mb-1"><?= $detail->nama_pelatihan ?></h2>
					</header>
					<figure class="mb-4 ">
                    <img class="detail_image" src="<?= base_url("assets/frontend/images/landing/courses/$detail->gambar_pelatihan") ?>" alt="">
					</figure>
					<section class="mb-3">
						<p class="fs-5 mb-1"><?= $detail->deskripsi ?></p>
					</section>
					<section class="mb-5">
						<h5 class="fw-bolder mb-1">Kurikulum</h5>
                        <img src="<?= base_url("assets/frontend/images/landing/kurikulum/$detail->kurikulum") ?>" alt="">  
					</section>
				</article>
			</div>
			<?php } ?>
			<!-- Side widgets-->
			<?php foreach ($transaksi as $detail) { ?>
		<?php if($detail->status != "aktif") {?>
			<div class="col-lg-5">
				<div class="card mb-4 border-0" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
					<div class="card-header">
						<h5 class="fw-bolder mb-0 text-center">Gabung Sekarang</h5>
					</div>
					<div class="card-body">
						<!-- benefit -->
						<h6 class="mb-2">Keuntungan</h6>
						<table>
							<tr>
								<td width="240px" class="text-muted">Waktu Akses</td>
								<td>Selamanya</td>
							</tr>
							<tr>
								<td class="text-muted">Kurikulum & Materi</td>
								<td>Tersedia</td>
							</tr>
							<tr>
								<td class="text-muted">Sertifikat</td>
								<td>Tersedia</td>
							</tr>
						</table>

						<!-- payment -->
						<?php foreach ($detail_pelatihan as $detail) { ?>
						<h6 class="mb-2 mt-3">Detail Pembayaran</h6>
						<?= form_open('member/beli', ['class' => 'form_beli']) ?>
						<div class="pesan" style="display: none;"></div>
						<table>
							<tr>
								<td width="240px" class="text-muted">Harga</td>
								<td><input class="form-control" name="harga" id="harga" type="text" value="<?= $detail->harga?>">
								</td>
							</tr>
							<tr>
								<td width="240px" class="text-muted">Diskon</td>
								<td><input class="form-control" name="diskon" id="diskon" type="text" value="2000"></td>
							</tr>
							<tr>
								<td class="text-muted">Total Transfer</td>
								<td><input class="form-control" name="total" id="total" type="text" value=""></td>
								
							</tr>
							<tr>
							<td><input name="id_pelatihan" id="id_pelatihan" type="hidden" value="<?= $detail->id_pelatihan?>" ></td>
							<td><input name="id_pengguna" id="id_pengguna" type="hidden" value=" <?= $pengguna['id_pengguna']; ?>" ></td>
							</tr>
						</table>
						
						
						<div>
							<div class="text-center mt-3 mb-3">
							<button type="submit" class="btn btn-primary btn-buy">
							Beli Pelatihan
							</button>
							</div>
						</div>

						<?= form_close() ?>
						<?php } ?>

						<div>
							<!-- transfer -->
							<h6 class="mb-2 mt-3">Transfer Pembayaran</h6>
							<img class="bank" src="<?= base_url('assets/frontend/dashboard/images/bank.png') ?>" alt="">
							<p class="mt-1">atas nama LPKS RINI<br><b>1050848169</b></p>
							<!-- button confirm -->
							<div class="text-center mt-3 mb-3">
								<a class="btn btn-primary btn-confirmation"
									href="https://api.whatsapp.com/send?phone=6285713609299&text=Halo,%20Saya%20sudah%20melakukan%20pembayaran%20pelatihan.%20Berikut%20saya%20lampirkan%20foto%20bukti%20pembayaran:">Konfirmasi
									Pembayaran</a>
							</div>
						</div>
						


					</div>
				</div>
                <div class="card mb-4 border-0" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
					<div class="card-header">
						<h5 class="fw-bolder mb-0 text-center">Informasi Penting</h5>
					</div>
					<div class="card-body">
						<!-- info -->
						<p>Proses konfirmasi pembayaran pelatihan akan membutuhkan waktu sekitar 30 menit (dari pesan WhatsApp dikirim). Mohon menunggu dengan sabar dan terima kasih.</p>
						
					</div>
				</div>
				</div>
				<?php } elseif($detail->status == "aktif") { ?>
					<div class="col-lg-5">
					 <div class="card mb-4 border-0" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
					<div class="card-header">
						<h5 class="fw-bolder mb-0 text-center">Informasi Penting</h5>
					</div>
					<div class="card-body">
						<!-- info -->
						<p>Selesaikan pembelajaran di menu Pelatihan Saya dan dapatkan sertifikatnya.</p>
						
					</div>
				</div>
					</div>
				<?php }  ?>
				<?php }  ?>
			
		</div>
	</div>
</div>
<!-- detail_berita_end -->

</div>
