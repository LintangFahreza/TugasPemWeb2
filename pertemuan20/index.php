<?php
session_start();
require_once('config.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Inisialisasi variabel pencarian
$search = '';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST['search'];
}

// Query SQL untuk mencari data karyawan
$sql = "SELECT * FROM karyawan WHERE 
            nama LIKE '%$search%' OR
            jk LIKE '%$search%' OR
            alamat LIKE '%$search%'";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        <h1>PT Lintang Fahreza Jaya Abadi</h1>
        <h2 class="mb-4">Data Karyawan</h2>
        <form class="mb-3" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari berdasarkan nama, jenis kelamin, atau alamat" name="search">
                <button class="btn btn-outline-secondary" type="submit">Cari</button>
                <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="btn btn-outline-primary">Tampilkan Semua</a>
            </div>
        </form>
        <a href="crud/add.php" class="btn btn-primary mb-3">Tambah Karyawan</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['idkar']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['jk']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td>
                            <a href="crud/edit.php?id=<?php echo $row['idkar']; ?>" class="btn btn-sm btn-info">Edit</a>
                            <a href="crud/delete.php?id=<?php echo $row['idkar']; ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="print.php" target="_blank" class="btn btn-secondary">Cetak Data</a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>

</html>