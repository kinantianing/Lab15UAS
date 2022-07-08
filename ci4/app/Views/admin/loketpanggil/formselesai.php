<?= $this->include('template/admin_header'); ?>
<div>
    <div class="title">
        <h3>ANTRIAN SELESAI</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Panggilan Antrian</h5>
            <h1 class="card-text">A<?= $data['antrian_id']; ?></h1>
            <h5 class="card-title"><?= $data['loket_id']; ?></h5>
        </div>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Status</label>
            <select name="status" class="status" required>
                <option value="" hidden></option>
                <option value="0">Selesai</option>
            </select>
        </div>
        <div>
            <button type="submit" value="Kirim" class="kirim">Kirim</button>
        </div>
    </form>


    <?= $this->include('template/admin_footer'); ?>