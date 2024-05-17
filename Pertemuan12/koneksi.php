<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'dbBerita';


$konek = mysqli_connect($host, $user, $pass, $db);
if (!$konek) {
    echo 'Koneksi gagal';
} else {
    echo 'koneksi berhasil';
}
