<?php
session_start();
require_once('../config.php');

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

// Handle deletion
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query SQL untuk hapus data karyawan
    $sql = "DELETE FROM karyawan WHERE idkar=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php"); // Redirect ke halaman utama setelah berhasil hapus data
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
