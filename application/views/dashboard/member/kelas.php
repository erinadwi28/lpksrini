<!-- Breadcrumb -->
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Kelas</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
                <?php foreach ($kurikulum as $list) { ?>
					<li><a href="<?= base_url('pelatihan-aktif') ?>">Pelatihan Aktif</a></li>
					<li><a href="<?= base_url("member/kurikulum/$list->id_pelatihan") ?>">Kurikulum</a></li>
					<li class="active text-muted">Kelas</li>
                <?php } ?>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="progress">
	<div class="progress-bar" role="progressbar" style="width:15%; hight:5px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<div class="materi">
		<div class="container mt-4" style="padding-right:30px; padding-left:30px;">
		<div class="row">
			<!-- Side widgets-->
			<div class="col-lg-5">
                <div class="card mb-4 border-0" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
					<div class="card-header">
						<h5 class="fw-bolder mb-0 text-center">Keterangan</h5>
					</div>
					<div class="card-body">
                        <center>
						    <p>Pelajari materi yang telah di sampaikan, kemudian selesaikan kuis yang terdapat dibawah dengan baik!</p>
                        </center>
					</div>
				</div>
			</div>
			<div class="col-lg-7">
                <div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
                    <div class="card-body">
					    <?php foreach ($kurikulum as $list) { ?>
                        <h4 class="fw-bolder mb-4"><b>Materi <?= $list->unit_kompetensi; ?></b></h4>
					    <?php } ?>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
								<?php $no = 1;
                                foreach ($materi as $list) { ?>
                                    <tr>
                                        <td scope="row"><?= $no++ ?></td>
                                        <td><?= $list->nama_materi; ?></td>
                                        <td><?= $list->jenis_materi; ?></td>

                                        <?php if($list->jenis_materi == "Dokumen") {
                                            $link = $list->link_materi;  
                                        } else {
                                            $link = "-"; 
                                        } ?>

                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="<?= $link ?>"><button id="" type="button" class="btn btn-warning btn-sm">Lihat Materi</button></a>
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
		</div>
	</div>
</div>

<div class="content mt-0">
	<div class="row">
		<div class="container mt-1" style="padding-right:30px; padding-left:30px;">
			<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
                <div class="card-header">
						<h5 class="fw-bolder mb-0 text-center"><b>Kuis</b></h5>
                </div>
                
                <?php if($cek > 0) { ?>
                    <center><label class="form-label" style="color:green; margin:10px;">Anda sudah mengerim jawaban kuis!</label></center>   
                <?php } else { ?> 
                    <form id="kelas" enctype="multipart/form-data" action="<?= base_url('member/aksi_upload_jawaban') ?>" method="POST">
                        <div class="card-body">

                            <?php foreach ($kurikulum as $list) { ?>
                            <input type="hidden" class="form-control" name="id_kurikulum" id="id_kurikulum" value="<?= $list->id_kurikulum; ?>" >
                            <?php } ?>
                            <input type="hidden" class="form-control" name="id_pengguna" id="id_pengguna" value="<?= $pengguna['id_pengguna']; ?>" >
                            <input type="hidden" class="form-control" name="jumlah_soal" id="jumlah_soal" value="<?= count($kuis); ?>" >

                            <?php $no = 1;
                            foreach ($kuis as $list) { 
                                $i = $no++ ?>
                                <input type="hidden" class="form-control" name="id_kuis_<?= $i ?>" id="id_kuis_<?= $i ?>" value="<?= $list->id_kuis; ?>" >
                                <div class ="form-group" style="box-shadow: 0px 1px 10px 0px rgba(167, 164, 164, 0.3); border-radius:10px; margin-bottom:15px; padding:10px;">
                                    <label for="jawaban_<?= $i ?>" class="col-form-label"><span class="text-danger">* </span>
                                        <?= $list->pertanyaan; ?>
                                    </label>
                                    <textarea type="text" class="form-control" name="jawaban_<?= $i ?>" id="jawaban_<?=$i ?>" placeholder="Jawab" required></textarea>
                                </div>
                            <?php } ?>

                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-primary" type="submit"  id="simpan" value="Kirim Jawaban">
                        </div> 
                    </form>
                <?php } ?>  
			</div>
		</div>
	</div>
</div>	


</div>