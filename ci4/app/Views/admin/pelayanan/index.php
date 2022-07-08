<?= $this->include('template/admin_header'); ?>
<div>
    <div class="title">
        <h3>DAFTAR PELAYANAN</h3>
    </div>
    <a class="add" name="add" href="<?= base_url('/admin/pelayanan/add'); ?>">Tambah Pelayanan</a>
    <table class="table" id="customers">
        <thead>
            <tr>
                <th>ID</th>
                <th>Jenis Pelayanan</th>
                <th>Keterangan</th>
                <th>Kode</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($pelayanan) : foreach ($pelayanan as $row) : ?>
                    <tr>
                        <td><?= $row['pelayanan_id']; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['keterangan_ply']; ?></td>
                        <td><?= $row['kode']; ?></td>
                        <td>
                            <a class="btn" id="ubah" href="<?= base_url('/admin/pelayanan/edit/' . $row['pelayanan_id']); ?>">Ubah</a>
                            <a class="btn" id="hapus" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/pelayanan/delete/' . $row['pelayanan_id']); ?>">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach;
            else : ?>
                <tr>
                    <td colspan="3">Belum ada data.</td>
                </tr>
            <?php endif; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Jenis Pelayanan</th>
                <th>Keterangan</th>
                <th>Kode</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
    </table>
</div>

<?= $this->include('template/admin_footer'); ?>