<!-- Breadcrumb -->
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Testimoni</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li class="active text-muted">Testimoni</li>
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
<!-- detail_berita_start -->
<div class="isi_berita">
	<div class="container mt-4" style="padding-right:30px; padding-left:30px;">
		<div class="row">
			<!-- Picture -->
			<div class="col-lg-6">
				<center>
					<img class="img-fluid mt-4 mb-4"
						src="<?= base_url('assets/frontend/images/landing/testmonial/testimoni.png') ?>" alt="">
				</center>

			</div>

			<!-- Form Testimoni -->
			<div class="col-lg-6">
				<div class="card mb-4 border-0" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
						<?= form_open('member/tambah_testimoni', ['class' => 'testimoni']) ?>
					<div class="card-body ">
						<div class="pesan" style="display: none;"></div>
						<div class="form-group mt-2">
							<label for="isi" class=" form-control-label">Bagaimana penilaian Anda terhadap pelatihan di
								LPKS RINI ? Yuk berikan kesan dan pesanmu agar kami lebih baik kedepannya.</label>

							<textarea type="text" id="isi" name="isi"
								placeholder="ketik testimoni disini, maksimal 35 kata ya"
								class="form-control testimoni"></textarea>
							<input name="id_pengguna" id="id_pengguna" type="hidden"
								value=" <?= $pengguna['id_pengguna']; ?>">
						</div>
						<!-- button send -->
						<div class="text-center mt-4 mb-2">

							<button type="submit" class="btn btn-primary btn-confirmation">
								Kirim
							</button>
						</div>
					</div>
						<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- detail_berita_end -->

</div>
