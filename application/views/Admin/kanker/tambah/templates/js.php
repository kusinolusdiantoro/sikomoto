<!-- jQuery -->
<script src="<?= base_url('assets/')?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/')?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('assets/')?>plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url('assets/')?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url('assets/')?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/')?>plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url('assets/')?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url('assets/')?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/')?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?= base_url('assets/')?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="<?= base_url('assets/')?>plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?= base_url('assets/')?>plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/')?>dist/js/adminlte.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?= base_url('assets/')?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/')?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/')?>dist/js/demo.js"></script>
<!-- Page specific script -->
<!-- Admin/tambahKanker.php (View) -->
<!-- Admin/tambahKanker.php (View) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#no_rm').on('input', function() {
                var no_rm = $(this).val();
                $.ajax({
                    url: '<?php echo base_url('Admin/getDataForNoRM'); ?>',
                    method: 'POST',
                    data: { no_rm: no_rm },
                    dataType: 'json',
                    success: function(data) {
                        $('#no_registrasi').val(data.result.no_registrasi);
                        $('#no_epid').val(data.result.no_epid);
                        $('#nik_pasien').val(data.result.nik_pasien);
                        $('#nama').val(data.result.nama);
                        $('#tempat_lahir').val(data.result.tempat_lahir);
                        $('#tanggal_lahir').val(data.result.tanggal_lahir);
                        $('#usia_awal').val(data.result.usia_awal);
                        $('#jk').val(data.result.jk);
                        $('#agama').val(data.result.agama);
                        $('#nikah').val(data.result.nikah);
                        $('#suku').val(data.result.suku);
                        $('#no_telp').val(data.result.no_telp);
                        $('#pekerjaan').val(data.result.pekerjaan);
                        $('#alamat').val(data.result.alamat);
                        $('#keterangan').val(data.result.keterangan);
                    }
                });
            });
        });
    </script>

<script>
  $(document).ready(function() {
    var url = window.location.href;
    var pattern = /\/Admin\/tambahKanker\/(\d+)/; // \d+ adalah ekspresi reguler untuk mencocokkan digit satu atau lebih
    var match = url.match(pattern);

    if (match) {
        var id_pasien = match[1]; // Mengambil nilai ID pendaftaran dari URL
        // Lakukan request untuk mengisi input NIK Ibu dengan data dari tabel pendaftaran
        $.ajax({
            url: '<?php echo base_url('Admin/getDataByPasienID/'); ?>' + id_pasien,
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                        $('#no_rm').val(data.result.no_rm);
                        $('#no_registrasi').val(data.result.no_registrasi);
                        $('#no_epid').val(data.result.no_epid);
                        $('#nik_pasien').val(data.result.nik_pasien);
                        $('#nama').val(data.result.nama);
                        $('#tempat_lahir').val(data.result.tempat_lahir);
                        $('#tanggal_lahir').val(data.result.tanggal_lahir);
                        $('#usia_awal').val(data.result.usia_awal);
                        $('#jk').val(data.result.jk);
                        $('#agama').val(data.result.agama);
                        $('#nikah').val(data.result.nikah);
                        $('#suku').val(data.result.suku);
                        $('#no_telp').val(data.result.no_telp);
                        $('#pekerjaan').val(data.result.pekerjaan);
                        $('#alamat').val(data.result.alamat);
                        $('#keterangan').val(data.result.keterangan);
                    
            }
        });
    }
});

</script>



