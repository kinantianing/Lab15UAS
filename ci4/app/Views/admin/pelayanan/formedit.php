<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form action="" method="post">
    <p><input type="text" name="nama" class="nama" value="<?= $data['nama']; ?>"></p>
    <p><textarea name="keterangan_ply" cols="50" class="textarea" rows="10" value="<?= $data['keterangan_ply']; ?>"><?= $data['keterangan_ply']; ?></textarea></p>
    <p><input type="text" name="kode" class="kode" value="<?= $data['kode']; ?>"></p>
    <div>
        <button type="submit" value="Kirim" class="kirim">Kirim</button>
    </div>
</form>

<?= $this->include('template/admin_footer'); ?>