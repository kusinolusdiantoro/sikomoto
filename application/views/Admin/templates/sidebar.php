<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed; height: 100%;">
    <!-- Brand Logo -->
    <a href="<?= base_url('Admin/')?>" class="brand-link">
      <img src="<?= base_url('assets/')?>/img/poltek.png" alt="SIMLIHAT Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIKOMOTO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('nama') ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Admin/') ?>">
             <i class="fas fa-tachometer-alt"></i> 
             <p class="ml-2">Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Admin/pasien') ?>">
             <i class="fas fa-user"></i> 
             <p class="ml-2">Data Pasien</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Admin/kanker') ?>">
             <i class="fas fa-user"></i> 
             <p class="ml-2">Registrasi Kanker</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Admin/') ?>">
             <i class="fas fa-user"></i> 
             <p class="ml-2">Kode ICD-10 & ICD-0</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Admin/') ?>">
             <i class="fas fa-user"></i> 
             <p class="ml-2">Data Gejala</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Admin/') ?>">
             <i class="fas fa-user"></i> 
             <p class="ml-2">Data CF</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Admin/') ?>">
             <i class="fas fa-user"></i> 
             <p class="ml-2">Data Bobot Pakar</p>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Auth/Logout') ?>">
              <i class="fas fa-sign-out-alt"></i>
              <p class="ml-2">Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  