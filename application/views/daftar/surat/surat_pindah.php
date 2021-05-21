<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?= base_url()?>">Home</a></li>
          <li><?= $menu ?></li>
        </ol>
        <h2><?= $judul ?></h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
     
      <div class="container">
        <h2>Pembuatan <?= $surat->judul ?></h2><br><br>
        <form action="<?= base_url('buat/surat/'.$surat->link)?>" method="post" class="">
          <div class="mb-3">
            <div><?php $this->view('message'); ?></div>
          </div>

          <div class="form-group">
            <label>NIK</label>
            <div class="input-group mb-3">
              <input type="hidden" name="tipe_surat" value="<?= $surat->id ?>" />
              <input type="hidden" name="link" value="<?= $surat->link ?>" />
              <input type="text" name="nik" class="form-control" placeholder="Ex: 350xxx" required>
            </div>
            <?php echo form_error('nik')?>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Ex: Fitrah Izul Falaq" required value="<?= set_value('nama'); ?>" />
              </div>
              <?php echo form_error('nama')?>
            </div>
            <div class="form-group col-md-6">
              <label>TTL</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="icofont-calendar"></i></span>
                </div>
                <input type="date" name="ttl" class="form-control" placeholder="Ex: 85231519519 (Tanpa angka 0)" value="<?= set_value('ttl'); ?>" required>
              </div>
              <?php echo form_error('ttl')?>
            </div>
          </div>      

          <div class="form-group">
            <label>Kelamin</label>
            <div>
              <select name="kelamin" class="form-control" required>
                <option value="">- Pilih -</option>                
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
              <?php echo form_error('kelamin')?>
            </div>
          </div>

          <div class="form-group">
            <label>Kewarganegaraan</label>
            <div>
              <select name="kenegaraan" class="form-control" required>
                <option value="">- Pilih -</option>                
                <option value="Indonesia">Indonesia</option>
                <option value="Asing">Asing</option>
              </select>
              <?php echo form_error('kenegaraan')?>
            </div>
          </div>

          <div class="form-group">
            <label>Status Perkawinan</label>
            <div>
              <select name="perkawinan" class="form-control" required>
                <option value="<?= set_value('perkawinan'); ?>">Pilih : <?= set_value('perkawinan'); ?></option>                
                <option value="Belum Menikah">Belum Menikah</option>
                <option value="Menikah">Menikah</option>
                <option value="Cerai Hidup">Cerai Hidup</option>
                <option value="Cerai Mati">Cerai Maati</option>
              </select>
              <?php echo form_error('perkawinan')?>
            </div>
          </div>

          <div class="form-group">
            <label>Agama</label>
            <div>
              <select name="agama" class="form-control" required>
                <option value="<?= set_value('agama'); ?>">Pilih : <?= set_value('agama'); ?></option>                
                <option value="Islam">Islam</option>
                <option value="Protestan">Protestan</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Khonghucu">Khonghucu</option>
              </select>
              <?php echo form_error('agama')?>
            </div>
          </div>

          <div class="form-group">
            <label>Pekerjaan</label>
            <div class="input-group mb-3">
              <input type="text" name="pekerjaan" class="form-control" placeholder="Ex: Petani" required>
            </div>
            <?php echo form_error('pekerjaan')?>
          </div>

          <hr>

          <div class="form-row">
            <div class="form-group col-md-6">
              <div class="form-group">
                <label>Dusun Asal</label>
                <input type="text" class="form-control" name="dusun_asal" placeholder="Ex: Krajan" required value="<?= set_value('dusun_asal'); ?>" />
              </div>
              <?php echo form_error('dusun_asal')?>
            </div>
            <div class="form-group col-md-3">
              <label>RT</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="icofont-building"></i></span>
                </div>
                <input type="text" name="rt_asal" class="form-control" placeholder="Ex: 3" value="<?= set_value('rt_asal'); ?>" required>
              </div>
              <?php echo form_error('rt_asal')?>
            </div>
            <div class="form-group col-md-3">
              <label>RW</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="icofont-building"></i></span>
                </div>
                <input type="text" name="rw_asal" class="form-control" placeholder="Ex: 4" value="<?= set_value('rw_asal'); ?>" required>
              </div>
              <?php echo form_error('rw_asal')?>
            </div>
          </div>

          <div class="form-group">
            <label>Desa Asal</label>
            <div class="input-group mb-3">
              <input type="text" name="desa_asal" class="form-control" placeholder="Ex: Sidodadi" required>
            </div>
            <?php echo form_error('desa_asal')?>
          </div>

          <div class="form-group">
            <label>Kecamatan Asal</label>
            <div class="input-group mb-3">
              <input type="text" name="kecamatan_asal" class="form-control" placeholder="Ex: Garum" required>
            </div>
            <?php echo form_error('kecamatan_asal')?>
          </div>

          <div class="form-group">
            <label>Kabupaten Asal</label>
            <div class="input-group mb-3">
              <input type="text" name="kabupaten_asal" class="form-control" placeholder="Ex: Sidodadi" required>
            </div>
            <?php echo form_error('kabupaten_asal')?>
          </div>

          <hr>

          <div class="form-row">
            <div class="form-group col-md-6">
              <div class="form-group">
                <label>Dusun Tujuan</label>
                <input type="text" class="form-control" name="dusun_tujuan" placeholder="Ex: Krajan" required value="<?= set_value('dusun_tujuan'); ?>" />
              </div>
              <?php echo form_error('dusun_tujuan')?>
            </div>
            <div class="form-group col-md-3">
              <label>RT</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="icofont-building"></i></span>
                </div>
                <input type="text" name="rt_tujuan" class="form-control" placeholder="Ex: 3" value="<?= set_value('rt_tujuan'); ?>" required>
              </div>
              <?php echo form_error('rt_tujuan')?>
            </div>
            <div class="form-group col-md-3">
              <label>RW</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="icofont-building"></i></span>
                </div>
                <input type="text" name="rw_tujuan" class="form-control" placeholder="Ex: 4" value="<?= set_value('rw_tujuan'); ?>" required>
              </div>
              <?php echo form_error('rw_tujuan')?>
            </div>
          </div>

          <div class="form-group">
            <label>Desa Tujuan</label>
            <div class="input-group mb-3">
              <input type="text" name="desa_tujuan" class="form-control" placeholder="Ex: Sidodadi" required>
            </div>
            <?php echo form_error('desa_tujuan')?>
          </div>

          <div class="form-group">
            <label>Kecamatan Tujuan</label>
            <div class="input-group mb-3">
              <input type="text" name="kecamatan_tujuan" class="form-control" placeholder="Ex: Garum" required>
            </div>
            <?php echo form_error('kecamatan_tujuan')?>
          </div>

          <div class="form-group">
            <label>Kabupaten Tujuan</label>
            <div class="input-group mb-3">
              <input type="text" name="kabupaten_tujuan" class="form-control" placeholder="Ex: Sidodadi" required>
            </div>
            <?php echo form_error('kabupaten_tujuan')?>
          </div>

          <hr>

          <div class="form-group">
            <label>Jumlah Pengikut</label>
            <div class="input-group mb-3">
              <input type="number" name="jumlah_pengikut" class="form-control" placeholder="Ex: 2" required>
            </div>
            <?php echo form_error('jumlah_pengikut')?>
          </div>

          <hr>

          <div class="form-group">
            <label>Data Pengikut 1</label>
            <div class="input-group mb-3">
              <input type="text" name="nama_pengikut1" class="form-control" placeholder="Nama: Fitrah Izul Falaq">
            </div>
            <?php echo form_error('nama_pengikut1')?>
            <div class="input-group mb-3">
              <input type="text" name="kelamin_pengikut1" class="form-control" placeholder="Kelamin: L / P">
            </div>
            <?php echo form_error('kelamin_pengikut1')?>
            <div class="input-group mb-3">
              <input type="text" name="pendidikan_pengikut1" class="form-control" placeholder="Pendidikan: SD / SMP / SMA / S1 sederajat">
            </div>
            <?php echo form_error('pendidikan_pengikut1')?>
            <div class="input-group mb-3">
              <input type="text" name="hubungan_pengikut1" class="form-control" placeholder="Hubungan: SD / SMP / SMA / S1 sederajat">
            </div>
            <?php echo form_error('hubungan_pengikut1')?>
          </div>

          <div class="form-group">
            <label>Data Pengikut 2</label>
            <div class="input-group mb-3">
              <input type="text" name="nama_pengikut2" class="form-control" placeholder="Nama: Fitrah Izul Falaq">
            </div>
            <?php echo form_error('nama_pengikut2')?>
            <div class="input-group mb-3">
              <input type="text" name="kelamin_pengikut2" class="form-control" placeholder="Kelamin: L / P">
            </div>
            <?php echo form_error('kelamin_pengikut2')?>
            <div class="input-group mb-3">
              <input type="text" name="pendidikan_pengikut2" class="form-control" placeholder="Pendidikan: SD / SMP / SMA / S1 sederajat">
            </div>
            <?php echo form_error('pendidikan_pengikut2')?>
            <div class="input-group mb-3">
              <input type="text" name="hubungan_pengikut2" class="form-control" placeholder="Hubungan: SD / SMP / SMA / S1 sederajat">
            </div>
            <?php echo form_error('hubungan_pengikut2')?>
          </div>

          <div class="form-group">
            <label>Data Pengikut 3</label>
            <div class="input-group mb-3">
              <input type="text" name="nama_pengikut3" class="form-control" placeholder="Nama: Fitrah Izul Falaq">
            </div>
            <?php echo form_error('nama_pengikut3')?>
            <div class="input-group mb-3">
              <input type="text" name="kelamin_pengikut3" class="form-control" placeholder="Kelamin: L / P">
            </div>
            <?php echo form_error('kelamin_pengikut3')?>
            <div class="input-group mb-3">
              <input type="text" name="pendidikan_pengikut3" class="form-control" placeholder="Pendidikan: SD / SMP / SMA / S1 sederajat">
            </div>
            <?php echo form_error('pendidikan_pengikut3')?>
            <div class="input-group mb-3">
              <input type="text" name="hubungan_pengikut3" class="form-control" placeholder="Hubungan: SD / SMP / SMA / S1 sederajat">
            </div>
            <?php echo form_error('hubungan_pengikut3')?>
          </div>

          <hr>
          
          <div class="form-group">
            <label>Alasan</label>
            <textarea class="form-control" name="alasan" rows="4" placeholder="Ex: Berkeja sebagai Petani di desa " required><?= set_value('alasan'); ?></textarea>
            <?php echo form_error('alasan')?>
          </div>

          <div class="form-group">
            <label>Keperluan</label>
            <textarea class="form-control" name="keperluan" rows="4" placeholder="Ex: Perlengkapan Persyaratan Adminitrasi Pengajuan Pembuatan Rekening di BANK Jatim" required><?= set_value('keperluan'); ?></textarea>
            <?php echo form_error('keperluan')?>
          </div>

          <div class="text-center">
            <a href="<?= base_url('buat')?>" class="btn btn-warning">Menu</a>
            <button type="submit" class="btn btn-primary">Buat</button>
          </div>
        </form>
      </div>
    </section>

  </main><!-- End #main -->
