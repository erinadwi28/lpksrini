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
					<li><a href="<?= base_url('pelatihan-aktif') ?>">Pelatihan Aktif</a></li>
					<li><a href="<?= base_url('kurikulum') ?>">Kurikulum</a></li>
					<li class="active text-muted">Kelas</li>
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
                        <h4 class="fw-bolder mb-4"><b>Materi Komunikasi</b></h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Modul 1 KOMUNIKASI</td>
                                        <td>Document</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href=""><button id="" type="button" class="btn btn-warning btn-sm">Lihat Materi</button></a>
                                            </div>
                                        </td>
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

<div class="content mt-0">
	<div class="row">
		<div class="container mt-1" style="padding-right:30px; padding-left:30px;">
			<div class="card" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);">
                <div class="card-header">
						<h5 class="fw-bolder mb-0 text-center"><b>Kuis</b></h5>
                </div>
                <form id="" novalidate="novalidate" enctype="multipart/form-data" accept-charset="utf-8">
                    <input type="hidden" name="" class="form-control" id="" >
                    <div class="card-body">
                        <div class ="form-group">

                            <div style="box-shadow: 0px 1px 10px 0px rgba(167, 164, 164, 0.3); border-radius:10px; margin-bottom:15px; padding:10px;">
                                <label for="" class="col-form-label"><span class="text-danger">* </span>
                                    Jelaskan pengertian komunikasi dan pengertian prima!
                                </label>
                                <textarea type="text" name="" class="form-control" id=""  placeholder="Jawab"></textarea>
                            </div>
                            
                            <div style="box-shadow: 0px 1px 10px 0px rgba(167, 164, 164, 0.3); border-radius:10px; margin-bottom:15px; padding:10px;">
                                <label for="" class="col-form-label"><span class="text-danger">* </span>
                                    Jelaskan hubungan pelayanan dengan karakter pelanggan!
                                </label>
                                <textarea type="text" name="" class="form-control" id=""  placeholder="Jawab"></textarea>
                            </div>

                            <div style="box-shadow: 0px 1px 10px 0px rgba(167, 164, 164, 0.3); border-radius:10px; margin-bottom:15px; padding:10px;">
                                <label for="" class="col-form-label"><span class="text-danger">* </span>
                                    Jelaskan bagaimana cara mengatasi kesalah pahaman antar budaya!
                                </label>
                                <textarea type="text" name="" class="form-control" id=""  placeholder="Jawab"></textarea>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-primary" type="submit"  id="" value="Kirim Jawaban">
                    </div> 
                </form>
			</div>
		</div>
	</div>
</div>	


</div>