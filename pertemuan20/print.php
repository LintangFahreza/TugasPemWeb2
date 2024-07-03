<?php
session_start();
require_once('config.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM karyawan";
$result = $conn->query($sql);

$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cetak Data Karyawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody+tbody {
            border-top: 2px solid #dee2e6;
        }

        /* Menyembunyikan tombol cetak dan kembali saat halaman dicetak */
        @media print {
            .print-btns {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1>PT Lintang Fahreza Jaya Abadi</h1>
        <h2>Data Karyawan</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['idkar']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['jk']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <div class="print-btns">
            <button class="btn btn-primary" onclick="window.print()">Cetak</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</body>

</html>