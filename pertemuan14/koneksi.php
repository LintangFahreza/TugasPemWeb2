<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'pertemuan14';


$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    echo 'Koneksi gagal';
} else {
    echo 'koneksi berhasil';
}
