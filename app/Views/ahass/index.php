
<?= $this->extend('layout/default') ?>

<?= $this->section('main-content') ?>
<section class="section">
    <div class="section-header">
    <h1>Data Ahass</h1>
    </div>
            <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
            <div class="card-header-form">
                <form>
                <div class="input-group">
                    <div class="input-group-btn">
                    <a href="<?= base_url('ahass/add'); ?>" class="btn btn-danger"><i class="fas fa-plus"></i> Tambah Ahass</a>
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
                    <th>Kode Ahass</th>
                    <th>Nama Ahass</th>
                    <th>Action</th>
                </tr>
                <tr>
                <?php foreach ($ahass as $ahassItem) : ?>
                    <td class="p-0 text-center">
                        <?= $ahassItem['id']; ?>
                    </td>
                    <td><?= $ahassItem['kode_ahass']; ?></td>
                    <td><?= $ahassItem['nama_ahass']; ?></td>
                    <td class="p-0 text-center" >
                        <a href="<?= base_url('ahass/edit/' . $ahassItem['id']); ?>" class="btn btn-secondary" ><i class="fas fa-edit"></i></a>
                        <a href="<?= base_url('ahass/delete/' . $ahassItem['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Ahass?')"><i class="fas fa-trash"></i></a>
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
