<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PAMDesa Dashboard</title>
</head>
<body>
    <div class="container">
        <h1>Dashboard PAMDesa</h1>
        <nav>
            <ul>
                <li><a href="form_pelanggan.php">Manajemen Pelanggan</a></li>
                <li><a href="php/tagihan.php">Manajemen Tagihan</a></li>
                <li><a href="php/pembayaran.php">Sistem Pembayaran</a></li>
                <li><a href="php/laporan.php">Laporan dan Analitik</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>
