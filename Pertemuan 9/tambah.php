<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $conn->query("INSERT INTO catatan (judul, isi) VALUES ('$judul', '$isi')");
    header("Location: index.php?status=tambah");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Catatan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Tambah Catatan</h2>
<form method="post">
    <label>Judul</label>
    <input type="text" name="judul" required>
    <label>Isi</label>
    <textarea name="isi" rows="6" required></textarea>
    <button type="submit">Simpan</button>
    <a href="index.php" class="btn">Kembali</a>
</form>
</body>
</html>
