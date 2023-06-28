<?= $this->extend('layout/default') ?>

<?= $this->section('main-content') ?>
    <section class="section">
      <div class="section-header">
        <h1>Tambah Karyawan</h1>
      </div>
    <div class="card">
        <form method="POST" action="<?= base_url('karyawan/save'); ?>" >
        <div class="card-body">
            <div class="form-group">
            <label for="nama">Nama</label><br>
            <input type="text" class="form-control" name="nama" id="nama" required>
            </div>
            <div class="form-group">
            <label for="jabatan">Jabatan</label><br>
            <input type="text" class="form-control" name="jabatan" id="jabatan" required>
            </div>
            <div class="form-group">
            <label for="kode_dealer">Kode Ahass</label><br>
            <select name="kode_dealer_1" id="kode_dealer_1"  class="form-control" tabindex="-1" aria-hidden="true">
                <?php foreach ($ahass as $ahassItem) : ?>
                    <option><?= $ahassItem['kode_ahass']; ?></option>
                <?php endforeach; ?>
            </select>
            <input type="text" class="form-control" name="kode_dealer" id="kode_dealer" required hidden>
            </div>
            <div class="form-group">
                <label for="nama_dealer">Nama Ahass</label><br>
                <input type="text" class="form-control" name="nama_dealer" id="nama_dealer" require>
            </div>
            <div class="form-group">
                <label for="history_training">History Training</label><br>
                <input type="text" class="form-control" name="history_training" id="history_training" required>
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary"  type="submit" >Submit</button>
        </div>
        </form>
    </div>
      <div class="section-body">
      </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var kodeDealer = document.getElementById('kode_dealer_1');
        var namaDealer = document.getElementById('nama_dealer');

        // Membuat event listener untuk perubahan nilai pada dropdown kode dealer
        kodeDealer.addEventListener('change', function () {
            var selectedKode = kodeDealer.value;
            var selectedAhass = <?= json_encode($ahass); ?>;

            // Mencari data AHASS yang sesuai dengan kode yang dipilih
            var selectedAhassData = selectedAhass.find(function (ahass) {
                return ahass.kode_ahass === selectedKode;
            });

            // Mengatur nilai pada input nama dealer
            namaDealer.value = (selectedAhassData) ? selectedAhassData.nama_ahass : '';
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var kodeDealer = document.getElementById('kode_dealer_1');
        var namaDealer = document.getElementById('kode_dealer');

        // Membuat event listener untuk perubahan nilai pada dropdown kode dealer
        kodeDealer.addEventListener('change', function () {
            var selectedKode = kodeDealer.value;
            var selectedAhass = <?= json_encode($ahass); ?>;

            // Mencari data AHASS yang sesuai dengan kode yang dipilih
            var selectedAhassData = selectedAhass.find(function (ahass) {
                return ahass.kode_ahass === selectedKode;
            });

            // Mengatur nilai pada input nama dealer
            namaDealer.value = (selectedAhassData) ? selectedAhassData.kode_ahass : '';
        });
    });
</script>

<?= $this->endSection() ?>



