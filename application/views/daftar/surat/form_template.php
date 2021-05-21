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
<div class="form-group">
  <label>Alamat</label>
  <textarea class="form-control" name="alamat" rows="4" placeholder="Ex: Jl. Galunggung 25B, Klojen" required><?= set_value('alamat'); ?></textarea>
  <?php echo form_error('alamat')?>
</div>