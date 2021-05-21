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
          
          <div class="form-group">
            <label>Keterangan Surat</label>
            <div class="input-group mb-3">
              <input type="text" name="ket_surat" class="form-control" placeholder="Ex: Untuk Beasiswa S1 UM" required>
            </div>
            <?php echo form_error('ket_surat')?>
          </div>
          <div class="form-group">
            <label>Gaji Per Bulan</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Rp. </span>
              </div>
              <input type="text" name="gaji_perbulan" class="form-control" placeholder="Ex: 85231519519 (Tanpa angka 0)" value="<?= set_value('gaji_perbulan'); ?>" required>
            </div>
            <?php echo form_error('gaji_perbulan')?>
          </div>
          <div class="form-group">
            <label>Umur</label>
            <div class="input-group mb-3">
              <input type="number" name="umur" class="form-control" placeholder="Ex: 4" required>
            </div>
            <?php echo form_error('umur')?>
          </div>
          <div class="form-group">
            <label>Tanggungan Keluarga</label>
            <div class="input-group mb-3">
              <input type="number" name="tanggungan_keluarga" class="form-control" placeholder="Ex: 4" required>
            </div>
            <?php echo form_error('tanggungan_keluarga')?>
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
