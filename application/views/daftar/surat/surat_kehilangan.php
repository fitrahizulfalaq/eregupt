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
            <label>Jenis Berkas</label>
            <div class="input-group mb-3">
              <input type="text" name="jenis_berkas" class="form-control" placeholder="Ex: KTP" required>
            </div>
            <?php echo form_error('jenis_berkas')?>
          </div>
          <div class="form-group">
            <label>Nomor Berkas</label>
            <div class="input-group mb-3">
              <input type="text" name="no_berkas" class="form-control" placeholder="Ex: 3504141201290001" required>
            </div>
            <?php echo form_error('no_berkas')?>
          </div>
          <div class="form-group">
            <label>Pemilik Berkas</label>
            <div class="input-group mb-3">
              <input type="text" name="pemilik_berkas" class="form-control" placeholder="Ex: Supriadi" required>
            </div>
            <?php echo form_error('pemilik_berkas')?>
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
