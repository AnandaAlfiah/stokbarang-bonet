<?php
session_start();
include('koneksi.php');

if (!isset($_SESSION['limit']) && !isset($_GET['limit'])) {
    $_SESSION['limit'] = 20;
}

$search = isset($_GET['search']) ? $_GET['search'] : '';
$total_query = "SELECT COUNT(*) as total FROM tb_pemasukan_barang WHERE Nama_Barang LIKE '%$search%'";
$total_result = $conn->query($total_query);
$total_row = $total_result->fetch_assoc();
$total = $total_row['total'];

if (isset($_GET['limit'])) {
    if ($_GET['limit'] == 'all') {
        $_SESSION['limit'] = $total;
    } else {
        $_SESSION['limit'] = (int)$_GET['limit'];
    }
}

$limit = isset($_SESSION['limit']) ? (int)$_SESSION['limit'] : 25;

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$query = "SELECT * FROM tb_pemasukan_barang WHERE Nama_Barang LIKE '%$search%' LIMIT $limit OFFSET $offset";
$result = $conn->query($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventoris PT Bonet Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
        }
        .navbar-custom {
            background-color: #B83C08;
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: #fff;
        }
        .navbar-custom .nav-link:hover {
            color: #000;
        }
        .container {
            padding-top: 100px;
        }
        .table {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container p-1">
            <a class="navbar-brand" href="index.php">Bonet Utama</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pemasukan.php">Pemasukan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pengeluaran.php">Pengeluaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2>Daftar Pemasukan Barang - User View</h2>
        <div class="actions mb-3">
            <form method="GET" action="pemasukan.php" class="d-inline">
                <div class="btn-group" role="group">
                    <input type="hidden" name="search" value="<?= htmlspecialchars($search) ?>">
                    <button type="submit" name="limit" value="5" class="btn btn-outline-secondary">5</button>
                    <button type="submit" name="limit" value="10" class="btn btn-outline-secondary">10</button>
                    <button type="submit" name="limit" value="15" class="btn btn-outline-secondary">15</button>
                    <button type="submit" name="limit" value="20" class="btn btn-outline-secondary">20</button>
                    <button type="submit" name="limit" value="all" class="btn btn-outline-secondary">All</button> <!-- Tambahkan tombol All -->
                </div>
            </form>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php 
                $total_pages = ceil($total / $limit);
                for ($i = 1; $i <= $total_pages; $i++): ?>
                    <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                        <a class="page-link" href="pemasukan.php?page=<?= $i ?>&limit=<?= $limit ?>&search=<?= htmlspecialchars($search) ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>

        <form class="d-flex mb-3" method="GET" action="pemasukan.php">
            <input class="form-control me-2" type="search" placeholder="Cari nama barang" aria-label="Search" name="search" value="<?= htmlspecialchars($search) ?>">
            <button class="btn btn-outline-success" type="submit">Cari</button>
        </form>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Tanggal Pembelian</th>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Tipe</th>
                    <th>Satuan</th>
                    <th>Stok</th>
                    <th>Perangkat</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                <?php 
                $tanggal = date("d F Y", strtotime($row['Tanggal_Pembelian']));
                ?>
                <td><?= htmlspecialchars($tanggal) ?></td>
                    <td><?= htmlspecialchars($row['ID_Barang']) ?></td>
                    <td><?= htmlspecialchars($row['Nama_Barang']) ?></td>
                    <td><?= htmlspecialchars($row['Tipe']) ?></td>
                    <td><?= htmlspecialchars($row['Satuan']) ?></td>
                    <td><?= htmlspecialchars($row['Stok']) ?></td>
                    <td><?= htmlspecialchars($row['Perangkat']) ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
