<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('admin_style.css'); ?>">
    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar" style="background-color: #86B9A8  ;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">PORTAL ANTRIAN</a>
            </div>
        </nav>
        <div class="row">
            <div class="col-sm-3">
                <!-- Sidebar  -->
                <div class="sidebar">
                    <div class="list-group">
                        <a href="<?= base_url('/admin/dashboard'); ?>" class="list-group-item list-group-item-action list-group-item-success">DASHBOARD</a>
                        <a href="<?= base_url('/admin/loketpanggil/panggil'); ?>" class="list-group-item list-group-item-action list-group-item-light active">Loket Panggil</a>
                        <a href="<?= base_url('/admin/loketpanggil'); ?>" class="list-group-item list-group-item-action list-group-item-light">Daftar Antrian</a>
                        <a href="<?= base_url('/admin/pelayanan'); ?>" class="list-group-item list-group-item-action list-group-item-light">Pelayanan</a>
                        <a href="<?= base_url('/admin/loket'); ?>" class="list-group-item list-group-item-action list-group-item-light">Loket</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="content">