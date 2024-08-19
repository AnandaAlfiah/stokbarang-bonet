<?php
session_start();
if (!isset($_SESSION['username'])) { 
    header("Location: ../index.php");
    exit();
}
include('../koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tanggal = $_POST['Tanggal_Pengeluaran'];
        $nama = $_POST['Nama_Barang'];
        $tipe = $_POST['Tipe'];
        $satuan = $_POST['Satuan'];
        $stok = $_POST['Stok'];
        $perangkat = $_POST['Perangkat'];

        $query = "UPDATE tb_pengeluaran_barang SET Tanggal_Pengeluaran='$tanggal', Nama_Barang='$nama', Tipe='$tipe', Satuan='$satuan', Stok='$stok', Perangkat='$perangkat' WHERE ID_Barang='$id'";

        if ($conn->query($query) === TRUE) {
            $_SESSION['message'] = "Data berhasil diupdate!";
            header("Location: pengeluaran-admin.php");
            exit();
        } else {
            $_SESSION['message'] = "Error: " . $query . "<br>" . $conn->error;
        }
    } else {
        $query = "SELECT * FROM tb_pengeluaran_barang WHERE ID_Barang='$id'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
    }
} else {
    header("Location: pengeluaran-admin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengeluaran Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Data Pengeluaran Barang</h2>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="Tanggal_Pengeluaran" class="form-label">Tanggal Pengeluaran</label>
            <input type="date" class="form-control" id="Tanggal_Pengeluaran" name="Tanggal_Pengeluaran" value="<?= htmlspecialchars($row['Tanggal_Pengeluaran']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="Nama_Barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="Nama_Barang" name="Nama_Barang" value="<?= htmlspecialchars($row['Nama_Barang']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="Tipe" class="form-label">Tipe</label>
            <input type="text" class="form-control" id="Tipe" name="Tipe" value="<?= htmlspecialchars($row['Tipe']) ?>">
        </div>
        <div class="mb-3">
            <label for="Satuan" class="form-label">Satuan</label>
            <input type="text" class="form-control" id="Satuan" name="Satuan" value="<?= htmlspecialchars($row['Satuan']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="Stok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="Stok" name="Stok" value="<?= htmlspecialchars($row['Stok']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="Perangkat" class="form-label">Perangkat</label>
            <input type="text" class="form-control" id="Perangkat" name="Perangkat" value="<?= htmlspecialchars($row['Perangkat']) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="pengeluaran-admin.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
