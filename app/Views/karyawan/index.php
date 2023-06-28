<?= $this->extend('layout/default') ?>

<?= $this->section('main-content') ?>
<section class="section">
    <div class="section-header">
    <h1>Data Karyawan</h1>
    </div>
            <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
            <div class="card-header-form">
                <form>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    <a href="<?= base_url('karyawan/add'); ?>" class="btn btn-danger"><i class="fas fa-plus"></i> Tambah Karyawan</a>
                    </div>
                </div>
                </form>
            </div>
            </div>
            <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Kode Ahass</th>
                    <th>Nama Ahass</th>
                    <th>History Training</th>
                    <th>Action</th>
                </tr>
                <tr>
                <?php foreach ($karyawan as $karyawanItem) : ?>
                    <td class="p-0 text-center">
                        <?= $karyawanItem['id']; ?>
                    </td>
                    <td><?= $karyawanItem['nama']; ?></td>
                    <td><?= $karyawanItem['jabatan']; ?></td>
                    <td><?= $karyawanItem['kode_dealer']; ?></td>
                    <td><?= $karyawanItem['nama_dealer']; ?></td>
                    <td><?= $karyawanItem['history_training']; ?></td>
                    <td class="p-0 text-center" >
                        <a href="<?= base_url('karyawan/detail/' . $karyawanItem['id']);  ?>" class="btn btn-secondary" ><i class="fas fa-info-circle"></i></a>
                        <a href="<?= base_url('karyawan/delete/' . $karyawanItem['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this karyawan?')"><i class="fas fa-trash"></i></a>
                    </td>
                    </tr>
                <?php endforeach; ?>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="section-body">
    </div>
</section>
<?= $this->endSection() ?>