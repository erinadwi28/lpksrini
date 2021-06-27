<!-- Breadcrumb -->
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Kurikulum</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li><a href="<?= base_url('pelatihan-aktif') ?>">Pelatihan Aktif</a></li>
					<li class="active text-muted">Kurikulum</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="progress">
	<div class="progress-bar" role="progressbar" style="width:10%; hight:5px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<!-- Materi Kurikulum -->		
<div class="content mt-3">
	<div class="row">
		<div class="container mt-1" style="padding-right:30px; padding-left:30px;">
			<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
				<div class="card-body">
					<?php foreach ($pelatihan as $list) { ?>
					<h4 class="fw-bolder mb-4"><b>Kurikulum <?= $list->nama_pelatihan; ?></b></h4>
					<?php } ?>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
								<th scope="col">No</th>
								<th scope="col">Unit Kompetensi</th>
								<th scope="col">Bobot</th>
								<th scope="col">Nilai</th>
								<th scope="col">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$no = 1;
								foreach ($kurikulum as $list) { ?>
								<tr>
									<td scope="row"><?= $no++ ?></td>
									<td><?= $list->unit_kompetensi; ?></td>
									<td><?= $list->bobot; ?> Jam</td>
									
									<?php $x=1;
									foreach ($nilai as $n) {
										$x++;
										if($list->id_kurikulum === $n->id_kurikulum ){
											$scor[$x] = $n->nilai;
										}
									}
									$a = $x+1;
									for($i=count($nilai); $i<count($kurikulum); $i++){
										$scor[$a++] = '-';
									}
									?>
									<td><?= $scor[$no]; ?></td>
									<td>
										<div class="btn-group" role="group">
											<a href="<?= base_url("member/kelas/$list->id_kurikulum") ?>">
												<button id="" type="button" class="btn btn-danger btn-sm">Materi</button>
											</a>
										</div>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div><!-- .animated -->
</div>	
<!-- End -->

</div>