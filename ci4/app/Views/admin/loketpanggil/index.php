<?= $this->include('template/admin_header'); ?>
<div>
    <div class="title">
        <h3>DETAIL DAFTAR ANTRIAN</h3>
    </div>
    <!-- <a class="add" name="add" href="">Tambah Loket</a> -->
    <table class="table" id="customers">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal</th>
                <th>No. Antrian</th>
                <th>Status</th>
                <th>waktu Panggil</th>
                <th>Waktu Selesai</th>
                <th>Pelayanan</th>
                <th>Loket</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($antrian as $row) : ?>
                <tr>
                    <td><?= $row['antrian_id']; ?></td>
                    <td><?= $row['tanggal']; ?></td>
                    <td>A<?= $row['antrian_id']; ?></td>
                    <td><?= $row['status']; ?></td>
                    <td><?= $row['waktu_panggil']; ?></td>
                    <td><?= $row['waktu_selesai']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['nama_loket']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Tanggal</th>
                <th>No. Antrian</th>
                <th>Status</th>
                <th>waktu Panggil</th>
                <th>Waktu Selesai</th>
                <th>Pelayanan</th>
                <th>Loket</th>
            </tr>
        </tfoot>
    </table>
</div>

<?= $this->include('template/admin_footer'); ?>