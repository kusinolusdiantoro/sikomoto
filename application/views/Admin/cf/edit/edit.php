<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-weight: bold;">SIABEKA</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Admin/user')?>">Home</a></li>
              <li class="breadcrumb-item active">Update Data User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title" style="font-weight: bold;">FORM UPDATE DATA USER</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
           <!--    <form class="form-horizontal"> -->
             <?php echo form_open_multipart('Admin/doUpdateUser') ?>
                <div class="card-body">
                  <?php foreach ($user as $u) : ?>
                    <input type="hidden" value="<?php echo $u->id_user ?>" name="id_user">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan nama lengkap" name="nama" value="<?php echo $u->nama ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputEmail3" placeholder="Masukkan nama lengkap" name="tanggal_lahir" value="<?php echo $u->tanggal_lahir ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan username" name="username" value="<?php echo $u->username ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan password" name="password" value="<?php echo $u->password ?>">
                        </div>
                    </div>

                <?php endforeach; ?>
                </div>
                <!-- /.form-group -->
              </div>
            </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?= base_url('Admin/user')?>"><button type="button" class="btn btn-warning">Cancel</button></a>
                </div>
                <!-- /.card-footer -->
              </form>
            <!-- </form> -->
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Form Element sizes -->
       
            <!-- /.card -->


            <!-- /.card -->

            <!-- general form elements disabled -->
  
            <!-- /.card -->
            <!-- general form elements disabled -->

            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <style>
    .content-wrapper {
  overflow-y: auto;
  max-height: calc(100vh - 200px); /* Sesuaikan tinggi maksimal sesuai kebutuhan */
  /* Jika menggunakan max-height, pastikan memberikan nilai yang sesuai agar tidak melebihi tinggi layar */
}

  </style>
</body>
</html>
