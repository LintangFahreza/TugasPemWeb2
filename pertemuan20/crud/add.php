<?php
session_start();
require_once('../config.php');

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari form
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    // Query SQL untuk tambah data karyawan
    $sql = "INSERT INTO karyawan (nama, jk, alamat) VALUES ('$nama', '$jk', '$alamat')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php"); // Redirect ke halaman utama setelah berhasil tambah data
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Tambah Karyawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Tambah Data Karyawan</h2>
        <form method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jk" name="jk" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="../index.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>

</html>