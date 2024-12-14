<?php
include 'php/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO pelanggan (nama, alamat) VALUES ('$nama', '$alamat')";
    if ($conn->query($sql) === TRUE) {
        echo "Data pelanggan berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Manajemen Pelanggan</title>
</head>
<body>
    <div class="container">
        <h2>Tambah Pelanggan</h2>
        <form action="" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>
