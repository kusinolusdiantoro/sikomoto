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
              <li class="breadcrumb-item"><a href="<?= base_url('Admin/pasien')?>">Home</a></li>
              <li class="breadcrumb-item active">tambah user</li>
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
                <h3 class="card-title" style="font-weight: bold;">FORM DATA PASIEN</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
           <!--    <form class="form-horizontal"> -->
             <?php echo form_open_multipart('Admin/doTambahPasien') ?>
                <div class="card-body">
                   <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Rekam Medis :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan nama lengkap" name="no_rm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Registrasi :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan nama lengkap" name="no_registrasi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Epidemiologi :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan nomor epidemiologi" name="no_epid">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Identitas :</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan nomor identitas anda" name="nik_pasien">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap :</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan nama lengkap" name="nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tempat :</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan nama lengkap" name="tempat_lahir">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Lahir :</label>
                        <div class="col-sm-4">
                          <input type="date" class="form-control" id="inputEmail3" placeholder="Masukkan nama lengkap" name="tanggal_lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Usia <small>(kunjungan pertama)</small> :</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan usia saat kunjungan pertama " name="usia_awal">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputGender" class="col-sm-2 col-form-label">Jenis Kelamin :</label>
                      <div class="col-sm-4">
                          <select class="form-control" id="inputGender" name="jk">
                              <option value="" disabled selected>Silahkan pilih</option>
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                              <!-- Tambahkan opsi lainnya jika diperlukan -->
                          </select>
                      </div>
                      <label for="inputGender" class="col-sm-2 col-form-label">Agama :</label>
                      <div class="col-sm-4">
                          <select class="form-control" id="inputGender" name="agama">
                              <option value="" disabled selected>Silahkan pilih</option>
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Katolik">Katolik</option>
                              <option value="Hindu">Hindu</option>
                              <option value="Budha">Budha</option>
                              <option value="Khonghucu">Khonghucu</option>
                              <!-- Tambahkan opsi lainnya jika diperlukan -->
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputGender" class="col-sm-2 col-form-label">Status Perkawinan :</label>
                      <div class="col-sm-4">
                          <select class="form-control" id="inputGender" name="nikah">
                              <option value="" disabled selected>Silahkan pilih</option>
                              <option value="Belum Kawin">Belum Kawin</option>
                              <option value="Kawin">Kawin</option>
                              <option value="Cerai Hidup">Cerai Hidup</option>
                              <option value="Cerai Mati">Cerai Mati</option>
                              <!-- Tambahkan opsi lainnya jika diperlukan -->
                          </select>
                      </div>
                      <label for="inputGender" class="col-sm-2 col-form-label">Suku :</label>
                      <div class="col-sm-4">
                          <select class="form-control" id="inputGender" name="suku">
                              <option value="" disabled selected>Silahkan pilih</option>
                              <option value="jawa"> Jawa</option>
                              <option value="sunda"> Sunda</option>
                              <option value="betawi"> Betawi</option>
                              <option value="baduy"> Baduy</option>
                              <option value="tengger"> Tengger</option>
                              <option value="aceh"> Aceh</option>
                              <option value="batak"> Batak</option>
                              <option value="minangkabau"> Minangkabau</option>
                              <option value="dayak"> Dayak</option>
                              <option value="bali"> Bali</option>
                              <option value="asmat"> Asmat</option>
                              <option value="dani"> Dani</option>
                              <option value="arfak"> Arfak</option>
                              <option value="ambon"> Ambon</option>
                              <option value="ternate"> Ternate</option>
                              <option value="minahasa"> Minahasa</option>
                              <option value="toraja"> Toraja</option>
                              <option value="bugis"> Bugis</option>
                              <option value="sumbawa"> Sumbawa</option>
                              <option value="sasak"> Sasak</option>
                              <option value="madura"> Madura</option>
                              <!-- Tambahkan opsi lainnya jika diperlukan -->
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Telepon</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan nomor telepon anda" name="no_telp">
                        </div>
                        <label for="inputGender" class="col-sm-2 col-form-label">Pekerjaan :</label>
                      <div class="col-sm-4">
                          <select class="form-control" id="inputGender" name="pekerjaan">
                              <option value="" disabled selected>Silahkan pilih</option>
                              <option value="belum / tidak bekerja"> Belum/Tidak Bekerja</option>
                              <option value="aparatur pejabat"> Aparatur/Pejabat Negara</option>
                              <option value="tenaga pengajar"> Tenaga/Pengajar</option>
                              <option value="wiraswasta"> Wiraswasta</option>
                              <option value="pertanian / peternakan"> Pertanian/Peternakan</option>
                              <option value="nelayan"> Nelayan</option>
                              <option value="pelajar mahasiswa"> Pelajar/Mahasiswa</option>
                              <option value="tenaga kesehatan"> Tenaga Kesehatan</option>
                              <option value="pensiunan"> Pensiunan</option>
                              <option value="lainnya"> Lainnya</option>
                              <!-- Tambahkan opsi lainnya jika diperlukan -->
                          </select>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAddress" class="col-sm-2 col-form-label">Alamat :</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="inputAddress" placeholder="Masukkan alamat lengkap" name="alamat" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAddress" class="col-sm-2 col-form-label">Keterangan :</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="inputAddress" placeholder="Keterangan lengkap" name="keterangan" rows="3"></textarea>
                        </div>
                    </div>

                </div>
                <!-- /.form-group -->
              </div>
            </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?= base_url('Admin/pasien')?>"><button type="button" class="btn btn-warning">Cancel</button></a>
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
