
<script src="<?= base_url('assets/frontend/dashboard') ?>/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/js/main.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/vendors/chart.js/dist/Chart.bundle.min.js"></script>

<script src="<?= base_url('assets/frontend/dashboard') ?>/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/vendors/jszip/dist/jszip.min.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/vendors/pdfmake/build/vfs_fonts.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<script src="<?= base_url('assets/frontend/dashboard') ?>/js/dashboard.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/js/widgets.js"></script>
<script src="<?= base_url('assets/frontend/libraries/parsley/parsley.js') ?>"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/js/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/backend/js') ?>/app.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<!-- Sweet alert -->

<script>
        var tw = new Date();
        if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
        else(a = tw.getTime());
        tw.setTime(a);
        var tahun = tw.getFullYear();
        var hari = tw.getDay();
        var bulan = tw.getMonth();
        var tanggal = tw.getDate();
        var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
        var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus",
            "September", "Oktober", "Nopember", "Desember");
        document.getElementById("top-info-date").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] +
            " " + tahun + " ";
</script>

<!-- tambah data dan hapus data -->
<script>

// Testimoni sweet
(function($){
const flashData = $('.flash-data').data('flashdata');
	if (flashData) {
		
        Swal.fire({
							icon: 'success',
							title: 'Berhasil',
							text: flashData,
			type: 'success'
						});
	}
 
})(jQuery);
	
</script>

</body>

</html>
