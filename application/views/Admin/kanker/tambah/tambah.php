<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-weight: bold;">SIPANDU</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Admin/identitas')?>">Home</a></li>
              <li class="breadcrumb-item active">tambah identitas</li>
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
             <?php echo form_open_multipart('Admin/doTambahKanker') ?>
                <div class="card-body">
                   <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Rekam Medis :</label>
                        <div class="col-sm-10">
                            <input type="text" id="no_rm" class="form-control" id="inputEmail3" placeholder="Masukkan nama lengkap" name="no_rm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Registrasi :</label>
                        <div class="col-sm-10">
                            <input type="text" id="no_registrasi" class="form-control" id="inputEmail3" placeholder="Masukkan nama lengkap" name="no_registrasi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Epidemiologi :</label>
                        <div class="col-sm-10">
                            <input type="text" id="no_epid" class="form-control" id="inputEmail3" placeholder="Masukkan nomor epidemiologi" name="no_epid">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Identitas :</label>
                        <div class="col-sm-10">
                        <input type="text" id="nik_pasien" class="form-control" id="inputEmail3" placeholder="Masukkan nomor identitas anda" name="nik_pasien">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap :</label>
                        <div class="col-sm-10">
                        <input type="text" id="nama" class="form-control" id="inputEmail3" placeholder="Masukkan nama lengkap" name="nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tempat :</label>
                        <div class="col-sm-4">
                          <input type="text" id="tempat_lahir" class="form-control" id="inputEmail3" placeholder="Masukkan nama lengkap" name="tempat_lahir">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Lahir :</label>
                        <div class="col-sm-4">
                          <input type="date" id="tanggal_lahir" class="form-control" id="inputEmail3" placeholder="Masukkan nama lengkap" name="tanggal_lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Usia <small>(kunjungan pertama)</small> :</label>
                        <div class="col-sm-10">
                          <input type="text" id="usia_awal" class="form-control" id="inputEmail3" placeholder="Masukkan usia saat kunjungan pertama " name="usia_awal">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputGender" class="col-sm-2 col-form-label">Jenis Kelamin :</label>
                      <div class="col-sm-4">
                          <select class="form-control" id="jk" name="jk">
                              <option value="" disabled selected>Silahkan pilih</option>
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                              <!-- Tambahkan opsi lainnya jika diperlukan -->
                          </select>
                      </div>
                      <label for="inputGender" class="col-sm-2 col-form-label">Agama :</label>
                      <div class="col-sm-4">
                          <select class="form-control" id="agama" name="agama">
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
                          <select class="form-control" id="nikah" name="nikah">
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
                          <select class="form-control" id="suku" name="suku">
                              <option value="" disabled selected>Silahkan pilih</option>
                              <option value="Jawa"> Jawa</option>
                              <option value="Sunda"> Sunda</option>
                              <option value="Betawi"> Betawi</option>
                              <option value="Baduy"> Baduy</option>
                              <option value="Tengger"> Tengger</option>
                              <option value="Aceh"> Aceh</option>
                              <option value="Batak"> Batak</option>
                              <option value="Minangkabau"> Minangkabau</option>
                              <option value="Dayak"> Dayak</option>
                              <option value="Bali"> Bali</option>
                              <option value="Asmat"> Asmat</option>
                              <option value="Dani"> Dani</option>
                              <option value="Arfak"> Arfak</option>
                              <option value="Ambon"> Ambon</option>
                              <option value="Ternate"> Ternate</option>
                              <option value="Minahasa"> Minahasa</option>
                              <option value="Toraja"> Toraja</option>
                              <option value="Bugis"> Bugis</option>
                              <option value="Sumbawa"> Sumbawa</option>
                              <option value="Sasak"> Sasak</option>
                              <option value="Madura"> Madura</option>
                              <!-- Tambahkan opsi lainnya jika diperlukan -->
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Telepon</label>
                        <div class="col-sm-4">
                        <input type="text" id="no_telp" class="form-control" id="inputEmail3" placeholder="Masukkan nomor telepon anda" name="no_telp">
                        </div>
                        <label for="inputGender" class="col-sm-2 col-form-label">Pekerjaan :</label>
                      <div class="col-sm-4">
                          <select class="form-control" id="pekerjaan" name="pekerjaan">
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
                            <textarea class="form-control" id="alamat" placeholder="Masukkan alamat lengkap" name="alamat" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAddress" class="col-sm-2 col-form-label">Keterangan :</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="keterangan" placeholder="Keterangan lengkap" name="keterangan" rows="3"></textarea>
                        </div>
                    </div>

                </div>
                <!-- /.form-group -->
              </div>
            </div>

            <!-- DATA KANKER -->
            <div class="container-fluid">
              <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <!-- /.card -->
                  <!-- Horizontal Form -->
                  <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title" style="font-weight: bold;">FORM DATA JENIS TUMOR/KANKER</h3>
                    </div>
                    <div class="card-body">
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal<small> (*pertama diagnosa)</small></label>
                          <div class="col-sm-9">
                          <input type="date" class="form-control" id="inputEmail3" placeholder="" name="tanggal_diagnosa" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Diagnosa</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="masukkan diagnosa" name="diagnosa" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Topografi<small> (*Lokasi)</small></label>
                          <div class="col-sm-3">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="topografi" name="topografi" required>
                          </div>
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Morfologi<small> (*Jenis)</small></label>
                          <div class="col-sm-3">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="morfologi" name="morfologi" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Behaviour<small> (*Sifat)</small></label>
                          <div class="col-sm-3">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="topografi" name="behaviour" required>
                          </div>
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Grade<small> (*Tingkat)</small></label>
                          <div class="col-sm-3">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="morfologi" name="grade" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Most Valid Of Diagnosis Of Cancer</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="jelaskan" name="cancer" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Clinical Extent Of Disease Before Treatment</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="jelaskan" name="treatment" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Treatment At Reporting Instituion</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="jelaskan" name="report" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Site(s) Of Distant Metastases</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="jelaskan" name="metastase" required>
                          </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- DATA FOLLOW UP -->
            <div class="container-fluid">
              <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <!-- /.card -->
                  <!-- Horizontal Form -->
                  <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title" style="font-weight: bold;">FORM SOURCE / FOLLOW UP</h3>
                    </div>
                    <div class="card-body">
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Periksa</label>
                          <div class="col-sm-4">
                          <input type="date" class="form-control" id="inputEmail3" placeholder="" name="tanggal_periksa" required>
                          </div>
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Rumah Sakit</label>
                          <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="masukkan kode" name="kode_rs" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Rumah Sakit</label>
                          <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="masukkan nama rumah sakit" name="nama_rs" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Unit ID</label>
                          <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="masukkan nomor id unit" name="id_unit" required>
                          </div>
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Unit</label>
                          <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="masukkan nama unit" name="nama_unit" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">No. PA/Lab</label>
                          <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="masukkan nomor PA/Lab" name="lab" required>
                          </div>
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Date Of Last Contact</label>
                          <div class="col-sm-4">
                          <input type="date" class="form-control" id="inputEmail3" placeholder="" name="tanggal_terakhir" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="status_terakhir" class="col-sm-2 col-form-label">Status Last Contact</label>
                          <div class="col-sm-10">
                              <select class="form-control" id="status_terakhir" name="status_terakhir" required>
                                  <option value="" disabled selected>Pilih Status</option>
                                  <option value="Alive, no evidence of cancer">Alive, no evidence of cancer</option>
                                  <option value="Alive, localized tumour">Alive, localized tumour</option>
                                  <option value="Alive, direct extension or local involvement">Alive, direct extension or local involvement</option>
                                  <option value="Alive, distant metastases">Alive, distant metastases</option>
                                  <option value="Alive, subsequent primary or first primary discovered when previously unknown">Alive, subsequent primary or first primary discovered when previously unknown</option>
                                  <option value="Alive, nothing further specified">Alive, nothing further specified</option>
                                  <option value="No follow-up">No follow-up</option>
                                  <option value="Dead">Dead</option>
                                  <option value="Unknown">Unknown</option>
                              </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="additionalInfo" class="col-sm-2 col-form-label">Kesimpulan</label>
                          <div class="col-sm-10">
                              <textarea class="form-control" id="additionalInfo" name="kesimpulan" rows="5" placeholder="kesimpulan"></textarea>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Registrasi</label>
                          <div class="col-sm-4">
                          <input type="date" class="form-control" id="inputEmail3" placeholder="" name="tanggal_registar" required>
                          </div>
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Registar</label>
                          <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="nama registar" name="registar" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Verifikasi</label>
                          <div class="col-sm-4">
                          <input type="date" class="form-control" id="inputEmail3" placeholder="" name="tanggal_verifikasi" required>
                          </div>
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Verifikator</label>
                          <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="nama verifikator" name="verifikator" required>
                          </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>


              </div>
            </div>


                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?= base_url('Admin/identitas')?>"><button type="button" class="btn btn-warning">Cancel</button></a>
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
  /* Jika menggunakan max-height, pastikan memberikan nilai yang sesuai agar tidak melebihi tinggi layar */
}

  </style>
</body>
</html>
