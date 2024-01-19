<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIKOMOTO | Log in</title>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/')?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/')?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/')?>dist/css/adminlte.min.css">

<style>
.footer {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  background-color: rgba(240, 240, 240, 0.3); /* Warna latar belakang dengan opacity 50% */
  text-shadow: 0 0 8px rgba(0, 0, 0, 0.5); /* Efek blur di sini */
  padding: 5px;
  overflow: hidden;
}

.marquee {
  font-size: 15px;
  font-weight: bold;
  color: black;
}

</style>

</head>
<body class="hold-transition login-page" style="background-image: url('/simlihat/assets/img/bg3.jpg'); background-size: 100%; backdrop-filter: blur(2px); ">

<div class="login-box" style="border-radius: 15px; box-shadow: 4px 5px 6px 6px">
  <!-- /.login-logo -->
  <div class="card" style="border-radius: 15px; box-shadow: 4px 5px 6px 6px">
    <div class="card-body login-card-body" style="border-radius: 15px ">
      <h2 class="text-center" style="color: black; font-weight:bold"><b>SIKOMOTO</b></h2>
      <div class="text-center mb-2">
        <img src="<?= base_url('assets/img/poltek.png')?>"  alt="login" style="width: 100px;">
      </div>
      <h5 class="text-center mb-3" style="color: black; font-weight:bold">Sistem Informasi Kode Morfologi dan Topografi Kasus Neoplasma pada Sistem Pernapasan</h5>

      <?php if ($this->session->flashdata('message')) : ?>
        <!-- Tampilkan flash message yang disimpan -->
        <div id="flash-message">
            <?= $this->session->flashdata('message') ?>
        </div>
    <?php endif; ?>

      <form action="<?= base_url('Auth/CekLogin')?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!-- <div>
          <p class="text-center">Belum punya akun?<a href="<?= base_url('Auth/regis')?>"> daftar sekarang</a></p>
        </div> -->
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block" id="tombol">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<!-- jQuery -->
<script src="<?= base_url('assets/')?>plugins/jquery/jquery.min.js"></script>

<!-- Script JavaScript -->
<script>
    // Pastikan kode JavaScript ini berada di bawah penggunaan jQuery
    $(document).ready(function() {
        // Menghilangkan pesan setelah 3 detik (3000 milidetik)
        setTimeout(function() {
            $('#flash-message').fadeOut('slow', function() {
                $(this).remove(); // Menghapus elemen setelah selesai fade out
            });
        }, 3000);
    });
</script>

<!-- Selanjutnya adalah script lainnya -->
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/')?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/')?>dist/js/adminlte.min.js"></script>

</body>
</html>
