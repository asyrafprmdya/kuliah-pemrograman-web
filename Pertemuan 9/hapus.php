<?php
include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM catatan WHERE id=$id");
header("Location: index.php?status=hapus");
exit;
?>
