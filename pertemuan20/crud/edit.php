<?php
session_start();
require_once('../config.php');

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    // Query SQL untuk update data karyawan
    $sql = "UPDATE karyawan SET nama='$nama', jk='$jk', alamat='$alamat' WHERE idkar=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php"); // Redirect ke halaman utama setelah berhasil edit data
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Ambil data karyawan berdasarkan id
$id = $_GET['id'];
$sql = "SELECT * FROM karyawan WHERE idkar=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Karyawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Data Karyawan</h2>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $row['idkar']; ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jk" name="jk" required>
                    <option value="Laki-laki" <?php if ($row['jk'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                    <option value="Perempuan" <?php if ($row['jk'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="../index.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>

</html>