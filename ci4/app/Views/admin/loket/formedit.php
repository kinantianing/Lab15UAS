<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form action="" method="post">
    <p><input type="text" name="nama_loket" class="nama" value="<?= $data['nama_loket']; ?>"></p>
    <p><textarea name="keterangan" cols="50" class="textarea" rows="10" value="<?= $data['keterangan']; ?>"><?= $data['keterangan']; ?></textarea></p>
    <div class="form-group">
        <label for="">Jenis Pelayanan</label>
        <select name="pelayanan_id" class="pelayanan_id" required>
            <option value="" hidden></option>
            <?php foreach ($pelayanan as $key => $value) : ?>
                <option value="<?= $value['pelayanan_id']; ?>"><?= $value['nama']; ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        <button type="submit" value="Kirim" class="kirim">Kirim</button>
    </div>
</form>

<?= $this->include('template/admin_footer'); ?>