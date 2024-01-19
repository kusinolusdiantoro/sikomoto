<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-weight: bold;">SIKOMOTO</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Admin')?>">Home</a></li>
              <li class="breadcrumb-item active">Daftar Pasien</li>
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
                <h3 class="card-title" style="font-weight:bold;" >Table Daftar Pasien</h3>
                <div class="card-tools">
                  <a class="btn btn-primary btn-sm" href="<?= base_url('Admin/tambahPasien')?>" type="button" onClik="return confirm('apakah anda yakin ingin menghapus data ini?')">
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
                    <th>No RM</th>
                    <th>No Registrasi</th>
                    <th>No. Identitas</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Telepon</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                        <?php if (!empty($pasien)) : ?>
                            <?php $counter = 1; ?>
                            <?php foreach ($pasien as $row) : ?>
                                <tr>
                                    <td><?php echo $counter; ?></td>
                                    <td><?php echo $row->no_rm; ?></td>
                                    <td><?php echo $row->no_registrasi; ?></td>
                                    <td><?php echo $row->nik_pasien; ?></td>
                                    <td><?php echo $row->nama; ?></td>
                                    <td><?php echo $row->tanggal_lahir; ?></td>
                                    <td><?php echo $row->jk; ?></td>
                                    <td><?php echo $row->alamat; ?></td>
                                    <td><?php echo $row->no_telp; ?></td>
                                    <td> 
                          <a class="btn btn-success btn-sm mb-2" href="<?php echo base_url('Admin/tambahKanker/'.$row->id_pasien); ?>" >
                              <i class="fas fa-vial"></i> Periksa
                          </a>
                          <a class="btn btn-primary btn-sm mb-2" href="<?php echo base_url('Admin/updatePasien/'.$row->id_pasien); ?>" onclick="return confirm('Apakah Anda yakin ingin mengedit data ini?')">
                              <i class="fas fa-pencil-alt"></i> Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="<?php echo base_url('Admin/deletePasien/'.$row->id_pasien); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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
