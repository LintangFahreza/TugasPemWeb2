<?php

include 'koneksi.php';
$kode = $_POST['kode'];
$jumlah = $_POST['jumlah'];

// Menginput data ke database
mysqli_query($koneksi, "CALL update_datatable('$kode','$jumlah')");

// Mengalihkan halaman kembali ke form.php
header("location: form.php");
