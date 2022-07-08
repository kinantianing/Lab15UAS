<?= $this->include('template/admin_header'); ?>
<div>
    <div class="title">
        <h3>DAFTAR LOKET</h3>
    </div>
    <a class="add" name="add" href="<?= base_url('/admin/loket/add'); ?>">Tambah Loket</a>
    <table class="table" id="customers">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Loket</th>
                <th>Keterangan</th>
                <th>ID Pelayanan</th>
                <th>Jenis Pelayanan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($loket as $row) : ?>
                <tr>
                    <td><?= $row['loket_id']; ?></td>
                    <td><?= $row['nama_loket']; ?></td>
                    <td><?= substr($row['keterangan'], 0, 20); ?></td>
                    <td><?= $row['pelayanan_id']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td>
                        <a class="btn" id="ubah" href="<?= base_url('/admin/loket/edit/' . $row['loket_id']); ?>">Ubah</a>
                        <a class="btn" id="hapus" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/loket/delete/' . $row['loket_id']); ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Nama Loket</th>
                <th>Keterangan</th>
                <th>ID Pelayanan</th>
                <th>Jenis Pelayanan</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
    </table>
</div>

<?= $this->include('template/admin_footer'); ?>