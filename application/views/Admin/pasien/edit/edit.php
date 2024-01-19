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
              <li class="breadcrumb-item active">Update Data Pasien</li>
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
                <h3 class="card-title" style="font-weight: bold;">FORM UPDATE DATA PASIEN</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
           <!--    <form class="form-horizontal"> -->
             <?php echo form_open_multipart('Admin/doUpdatePasien') ?>
                <div class="card-body">
                  <?php foreach ($pasien as $u) : ?>
                    <input type="hidden" value="<?php echo $u->id_pasien ?>" name="id_pasien">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Rekam Medis</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan nama lengkap" name="no_rm" value="<?php echo $u->no_rm ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Registrasi :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan nama lengkap" name="no_registrasi" value="<?php echo $u->no_registrasi ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Epidemiologi :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan nomor epidemiologi" name="no_epid" value="<?php echo $u->no_epid ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Identitas :</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan nomor identitas anda" name="nik_pasien" value="<?php echo $u->nik_pasien ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap :</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan nama lengkap" name="nama" value="<?php echo $u->nama ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tempat :</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan nama lengkap" name="tempat_lahir" value="<?php echo $u->tempat_lahir ?>">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Lahir :</label>
                        <div class="col-sm-4">
                          <input type="date" class="form-control" id="inputEmail3" placeholder="Masukkan nama lengkap" name="tanggal_lahir" value="<?php echo $u->tanggal_lahir ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Usia <small>(kunjungan pertama)</small> :</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan usia saat kunjungan pertama " name="usia_awal" value="<?php echo $u->usia_awal ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputGender" class="col-sm-2 col-form-label">Jenis Kelamin :</label>
                      <div class="col-sm-4">
                          <select class="form-control" id="inputGender" placeholder="Silahkan Pilih" name="jk">
                              <option value="Laki-laki" <?php echo ($u->jk == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                              <option value="Perempuan" <?php echo ($u->jk == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                              <!-- Tambahkan opsi lainnya jika diperlukan -->
                          </select>
                      </div>
                      <label for="inputGender" class="col-sm-2 col-form-label">Agama :</label>
                      <div class="col-sm-4">
                          <select class="form-control" id="inputGender" name="agama">
                              <option value="">Silahkan Pilih</option>
                              <option value="Islam" <?php echo ($u->agama == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                              <option value="Kristen" <?php echo ($u->agama == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
                              <option value="Katolik" <?php echo ($u->agama == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
                              <option value="Hindu" <?php echo ($u->agama == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                              <option value="Budha" <?php echo ($u->agama == 'Budha') ? 'selected' : ''; ?>>Budha</option>
                              <option value="Khonghucu" <?php echo ($u->agama == 'Khonghucu') ? 'selected' : ''; ?>>Khonghucu</option>
                              <!-- Tambahkan opsi lainnya jika diperlukan -->
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputGender" class="col-sm-2 col-form-label">Status Perkawinan :</label>
                      <div class="col-sm-4">
                          <select class="form-control" id="inputGender" name="nikah">
                              <option value="">Silahkan pilih</option>
                              <option value="Belum Kawin" <?php echo ($u->nikah == 'Belum Kawin') ? 'selected' : ''; ?>>Belum Kawin</option>
                              <option value="Kawin" <?php echo ($u->nikah == 'Kawin') ? 'selected' : ''; ?>>Kawin</option>
                              <option value="Cerai Hidup" <?php echo ($u->nikah == 'Cerai Hidup') ? 'selected' : ''; ?>>Cerai Hidup</option>
                              <option value="Cerai Mati" <?php echo ($u->nikah == 'Cerai Mati') ? 'selected' : ''; ?>>Cerai Mati</option>
                              <!-- Tambahkan opsi lainnya jika diperlukan -->
                          </select>
                      </div>
                      <label for="inputGender" class="col-sm-2 col-form-label">Suku :</label>
                      <div class="col-sm-4">
                          <select class="form-control" id="inputGender" name="suku">
                              <option value="">Silahkan Pilih</option>
                              <option value="jawa" <?php echo ($u->suku == 'Jawa') ? 'selected' : ''; ?>> Jawa</option>
                              <option value="sunda" <?php echo ($u->suku == 'Sunda') ? 'selected' : ''; ?>> Sunda</option>
                              <option value="betawi" <?php echo ($u->suku == 'Betawi') ? 'selected' : ''; ?>> Betawi</option>
                              <option value="baduy" <?php echo ($u->suku == 'Baduy') ? 'selected' : ''; ?>> Baduy</option>
                              <option value="tengger" <?php echo ($u->suku == 'Tengger') ? 'selected' : ''; ?>> Tengger</option>
                              <option value="aceh" <?php echo ($u->suku == 'Aceh') ? 'selected' : ''; ?>> Aceh</option>
                              <option value="batak" <?php echo ($u->suku == 'Batak') ? 'selected' : ''; ?>> Batak</option>
                              <option value="minangkabau" <?php echo ($u->suku == 'Minangkabau') ? 'selected' : ''; ?>> Minangkabau</option>
                              <option value="dayak" <?php echo ($u->suku == 'Dayak') ? 'selected' : ''; ?>> Dayak</option>
                              <option value="bali" <?php echo ($u->suku == 'Bali') ? 'selected' : ''; ?>> Bali</option>
                              <option value="asmat" <?php echo ($u->suku == 'Asmat') ? 'selected' : ''; ?>> Asmat</option>
                              <option value="dani" <?php echo ($u->suku == 'Dani') ? 'selected' : ''; ?>> Dani</option>
                              <option value="arfak" <?php echo ($u->suku == 'Arfak') ? 'selected' : ''; ?>> Arfak</option>
                              <option value="ambon" <?php echo ($u->suku == 'Ambon') ? 'selected' : ''; ?>> Ambon</option>
                              <option value="ternate" <?php echo ($u->suku == 'Ternate') ? 'selected' : ''; ?>> Ternate</option>
                              <option value="minahasa" <?php echo ($u->suku == 'Minahasa') ? 'selected' : ''; ?>> Minahasa</option>
                              <option value="toraja" <?php echo ($u->suku == 'Toraja') ? 'selected' : ''; ?>> Toraja</option>
                              <option value="bugis" <?php echo ($u->suku == 'Bugis') ? 'selected' : ''; ?>> Bugis</option>
                              <option value="sumbawa" <?php echo ($u->suku == 'Sumbawa') ? 'selected' : ''; ?>> Sumbawa</option>
                              <option value="sasak" <?php echo ($u->suku == 'Sasak') ? 'selected' : ''; ?>> Sasak</option>
                              <option value="madura" <?php echo ($u->suku == 'Madura') ? 'selected' : ''; ?>> Madura</option>
                              <!-- Tambahkan opsi lainnya jika diperlukan -->
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Telepon</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan nomor telepon anda" name="no_telp" value="<?php echo($u->no_telp)?>">
                        </div>
                        <label for="inputGender" class="col-sm-2 col-form-label">Pekerjaan :</label>
                      <div class="col-sm-4">
                          <select class="form-control" id="inputGender" name="pekerjaan">
                              <option value=""> Silahkan Pilih </option>
                              <option value="belum / tidak bekerja" <?php echo ($u->pekerjaan == 'belum/tidak Bekerja') ? 'selected' : ''; ?>> Belum/Tidak Bekerja</option>
                              <option value="aparatur pejabat" <?php echo ($u->pekerjaan == 'aparatur/pejabat Negara') ? 'selected' : ''; ?>> Aparatur/Pejabat Negara</option>
                              <option value="tenaga pengajar" <?php echo ($u->pekerjaan == 'tenaga pengajar') ? 'selected' : ''; ?>> Tenaga Pengajar</option>
                              <option value="wiraswasta" <?php echo ($u->pekerjaan == 'wiraswasta') ? 'selected' : ''; ?>> Wiraswasta</option>
                              <option value="pertanian / peternakan" <?php echo ($u->pekerjaan == 'pertanian/peternakan') ? 'selected' : ''; ?>> Pertanian/Peternakan</option>
                              <option value="nelayan" <?php echo ($u->pekerjaan == 'nelayan') ? 'selected' : ''; ?>> Nelayan</option>
                              <option value="pelajar mahasiswa" <?php echo ($u->pekerjaan == 'pelajar mahasiswa') ? 'selected' : ''; ?>> Pelajar/Mahasiswa</option>
                              <option value="tenaga kesehatan" <?php echo ($u->pekerjaan == 'tenaga kesehatan') ? 'selected' : ''; ?>> Tenaga Kesehatan</option>
                              <option value="pensiunan" <?php echo ($u->pekerjaan == 'pensiunan') ? 'selected' : ''; ?>> Pensiunan</option>
                              <option value="lainnya" <?php echo ($u->pekerjaan == 'lainnya') ? 'selected' : ''; ?>> Lainnya</option>
                              <!-- Tambahkan opsi lainnya jika diperlukan -->
                          </select>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAddress" class="col-sm-2 col-form-label">Alamat :</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="inputAddress" placeholder="Masukkan alamat lengkap" name="alamat" rows="3"><?php echo($u->alamat)?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAddress" class="col-sm-2 col-form-label">Keterangan :</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="inputAddress" placeholder="Keterangan lengkap" name="keterangan" rows="3"><?php echo($u->keterangan)?></textarea>
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
