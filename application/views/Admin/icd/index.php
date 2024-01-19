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
              <li class="breadcrumb-item"><a href="<?= base_url('Admin')?>">Home</a></li>
              <li class="breadcrumb-item active">Daftar User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card" style="box-shadow: 2px 4px 6px 3px;">
              <div class="card-header">
                <h3 class="card-title" style="font-weight:bold;" >Table Daftar User</h3>
                <div class="card-tools">
                  <a class="btn btn-primary btn-sm" href="<?= base_url('Admin/tambahUser')?>" type="button" onClik="return confirm('apakah anda yakin ingin menghapus data ini?')">
                        <i class="fas fa-plus"> </i> Tambah Data
                    </a>
                </div>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                        <?php if (!empty($user)) : ?>
                            <?php $counter = 1; ?>
                            <?php foreach ($user as $row) : ?>
                                <tr>
                                    <td><?php echo $counter; ?></td>
                                    <td><?php echo $row->nama; ?></td>
                                    <td><?php echo $row->tanggal_lahir; ?></td>
                                    <td><?php echo $row->username; ?></td>
                                    <td><?php echo $row->password; ?></td>
                                    <td> 
                          <a class="btn btn-primary btn-sm" href="<?php echo base_url('Admin/updateUser/'.$row->id_user); ?>" onclick="return confirm('Apakah Anda yakin ingin mengedit data ini?')">
                              <i class="fas fa-pencil-alt"></i> Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="<?php echo base_url('Admin/deleteUser/'.$row->id_user); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                              <i class="fas fa-trash"></i> Delete
                          </a>
                      </td>
                  </tr>
                  <?php $counter++; ?>
              <?php endforeach; ?>
          <?php else : ?>
              <tr>
                  <td colspan="10">Data tidak ditemukan</td>
              </tr>
          <?php endif; ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

</div>
<!-- ./wrapper -->

</body>
</html>
