<?php
include 'koneksi.php';

$sql = "SELECT COUNT(*) AS total_pelanggan, SUM(100000) AS total_pendapatan FROM pelanggan";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Laporan</title>
</head>
<body>
    <div class="container">
        <h2>Laporan dan Analitik</h2>
        <p>Total Pelanggan: <?php echo $data['total_pelanggan']; ?></p>
        <p>Total Pendapatan: Rp. <?php echo number_format($data['total_pendapatan'], 0, ',', '.'); ?></p>
    </div>
</body>
</html>
