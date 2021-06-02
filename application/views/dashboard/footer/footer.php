<script src="<?= base_url('assets/frontend/dashboard') ?>/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/js/main.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/vendors/chart.js/dist/Chart.bundle.min.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/js/dashboard.js"></script>
<script src="<?= base_url('assets/frontend/dashboard') ?>/js/widgets.js"></script>
<script src="<?= base_url('assets/frontend/libraries/parsley/parsley.js') ?>"></script>
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
</body>

</html>
