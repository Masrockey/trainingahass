<?= $this->extend('layout/default') ?>

<?= $this->section('main-content') ?>
    <section class="section">
      <div class="section-header">
        <h1>Edit Ahass</h1>
      </div>

<form action="<?= base_url('ahass/update/' . $ahass['id']); ?>" method="post">
    <div class="form-group">
        <label for="kode_ahass">Kode AHASS</label>
        <input type="text" name="kode_ahass" id="kode_ahass" class="form-control" value="<?= $ahass['kode_ahass']; ?>">
    </div>
    <div class="form-group">
        <label for="nama_ahass">Nama AHASS</label>
        <input type="text" name="nama_ahass" id="nama_ahass" class="form-control" value="<?= $ahass['nama_ahass']; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

      <div class="section-body">
      </div>
    </section>
<?= $this->endSection() ?>




