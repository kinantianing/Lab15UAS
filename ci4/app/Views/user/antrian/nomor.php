<?= $this->include('template/user_header'); ?>

<div class="card">
    <div class="card-body">
        <?php foreach ($antrian as $row) : ?>
            <h5 class="card-title">NOMOR ANTRIAN ANDA</h5>
            <h1 class="card-text">A<?= $row['antrian_id']; ?></h1>
            <h5 class="card-title"></h5>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->include('template/user_footer'); ?>