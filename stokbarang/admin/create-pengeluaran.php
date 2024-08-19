<?php
session_start();
if (!isset($_SESSION['username'])) { 
    header("Location: ../index.php");
    exit();
}
include('../koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tanggal = $_POST['Tanggal_Pengeluaran'];
    $nama = $_POST['Nama_Barang'];
    $tipe = $_POST['Tipe'];
    $satuan = $_POST['Satuan'];
    $stok = $_POST['Stok'];
    $perangkat = $_POST['Perangkat'];

    $query = "INSERT INTO tb_pengeluaran_barang (Tanggal_Pengeluaran, Nama_Barang, Tipe, Satuan, Stok, Perangkat) 
              VALUES ('$tanggal', '$nama', '$tipe', '$satuan', '$stok', '$perangkat')";

    if ($conn->query($query) === TRUE) {
        $_SESSION['message'] = "Data berhasil ditambahkan!";
        header("Location: pengeluaran-admin.php");
        exit();
    } else {
        $_SESSION['message'] = "Error: " . $query . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengeluaran Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Data Pengeluaran Barang</h2>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="Tanggal_Pengeluaran" class="form-label">Tanggal Pengeluaran</label>
            <input type="date" class="form-control" id="Tanggal_Pengeluaran" name="Tanggal_Pengeluaran" required>
        </div>
        <div class="mb-3">
            <label for="Nama_Barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="Nama_Barang" name="Nama_Barang" required>
        </div>
        <div class="mb-3">
            <label for="Tipe" class="form-label">Tipe</label>
            <input type="text" class="form-control" id="Tipe" name="Tipe">
        </div>
        <div class="mb-3">
            <label for="Satuan" class="form-label">Satuan</label>
            <input type="text" class="form-control" id="Satuan" name="Satuan" required>
        </div>
        <div class="mb-3">
            <label for="Stok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="Stok" name="Stok" required>
        </div>
        <div class="mb-3">
            <label for="Perangkat" class="form-label">Perangkat</label>
            <input type="text" class="form-control" id="Perangkat" name="Perangkat" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="pengeluaran-admin.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
