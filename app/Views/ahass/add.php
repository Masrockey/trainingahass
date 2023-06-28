<?= $this->extend('layout/default') ?>

<?= $this->section('main-content') ?>
    <section class="section">
      <div class="section-header">
        <h1>Tambah Ahass</h1>
      </div>
    <div class="card">
        <form method="POST" action="<?= base_url('ahass/save'); ?>" >
        <div class="card-body">
            <div class="form-group">
            <label for="kode_ahass">Kode AHASS</label><br>
            <input type="text" name="kode_ahass" id="kode_ahass" class="form-control">
            </div>
            <div class="form-group">
            <label for="nama_ahass">Nama AHASS</label>
        <input type="text" name="nama_ahass" id="nama_ahass" class="form-control">
            </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary"  type="submit" >Submit</button>
        </div>
        </form>
    </div>
      <div class="section-body">
      </div>
    </section>
<?= $this->endSection() ?>



