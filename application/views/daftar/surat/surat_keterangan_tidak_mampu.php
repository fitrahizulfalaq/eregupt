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
          <?php $this->load->view('buat/surat/form_template')?>
          
          <div class="form-row">
            <div class="form-group col-md-6">
              <div class="form-group">
                <label>Nama Penerima</label>
                <input type="text" class="form-control" name="nama_penerima" placeholder="Ex: Fitrah Izul Falaq" required value="<?= set_value('nama_penerima'); ?>" />
              </div>
              <?php echo form_error('nama_penerima')?>
            </div>
            <div class="form-group col-md-6">
              <label>TTL Penerima</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="icofont-calendar"></i></span>
                </div>
                <input type="date" name="ttl_penerima" class="form-control" placeholder="Ex: 85231519519 (Tanpa angka 0)" value="<?= set_value('ttl_penerima'); ?>" required>
              </div>
              <?php echo form_error('ttl_penerima')?>
            </div>
          </div>
          <div class="form-group">
            <label>Kelamin</label>
            <div>
              <select name="kelamin_penerima" class="form-control" required>
                <option value="">Pilih</option>                
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
              <?php echo form_error('kelamin')?>
            </div>
          </div>
          <div class="form-group">
            <label>Sekolah/Universitas/dll</label>
            <div class="input-group mb-3">
              <input type="text" name="sekolah" class="form-control" placeholder="Ex: Universitas Negeri Malang" required>
            </div>
            <?php echo form_error('sekolah')?>
          </div>
          <div class="form-group">
            <label>Alamat Sekolah</label>
            <textarea class="form-control" name="alamat_sekolah" rows="4" placeholder="Ex: Jl. Galunggung 25B, Klojen" required><?= set_value('alamat_sekolah'); ?></textarea>
            <?php echo form_error('alamat_sekolah')?>
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
