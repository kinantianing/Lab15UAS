<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form action="" method="post" enctype="multipart/form-data">
    <p><input type="text" name="nama" class="nama" placeholder="Nama Pelayanan"></p>
    <p><textarea name="keterangan_ply" cols="50" class="textarea" rows="10" placeholder="Isi Keterangan"></textarea></p>
    <p><input type="text" name="kode" class="kode" placeholder="Kode"></p>
    <div>
        <button type="submit" value="Kirim" class="kirim">Kirim</button>
    </div>
</form>

<?= $this->include('template/admin_footer'); ?>