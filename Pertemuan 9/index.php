<?php
include 'db.php';
$result = $conn->query("SELECT * FROM catatan ORDER BY tanggal DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Catatan</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        if ('$status' === 'tambah') {
            Swal.fire({icon: 'success', title: 'Berhasil', text: 'Catatan berhasil ditambahkan', confirmButtonColor: '#00796b'});
        } else if ('$status' === 'edit') {
            Swal.fire({icon: 'success', title: 'Berhasil', text: 'Catatan berhasil diperbarui', confirmButtonColor: '#00796b'});
        } else if ('$status' === 'hapus') {
            Swal.fire({icon: 'success', title: 'Berhasil', text: 'Catatan berhasil dihapus', confirmButtonColor: '#00796b'});
        }
    });
    </script>";
}
?>

<h2>Dashboard Catatan</h2>
<a href="tambah.php" class="btn">+ Tambah Catatan</a>

<table>
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>
    <?php $no=1; while($row=$result->fetch_assoc()): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= htmlspecialchars($row['judul']) ?></td>
        <td><?= $row['tanggal'] ?></td>
        <td>
            <a href="lihat.php?id=<?= $row['id'] ?>" class="btn">Lihat</a>
            <a href="edit.php?id=<?= $row['id'] ?>" class="btn">Edit</a>
            <button class="btn" style="background:#d32f2f" onclick="hapusData(<?= $row['id'] ?>)">Hapus</button>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<script>
function hapusData(id) {
    Swal.fire({
        title: 'Yakin hapus catatan ini?',
        text: 'Data yang dihapus tidak bisa dikembalikan',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#00796b',
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = 'hapus.php?id=' + id;
        }
    });
}
</script>

</body>
</html>
