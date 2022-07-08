<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('user_style.css'); ?>">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar">
            <div class="container-fluid" style="background-color: #86B9A8  ;">
                <a class="navbar-brand" href="#">PORTAL ANTRIAN</a>
            </div>
        </nav>
        <div class="row">
            <div class="col-sm-3">
                <!-- Sidebar  -->
                <div class="sidebar">
                    <div class="list-group">
                        <a href="<?= base_url('/user/antrian/dashboard'); ?>" class="list-group-item list-group-item-action list-group-item-success">DASHBOARD</a>
                        <a href="<?= base_url('/user/antrian'); ?>" class="list-group-item list-group-item-action list-group-item-light">Menu Antrian</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="content">