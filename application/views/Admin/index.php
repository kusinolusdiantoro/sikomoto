<?php

  if ($this->session->flashdata('Login_Admin') == TRUE) { ?>
    <script>
      $(document).ready(function() {
    // Kode SweetAlert Anda di sini
        Swal.fire({
            icon: 'success',
            title: 'Login Berhasil',
            text: 'Anda berhasil login sebagai admin!'
        });
    });

    </script>
  <?php }

  ?>

<div class="wrapper">

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="font-weight: bold;">SIKOMOTO</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php 
                  $get = $this->db->get('tb_pasien');
                  $rows = $get->num_rows(); 
                ?>
                <h3><?php echo $rows; ?></h3>

                <p>Data Pasien</p>
              </div>
              <div class="icon">
                <i class="fas fa-solid fa-id-card"></i>
              </div>
              <a href="<?= base_url('Admin/pasien')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php 
                  $get = $this->db->get('tb_kanker');
                  $rows = $get->num_rows(); 
                ?>
                <h3><?php echo $rows; ?></h3>

                <p>Registrasi Kanker</p>
              </div>
              <div class="icon">
                <i class="fas fa-solid fa-clipboard-list"></i>
              </div>
              <a href="<?= base_url('Admin/kanker')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <p>Pelayanan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</body>
</html>
