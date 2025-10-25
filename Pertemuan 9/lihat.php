<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM catatan WHERE id=$id");
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lihat Catatan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2><?= htmlspecialchars($data['judul']) ?></h2>

<div class="view-container">
    <label>Judul</label>
    <input type="text" value="<?= htmlspecialchars($data['judul']) ?>" readonly>

    <label>Tanggal</label>
    <input type="text" value="<?= $data['tanggal'] ?>" readonly>

    <label>Isi Catatan</label>
    <textarea rows="6" readonly><?= htmlspecialchars($data['isi']) ?></textarea>

    <div class="actions">
        <a href="index.php" class="btn">Kembali</a>
        <a href="edit.php?id=<?= $data['id'] ?>" class="btn">Edit</a>
    </div>
</div>

</body>
</html>
