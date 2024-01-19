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
<script>
    // Mendapatkan tahun saat ini
    var currentYear = new Date().getFullYear();
    // Mendapatkan dua digit terakhir dari tahun saat ini
    var yearDigits = ('' + currentYear).slice(-2);
    // Inisialisasi counter untuk angka terusan
    var counter = 1;

    // Fungsi untuk mengisi nomor rekam medis
    function isiNomorRekamMedis() {
    // Check if the counter is stored in local storage
    var counter = localStorage.getItem('counter');

    // If the counter is not present, set it to 1
    if (!counter) {
        counter = 1;
    } else {
        // If the counter is present, parse it as an integer
        counter = parseInt(counter);
        // Increment the counter for the next patient
        counter++;
    }

    // Mengonversi counter menjadi string dengan format 4 digit (0001, 0002, dst.)
    var counterString = counter.toString().padStart(4, '0');
    // Menggabungkan tahun dan angka terusan untuk membentuk nomor rekam medis
    var noRM = yearDigits + counterString;

    // Memasukkan nomor rekam medis ke dalam input
    document.querySelector('input[name="no_rm"]').value = noRM;

    // Menyimpan nilai counter di local storage
    localStorage.setItem('counter', counter);
}

// Memanggil fungsi isiNomorRekamMedis saat halaman dimuat untuk mengisi nomor rekam medis pertama kali
isiNomorRekamMedis();

</script>

<script>
    // Mendapatkan tanggal, bulan, dan tahun saat ini
    var today = new Date();
    var year = today.getFullYear();
    var month = ('0' + (today.getMonth() + 1)).slice(-2); // Menambahkan '0' di depan jika bulan < 10
    var day = ('0' + today.getDate()).slice(-2); // Menambahkan '0' di depan jika tanggal < 10

    // Menggabungkan tahun, bulan, dan tanggal untuk membentuk nomor registrasi
    var noRegistrasi = year + month + day;

    // Memasukkan nomor registrasi ke dalam input
    document.querySelector('input[name="no_registrasi"]').value = noRegistrasi;
</script>