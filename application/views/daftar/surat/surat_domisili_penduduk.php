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
            <label>Keterangan Domisili</label>
            <textarea class="form-control" name="ket_domisili" rows="4" placeholder="Ex: Dsn. Kemloko RT 03 RW 05" required><?= set_value('ket_domisili'); ?></textarea>
            <?php echo form_error('ket_domisili')?>
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
