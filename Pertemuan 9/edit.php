<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM catatan WHERE id=$id");
$data = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $conn->query("UPDATE catatan SET judul='$judul', isi='$isi' WHERE id=$id");
    header("Location: index.php?status=edit");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Catatan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Edit Catatan</h2>
<form method="post">
    <label>Judul</label>
    <input type="text" name="judul" value="<?= htmlspecialchars($data['judul']) ?>" required>
    <label>Isi</label>
    <textarea name="isi" rows="6" required><?= htmlspecialchars($data['isi']) ?></textarea>
    <button type="submit">Update</button>
    <a href="index.php" class="btn">Kembali</a>
</form>
</body>
</html>
