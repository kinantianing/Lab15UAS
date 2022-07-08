<?= $this->include('template/user_header'); ?>

<div>
    <div class="title">
        <h3>LAYAR ANTRIAN</h3>
    </div>
    <div class="dashboard">
        <table class="table" id="customers">
            <thead>
                <tr style="background-color:#F8C471;">
                    <th>No. Antrian</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($antrian as $row) : ?>
                    <tr style="background-color: #D4EFDF;">
                        <td>A<?= $row['antrian_id']; ?></td>
                        <td>Berlangsung</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?= $this->include('template/user_footer'); ?>