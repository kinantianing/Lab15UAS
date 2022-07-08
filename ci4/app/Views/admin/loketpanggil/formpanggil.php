<?= $this->include('template/admin_header'); ?>
<div>
    <div class="title">
        <h3>LOKET PANGGIL</h3>
    </div>
    <!-- <a class="add" name="add" href="">Tambah Loket</a> -->

    <table class="table" id="customers">
        <thead>
            <tr>
                <th>No. Antrian</th>
                <th>Status</th>
                <th>Panggil</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($antrian as $row) : ?>
                <tr>
                    <td>A<?= $row['antrian_id']; ?></td>
                    <td><?= $row['status']; ?></td>
                    <td>
                        <a class="btn" id="panggil" href="<?= base_url('/admin/loketpanggil/edit/' . $row['antrian_id']); ?>">Panggil</a>
                        <a class="btn" id="selesai" href="<?= base_url('/admin/loketpanggil/delete/' . $row['antrian_id']); ?>">Selesai</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>No. Antrian</th>
                <th>Status</th>
                <th>Panggil</th>
            </tr>
        </tfoot>
    </table>
</div>

<?= $this->include('template/admin_footer'); ?>