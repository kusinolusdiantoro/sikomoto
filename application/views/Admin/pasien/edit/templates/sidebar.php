<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url('assets/')?>/img/login.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIPANDU</span>
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
            <a class="nav-link" href="<?php echo base_url('') ?>">
             <i class="fas fa-tachometer-alt"></i> 
             <p class="ml-2">Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Admin/kader') ?>">
              <i class="fas fa-user-nurse"></i>
              <p class="ml-2">Data Kader</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('') ?>">
              <i class="fas fa-prescription-bottle-alt"></i>
              <p class="ml-2">Data Vaksin</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('') ?>">
              <i class="fas fa-syringe"></i>
              <p class="ml-2">Data Imunisasi</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('') ?>">
              <i class="fas fa-users"></i>
              <P class="ml-2">Data Ibu</P>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('') ?>">
              <i class="fas fa-baby"></i>
              <P class="ml-2">Data Bayi </P>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('') ?>">
              <i class="fas fa-baby"></i>
              <P class="ml-2">Data Balita</P>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('') ?>">
              <i class="fas fa-balance-scale-right"></i>
              <p class="ml-2">Data Penimbangan</p>
            </a>
          </li>

            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Auth/logout') ?>">
              <i class="fas fa-sign-out-alt"></i>
              <P class="ml-2">Logout</P>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>