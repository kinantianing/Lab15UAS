<?= $this->include('template/user_header'); ?>

<h2><?= $title; ?></h2>
<p>Untuk mengambil antrian, silahkan pilih jenis pelayanan dan loket yang tersedia.</p>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Jenis Pelayanan</label>
        <select name="pelayanan_id" class="pelayanan_id" required>
            <option value="" hidden></option>
            <?php foreach ($pelayanan as $key => $value) : ?>
                <option value="<?= $value['pelayanan_id']; ?>"><?= $value['nama']; ?></option>
            <?php endforeach ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">Loket</label>
        <select name="loket_id" class="loket_id" required>
            <option value="" hidden></option>
            <?php foreach ($loket as $key => $value) : ?>
                <option class="loket" value="<?= $value['loket_id']; ?>"><?= $value['nama_loket']; ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        <button type="submit" value="Kirim" class="kirim">Ambil</button>
    </div>
</form>

<?= $this->include('template/user_footer'); ?>