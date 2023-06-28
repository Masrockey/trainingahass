<?= $this->extend('layout/default') ?>

<?= $this->section('main-content') ?>
    <section class="section">
      <div class="section-header">
        <h1>Detail</h1>
      </div>
    <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-7">
        <div class="card">
            <form method="post" class="needs-validation" novalidate="">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6 col-12">
                    <label>Honda ID</label>
                    <input type="text" class="form-control" value="<?= $karyawan['id']; ?>" required="" disabled>
                    </div>                               
                    <div class="form-group col-md-6 col-12">
                    <label>Nama</label>
                    <input type="text" class="form-control" value="<?= $karyawan['nama']; ?>" required="" disabled>
                    </div>
                    <div class="form-group col-md-6 col-12">
                    <label>Jabatan</label>
                    <input type="text" class="form-control" value="<?= $karyawan['jabatan']; ?>" required="" disabled>
                    </div>
                    <div class="form-group col-md-6 col-12">
                    <label>Kode Ahass</label>
                    <input type="text" class="form-control" value="<?= $karyawan['kode_dealer']; ?>" required="" disabled>
                    </div>
                    <div class="form-group col-md-6 col-12">
                    <label>Nama Ahass</label>
                    <input type="text" class="form-control" value="<?= $karyawan['nama_dealer']; ?>" required="" disabled>
                    </div>
                    <div class="form-group col-md-6 col-12">
                    <label>History Training</label>
                    <input type="text" class="form-control" value="<?= $karyawan['history_training']; ?>" required="" disabled>
                    </div>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>        
      <div class="section-body">
      </div>
    </section>
<?= $this->endSection() ?>
